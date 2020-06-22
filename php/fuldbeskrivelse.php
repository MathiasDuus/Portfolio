<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
         <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <script src="../Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/getheader().js" type="text/javascript"></script>
        
        <title>Fuld beskrivelse</title>
    </head>
    <body>
        <?php
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
        $value = $_POST['first'];
        $sql = 'SELECT * FROM Project WHERE ProjectID ="'.$value.'"';
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            $titel = $row["Navn"];
            $kortbeskrivelse = $row["Beskrivelse"];
        }
        echo $titel;
        echo nl2br($kortbeskrivelse);
        
        ?>
    </body>
</html>
