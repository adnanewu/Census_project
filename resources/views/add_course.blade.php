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
<script src="http://bladephp.co/download/multiselect/jquery.min.js"></script>
<link href="http://bladephp.co/download/multiselect/jquery.multiselect.css" rel="stylesheet" />
<script src="http://bladephp.co/download/multiselect/jquery.multiselect.js"></script>
    </head>
    <body>
    



    <form action="/InsertData_course" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
         
    
    @php
    $courses=DB::table('course')->get();
    @endphp
    Courses:<select multiple="" name="course_id[]" required=""  id="multiselect">
    @foreach($courses as $course)
    <option value="{{ $course->course_id }}">{{ $course->course_desc }}</option>
    @endforeach>
    </select>

    <!-- Courses:<select multiple="" name="Course[]" required=""  id="multiselect" > -->
    <!-- <option value="Fish meal"> Fish meal</option> -->
    <!-- <option value="Make paper bags and bags">Make paper bags and bags</option> -->
    <!-- <option value="Creating and marketing animal products">Creating and marketing animal products</option> -->
    <!-- <option value="Vegetable and fruit cultivation in the homestead">Vegetable and fruit cultivation in the homestead</option> -->
    <!-- <option value="Duck chicken keeping and poultry chicken food">Duck chicken keeping and poultry chicken food</option> -->
    <!-- <option value="Installing solar panel">Installing solar panel</option> -->
    <!-- <option value="Cooking and storage">Cooking and storage</option> -->
    <!-- <option value="Keeping the family cow">Keeping the family cow</option> -->
    <!-- <option value="Vermicomposting">Vermicomposting</option> -->
    <!-- <option value="Animal disease and its resistance">Animal disease and its resistance</option> -->
    <!-- <option value="Food preparation trainingi">Food preparation training</option> -->
    <!-- <option value="House Keeping & Laundry Operation">House Keeping & Laundry Operation</option> -->
    <!-- <option value="Photography">Photography</option> -->
    <!-- <option value="Keeping broilers and cockroaches">Keeping broilers and cockroaches</option> -->
    <!-- <option value="Dress making / sewing">Dress making / sewing</option> -->
    <!-- <option value="BeautificationMake jute goods">BeautificationMake jute goods</option> -->
    <!-- <option value="Make jute goods">Make jute goods</option> -->
    <!-- <option value="Fishery">Fishery</option> -->
    <!-- <option value="Turtle guide">Turtle guide</option> -->
    <!-- <option value="Rickshaw, bicycle and van repair">Rickshaw, bicycle and van repair</option> -->
    <!-- <option value="Mobile servicing and repairing goats">Mobile servicing and repairing goats</option> -->
    <!-- <option value="Keeping the goat">Keeping the goat</option> -->
    <!-- <option value="Fattening cattle">Fattening cattle</option> -->
    <!-- <option value="Basic Computers">Basic Computers</option> -->
    <!-- <option value="Modern Office Management and Computer Application">Modern Office Management and Computer Application</option> -->
    <!-- <option value="Electrical and house wiring">Electrical and house wiring</option> -->
    <!-- <option value="Electronics">Electronics</option> -->
    <!-- <option value="Refrigerators & Air Conditioners Repeating">Refrigerators & Air Conditioners Repeating</option> -->
    <!-- <option value="Mechanical Workshop & Lathe Machine Operator">Mechanical Workshop & Lathe Machine Operator</option> -->
    <!-- <option value="Driving Lights - Heavy">Driving Lights - Heavy</option> -->
    <!-- <option value="Radio / TV VCR / VPP Repair">Radio / TV VCR / VPP Repair</option> -->
    <!-- <option value="Pipe fitter">Pipe fitter</option> -->
    <!-- <option value="Welding">Welding</option> -->
    <!-- <option value="Masonry">Masonry</option> -->
    <!-- <option value="Wooden furniture making work">Wooden furniture making work</option> -->
    <!-- </select> -->

     
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


<script>
    $('document').ready(function(){
        $('#multiselect').multiselect({
            columns: 1,
            placeholder: 'Select Your Language',
            search: true,
            selectAll: true
        });
    });
</script>

</html>