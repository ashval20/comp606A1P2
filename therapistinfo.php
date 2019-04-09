<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!--title of page-->
  <title>Therapist info</title>
  <!--tells page to link to style.css for formating-->
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
  <div class="header">
    <!--title of form-->
  	<h2>Therapist Information</h2>
  </div>
  <!--form-->
  <form method="post" action="therapistinfo.php">

  	<?php include('errors.php'); ?>
    <?php
      $username=$_POST["username"];
    $sql = "SELECT therapistid where username=$username";
$therapistidsql = mysqli_query($conn, $sql);

    $sql = "SELECT therapistid,username,password FROM therapists where therapistid=$therapistidsql";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - User Name: " . $row["username"]. <br>";
    }
    $sql = "SELECT timeslot FROM timeslots where therapistid=$therapistidsql";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - Time slot: " . $row["timeslot"]. <br>";
    }


     ?>


  </form>
</body>
</html>
