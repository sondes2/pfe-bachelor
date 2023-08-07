<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Middleware\CHeckRole;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Personalinformation;
use App\Challengs;
use App\Challenge_participants;
use Auth;

class MyProfileController extends Controller
{

     public function __construct(){
      $this->middleware('CHeckRole:admin,trainer,user');
    }

    public function get(Request $request){
        $x = User::find(auth()->user()->id);
        return  view ('pages.myprofil')->with('data', $x );
    }
    public function  showmain(){
        $Bodymetrics = Personalinformation::where('id_user','=',auth()->user()->id)->orderBy('id','DESC')->distinct('dateU')->get();

        
        
        $wf = Personalinformation::where('id_user','=',auth()->user()->id)->orderBy('id','DESC')->distinct('dateU')->get()->first();
        $wl = Personalinformation::where('id_user','=',auth()->user()->id)->orderBy('id','DESC')->distinct('dateU')->get()->last();

        //`id`, `title`, `description`, `startDate`, `image`
        $challengs = Challengs::limit(30)->get();

        $w = abs((($wf->weight - $wl->weight) / $wl->weight) *100) ;
        $h = abs((($wf->height - $wl->height) / $wl->height) *100) ;
        
      
        $de = "";
        $da = "";
        foreach($Bodymetrics as $item){
            $de .= ",'".$item->dateU."'";
            $da .= ",'".$item->bmi."'";
        }
        $de = substr($de, 1); 
        $da = substr($da, 1); 

        $temp = 'labels:['.$de.'],datasets:[ {label: "BMI", borderColor: mApp.getColor("brand"), borderWidth: 2, pointBackgroundColor: mApp.getColor("brand"), backgroundColor: mApp.getColor("accent"), pointHoverBackgroundColor: mApp.getColor("danger"), pointHoverBorderColor: Chart.helpers.color(mApp.getColor("danger")).alpha(.2).rgbString(),data: ['.$da.']}]';

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
        return view('pages.profile')->with('data',$temp)->with('w',$w)->with('h',$h)->with('body',$Bodymetrics)->with('challengs',$challengs)->with('participants',$participants)->with('challengsin',$in);
    }


    public function update(Request $request){
        $fileName = null;
        $user = User::find(auth()->user()->id);
        
        if (request()->hasFile('profilimg')) {
            $file = request()->file('profilimg');
            $fileName = auth()->user()->id.'.jpg';
            $file->move(public_path().'/images/users/', $fileName);
            $img = public_path().'/images/users/'.$fileName;
            list($w, $h) = getimagesize($img);
            $x = ($w > $h) ? $h :$w ;
            $this->resize_crop_image($x, $x, $img, $img);
            $user->image = auth()->user()->id;
        }
        


        $user->name =$request->input('username');
        $user->first_name =$request->input('firstname');
        $user->last_name =$request->input('lastname');
        $user->email =$request->input('myemail');
        $user->adress =$request->input('adress');
        $user->birthDate =$request->input('birthdate');
        $oldp = $request->input('oldpass');
        $newp = $request->input('newpass');

        if(bcrypt($oldp) == $user->password){
            $user->password =bcrypt($newp);
        }
        
        $user->save();

        return $this->get($request);
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