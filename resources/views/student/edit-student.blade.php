@extends('student.master-student')
@section('content')
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @section('title')
      Edit Student  
      @endsection
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    

  </head>
  <body>
     <section class="m-5">
    <h2 class="mt-5 mb-4">Edit student</h2>

<form action="{{ url('updatestudent') }}/<?php echo $student->id; ?>" method="post">
 @csrf
 <div class="form-group">
    
    <input type="text" class="form-control" name="student_name" placeholder="name" value="{{ $student->student_name }}">
  </div>
  <div class="form-group">
   
    <input type="number" class="form-control mt-3" name="registration" placeholder="registration" value="{{ $student->registration }}">
  </div> 
  <div class="form-group">
    
    <input type="text" class="form-control mt-3" name="department" placeholder="department" value="{{ $student->department }}">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control mt-3" name="info" placeholder="info" value="{{ $student->info }}">
  </div>  
   <div class="form-group">
    <input type="submit" class="form-control mt-3 bg-success text-white" value="update">
  </div>
     </section>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
@endsection