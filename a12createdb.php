<?php


$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
/**
 * Tip: If you have to use a specific port, add an empty string for the database-name argument, like this: 
 * new mysqli("localhost", "username", "password", "", port)
 *  */
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    // create db 
    $sql = "CREATE DATABASE IF NOT EXISTS myDB";

    if($conn->query($sql) == TRUE){
        echo "db created successfully\n";
    }else{
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
?>