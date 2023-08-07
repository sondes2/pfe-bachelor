<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('bex')->except('home');
    }

    public function index()
    {
        $Calendar = Calendar::select("id", "Title as title", "StartDate as start", "EndDate as end", "Description as description", "allDay as allDay", "Type as color")->get()->ToArray();
        return response()->json($Calendar);
    }

    public function list()
    {
        $Calendar = Calendar::all();
        return view('Calendar.list')->with('Calendar', $Calendar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Calendar = new Calendar;
        $Calendar->Title = $request->title;
        $Calendar->Description = $request->description;
        $Calendar->StartDate = $request->start;
        $Calendar->EndDate = $request->end;
        $Calendar->allDay = $request->allDay;
        $Calendar->Type = $request->Type;
        $Calendar->save();
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Calendar = Event::find($id);
        $Calendar->Title = $request->title;
        $Calendar->Description = $request->description;
        $Calendar->StartDate = $request->start;
        $Calendar->EndDate = $request->end;
        $Calendar->Type = $request->Type;
        if ($request->allDay=='false'){
            $Calendar->allDay = 0;
        } else {$Calendar->allDay = 1;
        }

        $Calendar->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calendar::destroy($id);
    }
}
