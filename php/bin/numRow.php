<?php

function numRow(){
    $servername = "localhost"; 
    $username = "Mathias"; 
    $password = "HQG63cth!"; 
    $dbname = "projectdb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = 'SELECT * FROM Project'; 
    $result = $conn->query($sql);
    $rows = $result->num_rows;
        $conn->close();

        return $rows;
    }

