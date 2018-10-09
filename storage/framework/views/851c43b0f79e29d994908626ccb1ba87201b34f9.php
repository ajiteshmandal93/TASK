<!DOCTYPE html>
<html>
<body>
<form action="<?php echo e(URL::to('/')); ?>" method="POST">
	<?php echo e(csrf_field()); ?> 

  First name:<br>
  <input type="text" name="name">
  <br>
  <input type="submit" value="Submit">
</form> 
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
