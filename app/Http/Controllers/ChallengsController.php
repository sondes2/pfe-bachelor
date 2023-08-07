<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Middleware\CHeckRole;
use Validator;
use App\Challengs;
use App\Challenge_participants;
use Auth;
use Illuminate\Routing\Redirector;

class ChallengsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
      $this->middleware('CHeckRole:admin,trainer,user');
    }

    public function index(){
      return view('admin.listechallengs')->with('challengs',Challengs::get());
    }
 

    public function  getmy(){
    
      $challengs = Challengs::limit(30)->get();
      $participants = array();
        $Challenge_participants = Challenge_participants::get();
        foreach($challengs as $c){
            $k = 0;
            foreach($Challenge_participants as $cx){
                if($c->id == $cx->id_challenge)
                    $k++;
            }
            $participants[$c->id] = $k;
        }

       /* Textes complets	
        id
        id_challenge
        id_user */

        $Challenge_participants = Challenge_participants::where('id_user','=',auth()->user()->id)->get();
        $in = array();
        foreach($challengs as $c){
            $k = 0;
            foreach($Challenge_participants as $cx){
                if($c->id == $cx->id_challenge)
                    $k++;
            }
            $in[$c->id] = $k;
        }

      return view('pages.challengs')->with('challengs',$challengs)->with('participants',$participants)->with('challengsin',$in);
  }
  
  public function sub(Request $request){
    $id = $request->input('id_challenge');
    $action = $request->input('action');
    $c = new Challenge_participants();
    if($action == "add"){
      $c->id_challenge = $id;
      $c->id_user = auth()->user()->id;

      $c->save();
    }else{
      Challenge_participants::where('id_challenge', $id)->delete();
    }
    return back();

  }

  public function api(){
    $user = challengs::get();
    
    return $user->toJson(JSON_PRETTY_PRINT);
  }


  



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return  view ('admin.addChallenge');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $c = new Challengs();

          $fileName = null;

          $c->title =$request->input('title');
          $c->description =$request->input('description');
          $c->startDate =$request->input('startDate');
         
        $c->save();

        if (request()->hasFile('challengeimg')) {
          $file = request()->file('challengeimg');
          $fileName = $c->id.'.jpg';
          $file->move(public_path().'/images/events/', $fileName);
          $img = public_path().'/images/events/'.$fileName;
          list($w, $h) = getimagesize($img);
          $x = ($w > $h) ? $h :$w ;
          $this->resize_crop_image(600, 400, $img, $img);
          $c->image = $c->id;
      }

      
      $c->save();

        return redirect('ListChallengs')->with('flash_message','Thank you for your message');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $challengs = Challengs::where('id',$id)->first();

          return view('admin.editChallenge' , ['challenge'=>$challengs]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, User $user)
    {
        //



        $c = Challengs::find($id);
        $c->title =$request->input('title');
        $c->description =$request->input('description');
        $c->startDate =$request->input('startDate');
       
      $c->save();

      if (request()->hasFile('challengeimg')) {
        $file = request()->file('challengeimg');
        $fileName = $c->id.'.jpg';
        $file->move(public_path().'/images/events/', $fileName);
        $img = public_path().'/images/events/'.$fileName;
        list($w, $h) = getimagesize($img);
        $x = ($w > $h) ? $h :$w ;
        $this->resize_crop_image(600, 400, $img, $img);
        $c->image = $c->id;
    }

    
    $c->save();

        return redirect('ListChallengs')->with('flash_message','Thank you for your message');

        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function destroy($id)
    {

      Challengs::find($id)->delete();
     //Session::flash('success', 'Trainer Deleted');
      //  return redirect()->back();
      return back();
    }



    private function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $quality = 80){
      $imgsize = getimagesize($source_file);
      $width = $imgsize[0];
      $height = $imgsize[1];
      $mime = $imgsize['mime'];
   
      switch($mime){
          case 'image/gif':
              $image_create = "imagecreatefromgif";
              $image = "imagegif";
              break;
   
          case 'image/png':
              $image_create = "imagecreatefrompng";
              $image = "imagepng";
              $quality = 7;
              break;
   
          case 'image/jpeg':
              $image_create = "imagecreatefromjpeg";
              $image = "imagejpeg";
              $quality = 80;
              break;
   
          default:
              return false;
              break;
      }
       
      $dst_img = imagecreatetruecolor($max_width, $max_height);
      $src_img = $image_create($source_file);
       
      $width_new = $height * $max_width / $max_height;
      $height_new = $width * $max_height / $max_width;
      //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
      if($width_new > $width){
          //cut point by height
          $h_point = (($height - $height_new) / 2);
          //copy image
          imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
      }else{
          //cut point by width
          $w_point = (($width - $width_new) / 2);
          imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
      }
       
      $image($dst_img, $dst_dir, $quality);
   
      if($dst_img)imagedestroy($dst_img);
      if($src_img)imagedestroy($src_img);
  }

}
