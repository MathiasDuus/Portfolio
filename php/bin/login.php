<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <title>Tilføj projekt</title>
    </head>
 <body onload="getheader();">
     
    <div class="navbar-dark upperheader bg-darkgray">
        <a class="navbar-brand" href="../index.php">Til forside</a>
    </div>
    <div class="container">
    <div class="row row-margin">
        <div class="col-sm-8">
            
            <?php include 'addproject.php';
             if(isset($_POST['login'])) { 
            logincheck();} 
            ?>
            
            <form method="post">
                <div class="form-group">
                  <label for="navn">Brugernavn </label>
                  <input required type="text" class="form-control" name="brugernavn" placeholder="Brugernavn">
                </div>
                <div class="form-group">
                  <label for="password">kodeord  </label>
                  <input required type="password" class="form-control" name="password" placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="login">Log in </button>
            </form>
            
        </div>
    </div>
</div>    
     
<!--        All Java Script files  -->
    <script src="../../js/getheader().js" type="text/javascript"></script>
    <script src="../../js/getfooter.js" type="text/javascript"></script>
    
</body>
</html>
