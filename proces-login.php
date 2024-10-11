<?php

require_once "./connect.php";
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
    echo "username is required";
  }
  elseif (empty($password)) {
    echo "password is required";
  }
  else{
    $sql = "SELECT * FROM user WHERE username = '$username' AND password='$password';";
    $query = mysqli_query($connection, $sql);
    $results = mysqli_fetch_assoc($query);
    if (empty($results)) {
      echo "User name and password doesnt match";
    }
    else{

      $_SESSION['user'] = $results;
      header("Location: home.php");
    }
  }
}