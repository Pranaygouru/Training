<?php
/**
 * Created by PhpStorm.
 * User: pranay
 * Date: 2/6/2019
 * Time: 4:21 PM
 */
include('connect.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <title>SignUp page for InternshipMania</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
          integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
          integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"
          integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="modal-dialog text-center">
<div class="col-sm-8 main-section">
  <div class="modal-content">
    <div class="col-12 user-img">
      <img src="img/face.png">
    </div>
    <form class="col-12" method="post" action="index.php">
      <?php include('errors.php');?>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Create UserName" name="username">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password_1">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password_2">
      </div>
      <button type="submit" name="register" class="btn"><i class="fas fa-sign-in-alt"></i>SignUp</button>
      <div class="col-12 forgot">
        <p>Already a member? <a href="Login.php">Login</a></p>
      </div>
    </form>
  </div><!--End of modal content -->
</div>
</body>
</html>
