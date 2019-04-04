<?php
session_start();
// initiates variables
$username = "";
$email    = "";
$credit   = "";
$reason   = "";
$errors = array();

// connects to the database
$db = mysqli_connect('localhost', 'root', '', 'db_booking');

// this code is for handling the appointment form
if (isset($_POST['reg_appointment'])) {
  // receives all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $credit = mysqli_real_escape_string($db, $_POST['credit']);
  $reason = mysqli_real_escape_string($db, $_POST['reason']);

  // ensures form has been correctly filled
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($time)) { array_push($errors, "Time is required"); }
  $timeform_check_query = "SELECT * FROM timeslots WHERE timeslot='$time' LIMIT 1";
  $formresult = mysqli_query($db, $timeform_check_query);
  $timecheck = mysqli_fetch_assoc($result);
  if (!$timecheck) { // if timeslot does not exist
      array_push($errors, "Timeslot does not exist");
    }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // Checks if appointment time has allready been filled
  $appointment_check_query = "SELECT * FROM appointments WHERE timeslot='$time' LIMIT 1";
  $result = mysqli_query($db, $appointment_check_query);
  $appoint = mysqli_fetch_assoc($result);

  if ($appoint) { // if appointment exists
    if ($appoint['timeslot'] === $time) {
      array_push($errors, "Timeslot Allready Taken");
    }

  // registers user if there are no errors
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypts the password

    $therapistid = "SELECT therapistid FROM timeslots WHERE timeslot='$time' LIMIT 1";
  	$query = "INSERT INTO appointments (name, email, password, credit_card_number, reason, therapistid, timeslot)
  			  VALUES('$username', '$email', '$password', '$credit', '$reason', '$therapistid', '$time')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "Your appointment has been made";
  	header('location: index.php');
  }
}

// this code is for logging(loging?) in
if (isset($_POST['login_user'])) {
  // receives input values from form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

// checks form has been filled out
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
// checks database for corresponding user and password
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM therapists WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');//we will put a link to the therapistinfo page here
  	}else {
      // if username or password is incorrect displays error
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



// this code is for handling the cancellation form
if (isset($_POST['cancel_appointment'])) {
  // receives all input values from the form
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // ensures form has been correctly filled
  if (empty($time)) { array_push($errors, "Time is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  // Checks if appointment time has allready been filled
  if (count($errors) == 0) {
  	$password = md5($password);
    $query = "SELECT * FROM appointments WHERE timeslot='$time' AND password='$password'";
    if (mysqli_num_rows($results) == 1) {
      $delete = "DELETE * FROM appointments WHERE timeslot='$time' AND password='$password'";
  	  echo "Appointment Cancelled"
  	  header('location: index.php');//we will put a link to the therapistinfo page here
  	}else {
      // if username or password is incorrect displays error
  		array_push($errors, "Wrong time/name/password combination");
  	}
  }
}
?>
