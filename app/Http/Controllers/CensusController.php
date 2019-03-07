<?php

namespace App\Http\Controllers;

use App\Census;
use DB;
use Illuminate\Http\Request;

class CensusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Allhouse()
    {
        $data=census::get();

        
        return view('listdata',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        census::create($input);
        return redirect('/')->with('msg','Insert Data Successfully');
        /*DB::table('censuses')->insert(
            [
                'household_id' =>$request->household_id,
                'name' =>$request->name,
                'fathers_name' =>$request->fathers_name,
                'mothers_name' =>$request->mothers_name,
                'occupation_id' =>$request->occupation_id,
                'mobile_no' =>$request->mobile_no,
                'nid' =>$request->nid,
                'education_id' =>$request->education_id,
                'dob' =>$request->dob,
                'gender_id' =>$request->gender_id,
                'religion_id' =>$request->religion_id,
                'marital_id' =>$request->marital_id
            ]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function showCensus($id)
    {
        $data=Census::where('id',$id)->first();
        $data->delete();
        return redirect('ListData');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function editCensus($id)
    {
        $data=census::where('id',$id)->first();
        return view('censusedit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function updateDataCensus(Request $req,$id)
    {
        $input=$req->all();
        $data=census::where('id',$id)->first();
        $data->update($input);
        return redirect('ListData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function delCensus( $id)
    {
        $data=Census::where('id',$id)->first();
        $data->delete();
        return redirect('ListData');


    }
}
