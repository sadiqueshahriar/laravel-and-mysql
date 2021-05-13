
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>name</th>    
    <th>email</th>
    <th>action</th>
  </tr>
  @foreach($select as $data)
  <tr>
    <td>{{ $data->email}}</td> <br>
    <td>{{ $data->pass}}</td> <br>
    <td><a href="{{ url('edit')}}/{{ $data->id }}">edit<a href="{{ url('delete') }}/{{ $data->id }}"> delete</a> </a></td> <br>
   
  </tr>
  @endforeach
 
  
</table>

</body>
</html>