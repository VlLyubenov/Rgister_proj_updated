<?php
    
    $servername = "localhost:3306";
    $username = "php_user";
    $password = "password";
    $dbname = "register_info";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully ";

    

?>