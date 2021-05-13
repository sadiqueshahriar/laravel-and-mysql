@extends('mainsidebar')
@section('contentbody')

<div class="content-wrapper mr-5">
    <h2>{{ Session::get('product') }}</h2>
<?php echo Form::open(array('url'=>'post/Product','files'=>'true'));?>
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="p_name" aria-describedby="role" placeholder="Enter product Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Code</label>
    <input type="text" class="form-control" name="p_code" placeholder="Enter Product Code">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Purchase Price</label>
    <input type="text" class="form-control" name="purchase" placeholder="Purchase">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Sell Price</label>
    <input type="text" class="form-control" name="sell" placeholder="Price">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Quentity</label>
    <input type="number" class="form-control" name="quentity" placeholder="Enter Quentity">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Product Image</label>
    <input type="file" class="form-control" name="image" placeholder="image">
  </div>
  <div class="form-group">
     <label for="category">categoy:</label>
<select name="category" id="category">
    @foreach ( $products as $product)
        <option value="{{ $product->id }}">{{ $product->name}}</option>
    @endforeach
</select> 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo Form::close(); ?>

</div>


   
@endsection