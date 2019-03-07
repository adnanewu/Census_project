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
         
    
      Name:<input type="text" name="name">
      <br>
      <br>
      @php
      $occupations=DB::table('occupations')->get();
      @endphp
      Occupation:<select name="occupation">
      @foreach($occupations as $occupation)
      <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
      @endforeach>
        
      </select>
     
      Language:<select multiple="" name="language[]" required=""  id="multiselect" >
    <option value="php">PHP</option>
    <option value="laravel">Laravel</option>
    <option value="codeigniter">Codeigniter</option>
    <option value="yii">Yii</option>
    </select>
    
 
      

      <br>
      <br>
      <td>
        <hr>
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






