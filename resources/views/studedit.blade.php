<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="/update/{{$data->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      Name:<input type="text" name="name" value="{{$data->name}}">
      <br>
      <br>
      City:<input type="text" name="city" value="{{$data->city}}">
           
      <br>
      <br>
      <input type="submit" name="sub" value="update">        
    </form>

</body>
</html>