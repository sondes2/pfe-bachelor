<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Messages;

use App\Http\Middleware\CHeckRole;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Foundation\Auth\RegistersUsers;

use Auth;

class MessagesController extends Controller
{

    public function __construct(){
        $this->middleware('CHeckRole:admin,trainer,user');
    }


    public function index(){
        $coach = User::where('role','<>' , 'user')->get();
        if(auth()->user()->role !="user"){
            $coach = User::where('role', 'user')->get();
        }
        
        $msgs = Messages::where([['mto','=', auth()->user()->id],['vu', '=',1]])->get();
        $vus = array();
        foreach ($coach as $c) {
            $k = 0;
            foreach ($msgs as $m) {
                if(($c->id == $m->mfrom)&&($m->vu != 0))
                $k++;
            }
            $vus[$c->id] = $k;
        }
        return view('pages.Messages')->with('liste',$coach)->with('vus',$vus);
    }

    
    public function getmsgbody(Request $request){
        $uid = $request->input('uid');
        $mid = auth()->user()->id;
        $msgs = Messages::where([['mto','=', $uid],['mfrom', '=',$mid ]])->orWhere([['mto','=', $mid],['mfrom', '=',$uid ]])->get();
        $tmp = "";
        foreach($msgs as $m){
            $type = ($m->mto == $mid) ? "in" : "out" ;
            $image = ($type == "in") ? User::find($uid)->image :User::find($mid)->image  ;
            $name = ($type == "in") ? User::find($uid)->first_name." ".User::find($uid)->last_name : User::find($mid)->first_name." ".User::find($mid)->last_name  ;
            $msg = $m->msg;
            
        
           $tmp .= $this->msgbody($type,$image,$name,$msg);
        }
        Messages::where(['mto','=', $mid])->update(['vu' => 0]);
        return $tmp;
    }

    public function send_msg(Request $request){
        $m = new Messages();
        $m->mfrom = auth()->user()->id;
        $m->mto = $request->input('mto');
        $m->msg = $request->input('msg');
        $m->datetime = "2019-05-14 00:00:00";
        $m->vu = 1;
        $m->save();
        

        return back();
    }
    
   /* messages 
    
+ Options
Textes complets	
id
mfrom
mto
msg
datetime
vu */
    
    


private function msgbody($type,$image,$name,$msg){
    return '<div class="m-messenger__wrapper"> '.
    '<div class="m-messenger__message m-messenger__message--'.$type.'">'.
        '<div class="m-messenger__message-pic">'.
            '<img src="'.url("images/users/".$image.".jpg").'" alt="" />'.
        '</div>'.
        '<div class="m-messenger__message-body">'.
            '<div class="m-messenger__message-arrow"></div>'.
            '<div class="m-messenger__message-content">'.
                '<div class="m-messenger__message-username">'.$name.'</div>'.
                '<div class="m-messenger__message-text">'.$msg.'</div>'.
            '</div>'.
        '</div>'.
    '</div>'.
    '</div>';
}

}
