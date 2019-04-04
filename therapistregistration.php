<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Registration</h2>
        <form method="GET" action="">


          <div class="form-group">
          UserName:<input type="text"  name="username" class="form-control" >

          </div>
          <br>
          <div class="form-group">
          Password:<input type="password" name="password"  class="form-control" >

        </div>
          <br>
          <div class="form-group">
          TherapistName:<input type="text" placeholder="Enter Therapist Name" name="therapistname" class="form-control" reqiured >

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </form>

      </div>
    </div>
  </div>


</body>

</html>
