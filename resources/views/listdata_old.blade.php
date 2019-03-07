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
      <th>Name</th>
      <th>Occupation</th>
      <th>Language</th>
      <th>Action</th>
    </tr>
    @foreach($data as $key=>$val)
    <tr>
      <td>{{++$key}}</td>
      <td>{{$val->name}}</td>
      <td>{{$val->occupation}}</td>
      <td>{{$val->language}}</td><td><a href="/Del/{{$val->id}}">Delete</a> || <a href="/edit/{{$val->id}}">Edit</a></td>
    </tr>
    @endforeach
  </table>

</body>
</html>