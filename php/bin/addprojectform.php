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
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                if(isset($_POST['add'])) { 
                    addproject();
                }
            } 
            else {
                ?>
            
                <script type="text/javascript">
                    logincheck();
                </script>
<?php
            }
            ?>
            
            <form method="post" action="">
                <div class="form-group">
                  <label for="navn">Projektnavn </label>
                  <input required type="text" class="form-control" name="navn" placeholder="Projektnavn">
                </div>

                 <div class="form-group">
                  <label for="kortbeskrivelse">Kort beskrivelse </label>
                  <textarea required class="form-control" name="kortbeskrivelse"  placeholder="Brug Enter til at lave et linje skift .&#13;&#10;Skriv kort beskrivelse her..." rows="4"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="beskrivelse">Beskrivelse </label>
                  <textarea required class="form-control" name="beskrivelse"  placeholder="Brug Enter til at lave et linje skift .&#13;&#10;Skriv lang beskrivelse her..." rows="6"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="dato">Dato </label>
                  <input required type="text" class="form-control" name="dato" placeholder="DD-MM-YYYY">
                </div>
                
                <div class="form-group">
                  <label for="gitlink">GitHub link </label>
                  <input required type="text" class="form-control" name="gitlink" placeholder="Link til GitHub">
                </div>
                
                <div class="form-group">
                  <label for="image">Image </label>
                  <input required type="text" class="form-control" name="image" placeholder="Sti til billede">
                </div>
                
                  <button type="submit" class="btn btn-primary mb-2" name="add">Tilføj </button>
            </form>
        </div>
    </div>
</div>    
     
<!--        All Java Script files  -->
    <script src="../../js/getheader().js" type="text/javascript"></script>
    <script src="../../js/getfooter.js" type="text/javascript"></script>
    
</body>
</html>
