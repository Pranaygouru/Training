<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home page for internship</title>
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
  <div class="content">
    <?php if (isset($_SESSION['success'])):?>
      <div class="error success">
        <h3>
          <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <?php if (isset($_SESSION["username"])):?>
<!--     <p style="color: #800080">Welcome <strong>--><?php //echo $_SESSION['username'];?><!--</strong></p>-->
<!--      <a href="home.php?logout='1" style="color:red;">Logout</a>-->
    <div class="row">
      <div class = "column1">
      <ul class="navbarul">
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="home.php?logout='1">Logout</a></li>
      </ul>
      </div>
    <div class="column2">
      <table class="tableclass" align="center">
        <tr>
          <th>Firstname</th>
          <th>Secondname</th>
        </tr>
      </table>
    </div>
    </div>

    <?php endif ?>

  </div>
</body>
</html>







