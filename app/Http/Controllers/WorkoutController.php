<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Middleware\CHeckRole;
use Validator;
use App\Challengs;
use App\Challenge_participants;
use Auth;
use App\Trainingprograms;
use Illuminate\Routing\Redirector;

class WorkoutController extends Controller
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
      return view('pages.workout')->with('workout',Trainingprograms::get());
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
  

}
