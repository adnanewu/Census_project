<!DOCTYPE html>
<html>
<head>
    <title></title>


    @if($msg=Session::get('msg'))
    {{$msg}}
    @endif
    <!-- <a href="/ListData">List Data</a> -->
    <a href="/list_course">List Course</a>
    <br/>
    <br/>

    </head>
    <body>
    



    <form action="/InsertData_course" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
         
      @php
      $courses=DB::table('course')->get();
      @endphp
     Courses:<select name="course">
      @foreach($courses as $course)
      <option value="{{ $course->course_id }}">{{ $course->course_desc }}</option>
      @endforeach>
        
      </select>

     
      @php
      $durations=DB::table('duration')->get();
      @endphp
      Duration:<select name="duration_id">
      @foreach($durations as $duration)
      <option value="{{ $duration->duration_id }}">{{ $duration->duration_desc }}</option>
      @endforeach>
        
      </select>
     
     
    
 
      

      <br>
      <br>
      <td>
      
      </td>
      <input type="Submit"  name="Submit"value="Submit">        
    </form>

</body>




</html>