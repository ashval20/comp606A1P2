<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<!--This is the page where we will place the timetable
that customers can lookat-->
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css"><!--we will create a seperate style for the pages than we have for the forms-->
</head>
<body>
	<a href="login.php">Login</a>
	<a href="booking.php">Make Appointment</a>
	<a href="cancelbooking.php">Cancel Appointment</a>
	 </script>
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
	<button class="btn" id='login' type="button" onclick="login()">
		Login
</button>
<button class="btn" id='makeappointment' type="button" onclick="makeappoinment()">
	Make Appointment
</button>
<button class="btn" id='cancelappontment' type="button" onclick="cancelappontment()">
	Cancel Appointment
</button>
</div>

</body>
</html>
