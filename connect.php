<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'pefscom');

if (!$connection) {
    die("Error Connecting to database: " . mysqli_connect_error());
}

