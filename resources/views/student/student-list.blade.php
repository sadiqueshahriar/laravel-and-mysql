@extends('student.master-student')
@section('content')
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @section('title')
      Student list
        
      @endsection
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    

  </head>
  <body class="bg-dark">


<table class="table table-dark m-3">
 
  <thead>
    <tr>
       <h3 class="text-white m-3">All Students Lists</h3>
      <th scope="col">id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Registration</th>
      <th scope="col">Department</th>
      <th scope="col">Info</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($studentlist as $student )
     <tr>
      <th scope="row">{{ $student->id }}</th>
      <td>{{$student->student_name}}</td>
      <td>{{$student->registration}}</td>
      <td>{{ $student->department}}</td>
      <td>{{ $student->info}}</td>
      <td><a class="btn btn-primary" href="{{url('editstudent',$student->id) }}">edit</a>  <a class="btn btn-danger" href="{{url('student-delete',$student->id) }}">delete</a></td>
    </tr>  
      @endforeach
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
@endsection