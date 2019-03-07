<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="/update-census/{{$data->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
     
     household_id:<input type="text" name="household_id" value="{{$data->household_id}}">
      <br>
      <br>
      Name:<input type="text" name="name" value="{{$data->name}}">
      <br>
      <br>
      fathers_name:<input type="text" name="fathers_name"value="{{$data->fathers_name}}">
      <br>
      <br>
      mothers_name:<input type="text" name="mothers_name" value="{{$data->mothers_name}}">
      <br>
      <br>
      
      @php
      $occupations=DB::table('occupation')->get();
      @endphp
     <select>
    @foreach($occupations as $occupation)
    <option value="{{ $occupation->occupation_id }}" {{ $occupation->occupation_id == $data->occupation_id ? 'selected': '' }}>{{ $occupation->occupation_desc }}</option>
    @endforeach
    </select>
      
      
      
      mobile_no:<input type="text" name="mobile_no" value="{{$data->mobile_no}}">
      <br>
      <br>
      nid:<input type="text" name="nid" value="{{$data->nid}}">
      <br>
      <br>
      @php
      $educations=DB::table('education')->get();
      @endphp
      Education:<select name="education_id">
        
      @foreach($educations as $education)
      <option value="{{ $education->education_id }}" {{ $education->education_id == $data->education_id ? 'selected': '' }}>{{ $education->education_desc }}</option>
    @endforeach
    </select>
    

        
      </select>
      

      <br>
      <br>

      dob:<input type="date" name="dob" value="{{$data->dob}}">
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
      
      <input type="submit" name="sub" value="update">        
    </form>

</body>
</html>