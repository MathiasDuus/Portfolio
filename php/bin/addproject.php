<script src="../../js/getheader().js" type="text/javascript"></script>
<?php   
if (session_status() === PHP_SESSION_ACTIVE) {
    if ("{$_SESSION['loggedin']}" !== 1){
        echo '<script type="text/javascript">
                    logincheck();
                </script>';
    }
}

else 
{session_start();}

    function login($brugernavn, $kode){
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
    $sql = 'SELECT * FROM login  WHERE Brugernavn ="'.$brugernavn.'" AND Password ="'.$kode.'"'; 
    $result = $conn->query($sql);

    if ($result->num_rows != 1) {
        return false;
    }
    return true;
}

function logincheck(){
    if (!isset($_POST['brugernavn'])&&!isset($_POST['password']))
    {
        header("Location: login.php");
    }
    
    $_SESSION['username'] = $_POST['brugernavn'];
    $_SESSION['password'] = $_POST['password'];
    
    if (login($_SESSION['username'], $_SESSION['password'])){
        
        $servername = "localhost"; 
        $username = $_SESSION['username']; 
        $password = $_SESSION['password'];
        $dbname = "projectdb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
           $conn->close();
        }
        else{
            $_SESSION['loggedin'] = true;
            header("Location: addprojectform.php");
        }
    }
     else {
                echo '<script type="text/javascript">
                    loginerror();
                </script>';
            }
}
    
function addproject(){
    $servername = "localhost"; 
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
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
        
    
    $sql = "INSERT INTO project (Navn, Beskrivelse, Beskrivelsekort, Dato, Gitlink, ProjectImg) VALUES ($navn, $beskrivelse, $kortbeskrivelse, $dato, $gitlink, $image)";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
    }
    else{
        $conn->close();
    }
}
