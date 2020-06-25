<?php

function logincheck(){
    $servername = "localhost"; 
    global $username;
    $username = $_POST['brugernavn']; 
    global $password;
    $password = $_POST['password']; 
    $dbname = "projectdb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    else{
    header("Location: addprojectform.php");
    }
}

function addproject(){
    $servername = "localhost"; 
    global $username;
    global $password; 
    $dbname = "projectdb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO project (Navn, Beskrivelse, Beskrivelsekort, Dato, Gitlink, ProjectImg)
    VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    }

    $conn->close();
    
}

