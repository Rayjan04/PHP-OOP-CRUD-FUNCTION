<?php
  include_once("../Control/connection.php");
  $conn = connection();

        //use to fetch data from database and display 
        $sql = "SELECT * FROM `tabledata` ORDER BY id DESC;";
        $data = $conn->query($sql) or die ($conn->connect);
        $row = $data->fetch_assoc();

?>