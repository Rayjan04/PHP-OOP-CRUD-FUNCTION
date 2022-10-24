<?php
    function connection(){

    //for connection to database
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $database = "crud_mvc_function";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);

    //Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        // echo "Connected successfully";
        return $conn;
    }
}
?>