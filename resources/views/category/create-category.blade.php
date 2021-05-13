@extends('mainsidebar')
@section('contentbody')

<div class="content-wrapper mr-5">
    <h2>{{ Session::get('category') }}</h2>
<?php echo Form::open(array('url'=>'postCategory'));?>
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="role" placeholder="Enter Role Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Code</label>
    <input type="text" class="form-control" name="code" placeholder="Enter Role Code">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo Form::close(); ?>

</div>


   
@endsection