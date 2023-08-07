<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personalinformation;
class BodymetricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view ('pages.bodyMetrics')->with('Bodymetrics',Personalinformation::all()->orderBy('id','DESC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Bodymetrics = Personalinformation::orderBy('id','DESC')->distinct('dateU')->get();
        $json = "";
        foreach($Bodymetrics as $item){
            $json .= ",{period: '".$item->dateU."', weight: ".$item->weight.", height: ".$item->height.", bmi: ".$item->bmi."}";
        }
        $json = substr($json, 1); 

        $temp = "[".$json ."]";


        return  view ('pages.bodyMetrics')->with('Bodymetrics',$Bodymetrics)->with('data', $temp );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       $bodymetric = new Personalinformation();

            $bodymetric->height =$request->input('height');
            $bodymetric->weight =$request->input('weight');
            $bodymetric->dateU =$request->input('dateU');
            $bodymetric->bmi = $request->input('bmi');
            $bodymetric->save();
          return redirect()->back()->with('flash_message','The values have been added');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
