<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Middleware\CHeckRole;
use Validator;

class TrainerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
       {
      $this->middleware('CHeckRole:admin,trainer,user');
    }

    public function index()
    {
        return  view ('pages.Trainers')->with('Trainers',User::paginate(8));
    }
    public function api(){
      $user = User::where('role', 'trainer')->get();
      
      return $user->toJson(JSON_PRETTY_PRINT);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin.addTrainer')->with('Trainers',User::get());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $user = new User();

          $fileName = null;
 



          $user->name =$request->input('username');
          $user->first_name =$request->input('firstname');
          $user->last_name =$request->input('lastname');
          $user->email =$request->input('myemail');
          $user->password = bcrypt($request->input('password'));
          $user->adress =$request->input('adress');
          $user->birthDate =$request->input('birthdate');
          $user->specialty =$request->input('specialty');
          $user->role = 'trainer';
          




          $user->valid =$request->input('valid');

        $user->save();

        if (request()->hasFile('profilimg')) {
          $file = request()->file('profilimg');
          $fileName = $user->id.'.jpg';
          $file->move(public_path().'/images/users/', $fileName);
          $img = public_path().'/images/users/'.$fileName;
          list($w, $h) = getimagesize($img);
          $x = ($w > $h) ? $h :$w ;
          $this->resize_crop_image($x, $x, $img, $img);
          $user->image = $user->id;
      }

      
      $user->save();

        return redirect('Trainers')->with('flash_message','Thank you for your message');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      $trainer = User::find($id);
    //  return view('admin.showTrainer',  ['trainer'=>$trainer]);
    echo 'name'.$trainer->name.' '.'<br>';



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
        $trainer = User::where('id',$id)->first();


          return view('admin.editTrainer' , ['user'=>$trainer]);

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



        $user = User::find($id);
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->adress =$request->input('adress');
        $user->birthDate =$request->input('birthDate');
        $user->specialty =$request->input('specialty');

        $user->save();


        return redirect('Trainers')->with('flash_message','Thank you for your message');

        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function destroy($id)
    {

        User::find($id)->delete();
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
