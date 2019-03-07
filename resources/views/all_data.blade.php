<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><a href="/degignated_person">ADD_dpersons</a></center>
  
         
  <table align="center" border="1">
    <tr>
      <th>No</th>
      <th>trainee_name</th>
      <th>relation_with_house_hold</th>
      <th>fathers_name</th>
      <th>mothers_name</th>
      <th>dob</th>
      <th>gender_id</th>
      <th>occupation_id</th>
      <th>religion_id</th>
      <th>education_id</th>
      <th>marital_id</th>
      <th>mobile_no</th>
      <th>present_address</th>
      <th>nid</th>
      <th>Action</th>
    </tr>
    
    @foreach($data as $key=>$val)
    <tr>
      <td>{{++$key}}</td>
      <td>{{$val->trainee_name}}</td>
      <td>{{$val->relation_with_house_hold}}</td>
      <td>{{$val->fathers_name}}</td>
      <td>{{$val->mothers_name}}</td>
      <td>{{$val->dob}}</td>
      <td>{{$val->gender_id}}</td>
      <td>{{$val->occupation_id}}</td>
      <td>{{$val->religion_id}}</td>
      <td>{{$val->education_id}}</td>
      <td>{{$val->marital_id}}</td>
      <td>{{$val->mobile_no}}</td>
      <td>{{$val->present_address}}</td>
      <td>{{$val->nid}}</td></td><td><a href="/Del-dperson/{{$val->id}}">Delete</a> || <a href="/edit-dperson/{{$val->id}}">Edit</a><th></td>
    </tr>
    @endforeach
    
  </table>

</body>


</html>