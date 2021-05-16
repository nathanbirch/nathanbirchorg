<?php
    $dsn = 'mysql:host=localhost;dbname=nathaoe4_demo';
    $username = 'nathaoe4_demo';
    $password = 'demo123456';
    $servername = 'localhost';
    $dbname = 'nathaoe4_demo';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //for localhost
//    $dsn = 'mysql:host=localhost;dbname=demo';
//    $username = 'root';
//    $password = 'b!JulY2011';
//ex_starts
    // try {
    //     $db = new PDO($dsn, $username, $password);
    // } catch (PDOException $e) {
    //     $error_message = $e->getMessage();
    //     include('database_error.php');
    //     exit();
    // }
?>