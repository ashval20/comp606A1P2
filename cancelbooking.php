<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!--title of page-->
  <title>Cancel Booking</title>
  <!--tells page to link to style.css for formating-->
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
  <div class="header">
    <!--title of form-->
    <h2>Cancel Booking</h2>
  </div>
  <!--form-->
  <form method="post" action="cancelbooking.php">
    <!--tells form to include errors.php
        which is empty and invisible until
        form is unsuccessfully submitted-->
    <?php include('errors.php'); ?>
    <!--input group used as class name as it is vauge
        enough to use for all instances and input was
        better used for input line itself-->
    <div class="input-group">
      <div class="input-group">
        <label>Timeslot</label>
        <input type="text" name="time">
      </div>
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <!--Submits form values-->
      <button type="submit" class="btn" name="cancel_appointment">Cancel Appointment</button>
    </div>
    <p>
      <!--changes to Sign In page-->
      Want to make an Appointment? <a href="booking.php">Book Here</a>
    </p>
  </form>
  </body>
  </html>
