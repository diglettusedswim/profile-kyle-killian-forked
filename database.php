<?php
    $dsn = 'mysql:host=localhost;dbname=portfolio';
    $username = 'recrute_user';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>