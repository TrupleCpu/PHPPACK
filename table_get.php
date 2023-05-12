<?php
// Start the session
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $User = $_POST['User'];
    $Password = $_POST['Password'];

    $database = $User . '_db';
    $mysqli = new mysqli('localhost', $User, $Password, $database);

    if($mysqli->connect_errno) {
        die('FAILED TO CONNECT TO MYSQL: ' . $mysqli->connect_error);
    }

    $_SESSION['User'] = $User;
    $_SESSION['Password'] = $Password;
      


    $mysqli->close();

    header('Location: home.php');
}

?>