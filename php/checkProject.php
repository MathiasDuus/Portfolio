

<?php
function checkProject($ID){
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
    $loremservername = "localhost"; 
    $loremusername = "Mathias"; 
    $lorempassword = "HQG63cth!"; 
    $loremdbname = "loremdb";

    // Create connection
    $loremconn = new mysqli($loremservername, $loremusername, $lorempassword, $loremdbname);
    // Check connection
    if ($loremconn->connect_error) {
       die("Connection failed: " . $loremconn->connect_error);
    }
    $sql = 'SELECT * FROM Project  WHERE ProjectID ="'.$ID.'"'; 
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $titel = $row["Navn"];
        $kortbeskrivelse = $row["Beskrivelsekort"];

        return array($titel, $kortbeskrivelse);
        }
    else {
        $sql = 'SELECT * FROM lorem'; 
        $result = $loremconn->query($sql);

        $row = $result->fetch_assoc();
        $titel = $row["loremtitel"];
        $kortbeskrivelse = $row["lorembeskrivkort"];} 
        $conn->close(); $loremconn->close();

        return array($titel, $kortbeskrivelse);
    }
        ?>
    </body>
</html>
