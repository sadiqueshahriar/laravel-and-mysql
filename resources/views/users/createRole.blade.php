@extends('mainsidebar')
@section('contentbody')

<div class="content-wrapper mr-5">
    <h2>{{ Session::get('role') }}</h2>
<?php echo Form::open(array('url'=>'postRole'));?>
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Role Name</label>
    <input type="text" class="form-control" name="role" aria-describedby="role" placeholder="Enter Role Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Role Code</label>
    <input type="text" class="form-control" name="rolecode" placeholder="Enter Role Code">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo Form::close(); ?>

</div>


   
@endsection