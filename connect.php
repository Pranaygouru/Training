<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username = "";
$email = "";
$errors = array();
if (isset($_POST['register']))
{
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);

  //Ensure that form fields are filled properly.
  if (empty($username)){
    array_push($errors,"Username is required");
  }
  if (empty($email)){
    array_push($errors,"Email is required");
  }
  if (empty($password_1)){
    array_push($errors,"Password is required");
  }
  if ($password_1 != $password_2){
    array_push($errors,"The two passwords do not match");
  }

  if (count($errors) == 0)
  {
    $password = md5($password_1);
    $sql = "INSERT INTO users(username,Email,Password) VALUES ('$username','$email','$password')";
    mysqli_query($conn,$sql);
    $_SESSION['username'] = $username;
//    $_SESSION['success'] = "Now you are logged in";
    header('location:home.php');//Redirect to the home page.
  }
}
/*$sql = "CREATE TABLE USERS(
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,username VARCHAR(255) NOT NULL, Email VARCHAR(255) NOT NULL,Password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Details created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();*/

/*Login page*/
if (isset($_POST['Login']))
{
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  //Ensure that form fields are filled properly.
  if (empty($username)){
    array_push($errors,"Username is required");
  }
  if (empty($password)){
    array_push($errors,"Password is required");
  }

  if (count($errors) == 0)
  {
    $password = md5($password);
    $query = "SELECT * from users where username='$username' AND Password = '$password'";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1)
    {
      $_SESSION['username'] = $username;
//      $_SESSION['success'] = "Now you are logged in";
      header('location:home.php');//Redirect to the home page.
    }
    else{
      array_push($errors,"wrong username/password combination");
    }
  }
}

if (isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location:login.php');
}
?>