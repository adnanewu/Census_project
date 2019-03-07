<?php

namespace App\Http\Controllers;
use App\tbl_course;
use App\duration;
use Illuminate\Http\Request;
use DB;

class coursecontroller extends Controller
{
   public function index()
    {
        return view('add_course');
    }
    public function store( Request $request)
     	{
          

           //dd(implode(',', $request->Course));

          DB::table('tbl_courses')->insert(['course_id' => implode(',', $request->course_id),  'duration_id'=>$request->duration_id]);
            
            

         //DB::table('tbl_courses')->insert(['course' = $request->course,'duration_id' => $request->duration_id,]);
           


           //$input=$request->all();
           //tbl_course::create($input);
           //return redirect('/')->with('msg','Insert Data Successfully');

        //DB::table('tbl_courses')->insert(['course' => implode (", ", $request->course),'duration_id' => $request->duration_id]); 
       //DB::table('tbl_courses')->insert([$request->course = implode(' , ', $request->course),]);
       
                            

         //DB::table('tbl_courses')->insert(['duration_id' => $request->duration_id, 'course' => implode (", ", $request->course),]); 
         //$temp->extra_services = implode(',',$request->extra_services);
     		//dd($request);
           //DB::table('tbl_courses')->insert([$request->course = implode(',' ,'$request->course'),'duration_id' =>$request->duration_id]);
           	
           	//dd($request->course);
           //DB::table('tbl_courses')->insert(['course' => implode(',', $request->course),'duration_id' =>$request->duration_id]);
           	



           	return redirect('/add_course')->with('msg','Insert Data Successfully');

           
 		} 
 		 public function Allcourse()
    {
        $data=tbl_course::get();
        return view('list_course',compact('data'));
    }  
     public function showCourse($id)
    {
        $data=tbl_course::where('id',$id)->first();
        $data->delete();
        return redirect('list_course');
    }       
     	
     public function editCourse($id)
    {
       //DB::table('tbl_courses')->insert(['course_id' => expload(',', $request->course_id),  'duration_id'=>$request->duration_id]);
        $data=tbl_course::where('id',$id)->first();
        return view('courseedit',compact('data'));
    }

    public function updateDataCourse(Request $request,$id)
    {
    	//dd($request->all());


    	//dd(implode(',', $request->course_id));
    	$input=$request->all();
        $data=tbl_course::where('id',$id)->first();
        //DB::table('tbl_courses')->insert(['course_id' => implode(',', $request->course_id),  'duration_id'=>$request->duration_id]);
       
        $data->fill($input);
        $data->course_id = implode(",",$request->course_id);
        $data->save();


        
        //dd(implode(',', $request->course_id));
        return redirect('list_course');
    }
   
    public function destroy(tbl_course $tbl_course)
    {
        //
    }
}


