<?php 
    $servername = "localhost:3306";
    $username = "username";
    $password = "secret";
    // create connection 
    $conn = new mysqli($servername , $username, $password);
    // check conn 
    if($conn->connection_error){
        die("conn failed! ".$conn->connect_error);
    }
    echo "connected successfully";

    $conn->close();
?>