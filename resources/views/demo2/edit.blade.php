<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ url('update') }}/<?php echo $select[0]->id; ?>" method="post">
   @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $select[0]->email ; ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $select[0]->pass ; ?>"><br><br>
  <input type="submit" value="update">
  
</form> 


</body>
</html>