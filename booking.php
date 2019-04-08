<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!--title of page-->
  <title>Booking</title>
  <!--tells page to link to style.css for formating-->
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
  <div class="header">
    <!--title of form-->
  	<h2>Book a Time</h2>
  </div>
  <!--form-->
  <form method="post" action="booking.php">
    <!--tells form to include errors.php
        which is empty and invisible until
        form is unsuccessfully submitted-->
  	<?php include('errors.php'); ?>
    <!--input group used as class name as it is vauge
        enough to use for all instances and input was
        better used for input line itself-->
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
  	  <label>Timeslot</label>
      <input type="text" name="time">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
  	  <label>Credit Card Number</label>
  	  <input type="text" name="credit">
  	</div>
    <div class="input-group">
  	  <label>Reason for appointment</label>
  	  <input type="text" name="reason">
  	</div>
  	<div class="input-group">
      <!--Submits form values-->
  	  <button type="submit" class="btn" name="reg_appointment">Make Appointment</button>
  	</div>
  	<p>
      <!--changes to Sign In page-->
  		Want to cancel an Appointment? <a href="cancelbooking.php">Cancel Here</a>
  	</p>
  </form>
</body>
</html>
