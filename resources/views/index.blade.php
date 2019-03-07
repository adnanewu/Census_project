<!DOCTYPE html>
<html>
<head>
    <title></title>


    @if($msg=Session::get('msg'))
    {{$msg}}
    @endif
    <a href="/ListData">List Data</a>
    <br/>
    <br/>
<script src="http://bladephp.co/download/multiselect/jquery.min.js"></script>
<link href="http://bladephp.co/download/multiselect/jquery.multiselect.css" rel="stylesheet" />
<script src="http://bladephp.co/download/multiselect/jquery.multiselect.js"></script>
    </head>
    <body>
    



    <form action="/InsertData" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
         
    
      household_id:<input type="text" name="household_id">
      <br>
      <br>
      Name:<input type="text" name="name">
      <br>
      <br>
      fathers_name:<input type="text" name="fathers_name">
      <br>
      <br>
      mothers_name:<input type="text" name="mothers_name">
      <br>
      <br>
      @php
      $occupations=DB::table('occupation')->get();
      @endphp
      Occupation:<select name="occupation_id">
        <option value="">Select Occupation</option>
      @foreach($occupations as $occupation)
    <option value="{{ $occupation->occupation_id }}">{{ $occupation->occupation_desc }}</option>
      @endforeach>
    </select>
      
      mobile_no:<input type="text" name="mobile_no">
      <br>
      <br>
      nid:<input type="text" name="nid">
      <br>
      <br>
      @php
      $educations=DB::table('education')->get();
      @endphp
      Education:<select name="education_id">
        <option value="">Select Education</option>
      @foreach($educations as $education)
      <option value="{{ $education->education_id }}">{{ $education->education_desc }}</option>
      @endforeach>

        
      </select>
      

      <br>
      <br>

      dob:<input type="date" name="dob">
      <br>
      <br>
      @php
      $genders=DB::table('gender')->get();
      @endphp
      gender<select name="gender_id">
      <option value="">Select Gender</option>
      @foreach($genders as $gender)
      <option value="{{ $gender->gender_id }}">{{ $gender->gender_desc }}</option>
      @endforeach>
    </select>
      <br>
      <br>
      @php
      $religions=DB::table('religion')->get();
      @endphp
      Religion:<select name="religion_id">
      <option value="">Select Religion</option>
      @foreach($religions as $religion)
      <option value="{{ $religion->religion_id }}">{{ $religion->religion_desc }}</option>
      @endforeach>
    </select>
      <br>
      <br>
      @php
      $maritals=DB::table('marital')->get();
      @endphp
      marital:<select  name="marital_id">
      <option value="">Select Marital Status</option>
      @foreach($maritals as $marital)
      <option value="{{ $marital->marital_id }}">{{ $marital->marital_desc }}</option>
      @endforeach>
    </select>
      <br>
      <br>
      <input type="Submit"  name="Submit"value="Submit">        
       </form>


     </body>
     </html>