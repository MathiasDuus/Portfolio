<?php

function conn(){
    $conn = new mysqli("localhost", "pman01.skp-dp.sd","2pp3q2p5",
"pman01_skp_dp_sde_dk");
    // makes sure æøå works
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function loremconn(){
    $loremconn = new mysqli("localhost", "pman01.skp-dp.sd","2pp3q2p5",
"pman01_skp_dp_sde_dk");
    // makes sure æøå works
    $loremconn->set_charset("utf8");
    // Check connection 
    if ($loremconn->connect_error) { 
       die("Connection failed: " . $loremconn->connect_error);
    }
    return $loremconn;
}

function numRow(){
    $conn = conn();
    $sql = 'SELECT * FROM project'; 
    $result = $conn->query($sql);
    $rows = $result->num_rows;

        return $rows;
}

function checkProject($ID){
    $conn = conn();
    $loremconn = loremconn();
    $sql = 'SELECT * FROM project  WHERE ProjectID ="'.$ID.'"'; 
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $titel = $row["Navn"];
        $kortbeskrivelse = $row["Beskrivelsekort"];
        $imgsrc = $row["ProjectImg"];
        $onerrorimgsrc = "../images/thumb/no-image-found_thumb.png";
        }
    else {
        $sql = 'SELECT * FROM lorem'; 
        $result = $loremconn->query($sql);

        $row = $result->fetch_assoc();
        $titel = $row["loremtitel"];
        $kortbeskrivelse = $row["lorembeskrivkort"];
        $imgsrc = "../images/thumb/lorem_thumb.png";
        $onerrorimgsrc = "../images/thumb/no-image-found_thumb.png";
    } 
        return array($titel, $kortbeskrivelse, $imgsrc, $onerrorimgsrc);
}

function checkProjectExtend($ID){
    $conn = conn();
    $loremconn = loremconn();
    
    
    $sql = 'SELECT * FROM project  WHERE ProjectID ="'.$ID.'"'; 
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
