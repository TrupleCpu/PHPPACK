<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $User = $_POST['User'];
    $Password = $_POST['Password'];

    $mysqli = new mysqli('localhost', 'root', '');

    if ($mysqli->connect_errno) {
        die('Failed to connect to MYSQL: ' . $mysqli->connect_error);
    }

    $database = $User . '_db';
    $mysqli->query("CREATE DATABASE $database");

    $mysqli->query("CREATE USER '$User'@'localhost' IDENTIFIED BY '$Password'");
    $mysqli->query("GRANT ALL PRIVILEGES ON $database.* TO '$User'@'localhost'");

    $mysqli->close();

    header('Location: login.php');
    exit;
}
?>