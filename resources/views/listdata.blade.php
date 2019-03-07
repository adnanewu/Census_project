<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><a href="/">ADD Data</a></center>
  <table align="center" border="1">
    <tr>
      <th>No</th>
      <th>household_id</th>
      <th>name</th>
      <th>fathers_name</th>
      <th>mothers_name</th>
      <th>occupation_id</th>
      <th>mobile_no</th>
      <th>nid</th>
      <th>education_id</th>
      <th>dob</th>
      <th>gender_id</th>
      <th>religion_id</th>
      <th>marital_id</th>
      <th>Action</th>


    </tr>
    @foreach($data as $key=>$val)
    <tr>
      <td>{{++$key}}</td>
      <td>{{$val->household_id}}</td>
      <td>{{$val->name}}</td>
      <td>{{$val->fathers_name}}</td>
      <td>{{$val->mothers_name}}</td>
      <td>{{$val->occupation_id}}</td>
      <td>{{$val->mobile_no}}</td>
      <td>{{$val->nid}}</td>
      <td>{{$val->education_id}}</td>
      <td>{{$val->dob}}</td>
      <td>{{$val->gender_id}}</td>
      <td>{{$val->religion_id}}</td>
      <td>{{$val->marital_id}}</td></td><td><a href="/DelCensus/{{$val->id}}">Delete</a> || <a href="/editCensus/{{$val->id}}">Edit</a><th></td>
    </tr>
    @endforeach


    
  </table>

  

</body>

</html>
