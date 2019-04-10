<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
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
      <?php  if (isset($_SESSION['username'])) : ?>
       <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
       <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <?php endif ?>
  </div>
  <div>
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'db_booking');
    $result = mysqli_query($db,"SELECT name,email,reason,timeslot FROM appointments");

    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Reason for Appointment</th>
    <th>Time</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['reason'] . "</td>";
    echo "<td>" . $row['timeslot'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    ?>
  </div>

</body>
</html>
