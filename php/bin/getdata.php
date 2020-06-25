<?php

function conn(){
 $servername = "localhost"; 
    $username = "hentdata"; 
    $password = "123QWEasdZXC&_%"; 
    $dbname = "projectdb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function loremconn(){
    $loremservername = "localhost"; 
    $loremusername = "hentdata"; 
    $lorempassword = "123QWEasdZXC&_%"; 
    $loremdbname = "projectdb";

    // Create connection
    $loremconn = new mysqli($loremservername, $loremusername, $lorempassword, $loremdbname);
    // Check connection
    if ($loremconn->connect_error) {
       die("Connection failed: " . $loremconn->connect_error);
    }
    return $loremconn;
}

function numRow(){
    $conn = conn();
    $sql = 'SELECT * FROM Project'; 
    $result = $conn->query($sql);
    $rows = $result->num_rows;

        return $rows;
}

function checkProject($ID){
    $conn = conn();
    $loremconn = loremconn();
    $sql = 'SELECT * FROM Project  WHERE ProjectID ="'.$ID.'"'; 
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $titel = $row["Navn"];
        $kortbeskrivelse = $row["Beskrivelsekort"];
        $imgsrc = $row["ProjectImg"];
        }
    else {
        $sql = 'SELECT * FROM lorem'; 
        $result = $loremconn->query($sql);

        $row = $result->fetch_assoc();
        $titel = $row["loremtitel"];
        $kortbeskrivelse = $row["lorembeskrivkort"];
        $imgsrc = "../images/thumb/lorem_thumb.png";
    } 
    
        return array($titel, $kortbeskrivelse, $imgsrc);
}

function checkProjectExtend($ID){
    $conn = conn();
    $loremconn = loremconn();
    
    
    $sql = 'SELECT * FROM Project  WHERE ProjectID ="'.$ID.'"'; 
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $titel = $row["Navn"];
        $beskrivelse = $row["Beskrivelse"];
        $imgsrc = $row["ProjectImg"];
        $dato = date("d-m-Y", strtotime($row["Dato"]));
        $github = $row["Gitlink"];
        }
    else {
        $sql = 'SELECT * FROM lorem'; 
        $result = $loremconn->query($sql);

        $row = $result->fetch_assoc();
        $titel = $row["loremtitel"];
        $beskrivelse = $row["lorembeskriv"];
        $imgsrc = "../images/thumb/lorem_thumb.png";
        $dato = "DD-MM-YYYY";
        $github = $row["loremgitlink"];
    } 
        return array($titel, $beskrivelse, $imgsrc, $dato, $github);
}
