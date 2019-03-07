<?php

namespace App\Http\Controllers;

use App\dperson;
use Illuminate\Http\Request;
use DB;

class traineecontroller extends Controller
{
    public function index()
    {
        return view('degignated_person');
    }

    
     

     	public function store( Request $request)
     	{
           //$input=$request->all();
           //dperson::create($input);
           //return redirect('/')->with('msg','Insert Data Successfully');

           DB::table('dpersons')->insert(
            [
                'trainee_name' =>$request->trainee_name,
                'relation_with_house_hold' =>$request->relation_with_house_hold,
                'fathers_name' =>$request->fathers_name,
                'mothers_name' =>$request->mothers_name,
                'dob' =>$request->dob,
                'gender_id' =>$request->gender_id,
                'occupation_id' =>$request->occupation_id,
                'religion_id' =>$request->religion_id,
                'education_id' =>$request->education_id,
                'marital_id' =>$request->marital_id,
                'religion_id' =>$request->religion_id,
                'mobile_no' =>$request->mobile_no,
                'present_address' =>$request->present_address,
                'nid' =>$request->nid
            ]);
           return redirect('/all_data')->with('msg','Insert Data Successfully');
     }
    
public function Allperson()
    {
        $data=dperson::get();
        return view('all_data',compact('data'));
        //dd($data);
	}
     

public function showPerson($id)
{
	$data=dperson::where('id',$id)->first();
	$data->delete();
	return redirect('all_data');
}
 public function editPerson($id)
    {
       
        $data=dperson::where('id',$id)->first();
        return view('dpersonedit',compact('data'));
    }

    public function updateDataPerson(Request $req,$id)
    {
        
        $input=$req->all();
        $data=dperson::where('id',$id)->first();
        $data->update($input);
        return redirect('all_data');
    }
    
     



}




