@extends('mainsidebar')
@section('contentbody')

<div class="content-wrapper mr-5">
    <h2>{{ Session::get('postrole') }}</h2>
<?php echo Form::open(array('url'=>'postrole-set'));?>
 @csrf
  <div class="form-group">
     <label for="cars">roles:</label>

<select name="role" id="role">
    @foreach ($roleset as $role )
       <option value="{{ $role->role }}">{{ $role->role }}</option> 
    @endforeach
</select> 
  </div>
<div class="form-group">
     <label for="cars">Users:</label>
<select name="users" id="users">
    @foreach ( $select as $data)
        <option value="{{ $data->id }}">{{ $data->username }}</option>
    @endforeach
</select> 
  </div>
  
  <button type="submit" class="btn btn-primary">set</button>
<?php echo Form::close(); ?>

</div>


    
@endsection