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
    $column1_name = $_POST['column_name_1'];
    $column1_type = $_POST['column_type_1'];
    $column1_length = $_POST['column_length_1'];
    $column2_name = $_POST['column_name_2'];
    $column2_type = $_POST['column_type_2'];
    $column2_length = $_POST['column_length_2'];

    $query = "CREATE TABLE $table_name ($column1_name $column1_type($column1_length), $column2_name $column2_type($column2_length))";

    if ($mysqli->query($query) === TRUE) {
        echo "Table $table_name created successfully.";
    } else {
        echo "Error creating table: " . $mysqli->error;
    } 

    $mysqli->close();

    header('Location: addValues.php');

}