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
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>cpscattendance.com</title>
  <style>
    body {
      padding: 20px;
      background-image: url(Background.jpg);
      background-repeat: no-repeat;
      background-size: 200%;
    }
    .dropdown-menu-right {
      right: 0 !important;
      left: auto !important;
    }
    .form-container {
      padding: 20px;
    }
    p{
        color: rgb(211, 224, 235);
        stroke: rgb(16, 16, 17);
    }
  </style>
</head>
<body>
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
    	<p><b>Welcome <strong1><?php echo $_SESSION['username']; ?></b></strong1></p>
    	<p> <b><a href="index.php?logout='1'" style="color: red;">logout</a></b> </p>
    <?php endif ?>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CAMIGUIN POLYTECHNIC STATE COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">MAIN</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Extra Features
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Database</a>
          <a class="dropdown-item" href="#">Attendance Sheet</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#excuseModal">Excuse</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#vacationModal">Vacation</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <h1>Welcome to Camiguin Polytechnic State College</h1> <br>
  <h2>VISION</h2><br>   
  <p>CPSC is a dynamic institutionn of higher learning <br>
      which accessible, globally competitive, culturally<br>
      and morally sensitive towards sustainable econnomic<br>
      tourism and natural resource development.
  </p>
</div>

<div class="modal fade" id="excuseModal" tabindex="-1" role="dialog" aria-labelledby="excuseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="excuseModalLabel">Excuse Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-container">
          <form>
            <div class="form-group">
              <label for="excuseReason">Reason for Excuse</label>
              <textarea class="form-control" id="excuseReason" rows="3" placeholder="Enter reason for excuse"></textarea>
            </div>
            <div class="form-group">
              <label for="excuseDate">Date</label>
              <input type="date" class="form-control" id="excuseDate">
            </div>
            <div class="form-group">
              <label for="excuseTime">Time</label>
              <input type="time" class="form-control" id="excuseTime">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="vacationModal" tabindex="-1" role="dialog" aria-labelledby="vacationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="vacationModalLabel">Vacation Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-container">
          <form>
            <div class="form-group">
              <label for="vacationType">Type of Vacation</label>
              <input type="text" class="form-control" id="vacationType" placeholder="Enter type of vacation">
            </div>
            <div class="form-group">
              <label for="vacationDates">Dates</label>
              <input type="text" class="form-control" id="vacationDates" placeholder="Enter vacation dates">
            </div>
            <div class="form-group">
              <label for="vacationDestination">Destination</label>
              <input type="text" class="form-control" id="vacationDestination" placeholder="Enter vacation destination">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
