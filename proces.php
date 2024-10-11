<?php


require_once "./connect.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

  
    if ($password !== $password_confirmation) {
        echo "The passwords you entered do not match";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "The email is incorrect";
    }
    elseif (!preg_match('/^[A-Z][a-zA-Z0-9_]*$/', $username)) {
        echo "The username is invalid. It must start with a capital letter and contain only letters, numbers, and underscores.";
    }
    elseif (strlen($username) < 3) {
        echo "The username is too short";
    }
    elseif (strlen($password) < 8) {
        echo "The password must be at least 8 characters long";
    }
    elseif (!preg_match('/[A-Z]/', $password)) {
        echo "The password must contain at least one capital letter";
    }
    else {
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        $query = mysqli_query($connection, $sql);
        if ($query) {
            echo "New Record was added";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>