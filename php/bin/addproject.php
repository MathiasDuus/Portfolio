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
{session_start();
echo '<script type="text/javascript">
        logincheck();
     </script>';
}

    function login($brugernavn, $kode){
        // uses the connection from getdata
        include 'getdata.php';
        $conn = conn();
        
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
    
    if (login($_POST['brugernavn'], $_POST['password'])){
  
        // uses the connection from getdata
        include 'getdata.php';
        $conn = conn();
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
    
    // uses the connection from getdata
    include 'getdata.php';
    $conn = conn();

    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    $navn = $_POST['navn'];
    $beskrivelse = $_POST['beskrivelse'];
    $kortbeskrivelse = $_POST['kortbeskrivelse'];
    $date = DateTime::createFromFormat('d-m-Y', $_POST["dato"]);
    $date = $date->format('Y-m-d');
    $gitlink = $_POST['gitlink'];
    $image = $_POST['image'];
        
    $sql = 'INSERT INTO project (Navn, Beskrivelse, Beskrivelsekort, Dato, Gitlink, ProjectImg) VALUES ("'.$navn.'", "'.$beskrivelse.'", "'.$kortbeskrivelse.'", "'.$date.'", "'.$gitlink.'", "'.$image.'")';

    if ($conn->query($sql) === TRUE) {
        $conn->close();
    }
    else{
        $conn->close();
    }
}
