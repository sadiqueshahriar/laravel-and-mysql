
<!DOCTYPE html>
<html>
  

 <?php echo Form::open(array('url'=>'submits','files'=>'true'));?>
 @csrf
  
  <?php echo Form::label('first_name', 'name');?>
   <?php echo Form::text('fname','example@gmail.com');?></br>

  <?php echo Form::label('last_name', 'last name');?>
   <?php echo Form::text('name');?></br><br>
   <?php echo Form::file('image'); ?></br><br>
 <?php echo Form::submit('Click Me!');?>
 


<?php echo Form::close(); ?>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

