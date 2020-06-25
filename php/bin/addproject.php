<?php

function logincheck(){
    if (!isset($_POST['brugernavn'])&&!isset($_POST['password']))
    {
        header("Location: login.php");
    }
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
    return true;
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
    $navn = $_POST['navn'];
    $beskrivelse = $_POST['beskrivelse'];
    $kortbeskrivelse = $_POST['kortbeskrivelse'];
    $dato = date("Y-m-d", $_POST['dato']);
    $gitlink = $_POST['gitlink'];
    $image = $_POST['image'];
    
    
    
    $sql = "INSERT INTO project (Navn, Beskrivelse, Beskrivelsekort, Dato, Gitlink, ProjectImg)
    VALUES ($navn, $beskrivelse, $kortbeskrivelse, $dato, $gitlink, $image)";

    if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    }

    $conn->close();
}

