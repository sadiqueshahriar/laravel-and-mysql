<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title')
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

  </head>
  <body>
    
    <!-- Static navbar -->
  <ul class="nav bg-dark py-3">
    <li class="nav-item">
    <a class="nav-link " aria-current="page" href="{{ url('student') }}">Home</a>
  </li>
  <li class="nav-item" >
    <a class="nav-link " aria-current="page" href="{{ url('registrations') }}">Create</a>
  </li>
</ul>
  
<div >
  @yield('content')

</div>




    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  


  </body>
</html>