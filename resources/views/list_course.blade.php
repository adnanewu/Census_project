<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><a href="/add_course">ADD Course</a></center>

  <!-- <center><a href="/list_course">List Course</a></center> -->
  <table align="center" border="1">
    <tr>
      <th>No</th>
      <th>Courses</th>
      <th>Duration</th>
      <th>Action</th>
    </tr>

    
    @foreach($data as $key=>$vale)
    <tr>
      <td>{{++$key}}</td>
      <td>{{$vale->course_id}}</td>
      <td>{{$vale->duration_id}}</td>
      <td><a href="/Del-course/{{$vale->id}}">Delete</a> || <a href="/edit-course/{{$vale->id}}">Edit</a></td>
    </tr>
    @endforeach
  </table>

</body>
</html>