<?php
session_start();

if (!isset($_SESSION['User']) || !isset($_SESSION['Password'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = $_SESSION['User'] . '_db';
    $mysqli = new mysqli('localhost', $_SESSION['User'], $_SESSION['Password'], $database);

    if ($mysqli->connect_errno) {
        die('FAILED TO CONNECT TO MYSQL: ' . $mysqli->connect_error);
    }

    $table_name = $_POST['table_name'];
    $column1_name = $_POST['column1_name'];
    $column1_value = $_POST['column1_value'];
    $column2_name = $_POST['column2_name'];
    $column2_value = $_POST['column2_value'];

    $query = "INSERT INTO $table_name ($column1_name, $column2_name) VALUES ('$column1_value', '$column2_value')";
    $mysqli_query = mysqli_query($mysqli, $query);

    if (!$mysqli_query) {
        die('QUERY FAILED: ' . mysqli_error($mysqli));
    }

    $mysqli->close();

    header('Location: home.php');
    exit;
}
?>