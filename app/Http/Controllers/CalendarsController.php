<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function __construct()
  {
    //  $this->middleware('bex')->except('home');
  }

  public function aaa()
  {
    $tmp = "";



    $Calendar = Calendar::all();

    foreach ($Calendar as $c) {
      $t = ",{
          title: '".$c->Title."',
          description: '".$c->Description."',
          start: moment('".$c->StartDate."'),
          end: moment('".$c->EndDate."'),
          className: 'm-fc-Calendar--accent'
      }";
      $tmp .= $t;
    }


    $rst = "  [ ,{
           title: 'Meeting',
           start: moment('2019-08-28'),
           description: 'Lorem ipsum dolor sit incid idunt ut',
           className: 'm-fc-event--light m-fc-event--solid-warning'
       },
       ]";
       $tmp = substr($tmp,1);
    return view('pages.Calendar')->with('_JSON', "[".$tmp."]");

}
  public function liste()
  {
      $Calendar = Calendar::all();
      return view('pages.Calendar')->with('Calendar', $Calendar);
  }
  public function add(Request $request)
  {
    $Calendar= new Calendar();
        $Calendar->Title =$request->input('Title');
        $Calendar->StartDate =$request->input('StartDate');
        $Calendar->EndDate =$request->input('EndDate');
        $Calendar->Description =$request->input('Description');
        $Calendar->Type =$request->input('Type');
        // date("Y-m-d")
$Calendar->save();
return redirect()->back();




}
}
