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
  <div class="header">
  	<h2>Home Page</h2>
    <a href="login.php">Login</a>
    <a href="booking.php">Make Appointment</a>
    <a href="cancelbooking.php">Cancel Appointment</a>
    <a href="contactus.php">Contact Us</a>
  </div>
  <div class="content">
    	<!-- notification message -->
    	<?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
        	<h3>
            <?php
            	echo $_SESSION['success'];
            	unset($_SESSION['success']);
            ?>
        	</h3>
        </div>
    	<?php endif ?>

      <!-- logged in user information -->

  </div>
  <div class="table">
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'db_booking');
    $result = mysqli_query($db,"SELECT timeslot, therapistname
      FROM timeslots, therapists
      WHERE timeslots.therapistid = therapists.therapistid");

    echo "<table border='1'>
    <tr>
    <th>Time</th>
    <th>Therapist</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['timeslot'] . "</td>";
    echo "<td>" . $row['therapistname'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    ?>
  </div>

</body>
</html>
