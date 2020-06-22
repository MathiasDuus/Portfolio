<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <script src="../Bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/getheader().js" type="text/javascript"></script>
        <script src="../js/imgerror.js" type="text/javascript"></script>
    </head>
    <body onload="getheader();">
        <header id="header">
        </header>
        
    <?php
    include 'checkProject.php';
    
    $ID = 1;    
    list($titel, $kortbeskrivelse) = checkProject($ID++);
    
     ?>
        
        
        
       <div id="front" class="row">
  <div class="col-sm card-margin">
    <div class="card">
        <img class="card-img-top" src="../images/thumb/BirgerBolcher_Thumb.PNG" onerror="imgError(this);">
      <div class="card-body">
        <h5 class="card-title"><?php echo $titel; ?></h5>
        <p class="card-text"><?php echo $kortbeskrivelse ?></p>
        <form method="POST" action="fuldbeskrivelse.php" >
            <button type="submit" name="first" value="1" class="btn btn-primary">Fuld beskrivelse</button>
        </form>
        
      </div>
    </div>
  </div>
           
    <?php 
    list($titel, $kortbeskrivelse) = checkProject($ID++);

    ?>
    <div class="col-sm card-margin">
    <div class="card">
        <img class="card-img-top" src="..." onerror="imgError(this);">
      <div class="card-body">
        <h5 class="card-title"><?php echo $titel; ?></h5>
        <p class="card-text"><?php echo $kortbeskrivelse ?></p>
        <form method="POST" action="fuldbeskrivelse.php" >
            <button type="submit" name="second" value="2" class="btn btn-primary">Fuld beskrivelse</button>
        </form>
        
      </div>
    </div>
  </div>
           
    <?php 
    list($titel, $kortbeskrivelse) = checkProject($ID++);
    ?>          
           
  <div class="col-sm card-margin">
    <div class="card">
        <img class="card-img-top" src="..." onerror="imgError(this);">
      <div class="card-body">
        <h5 class="card-title"><?php echo $titel; ?></h5>
        <p class="card-text"><?php echo $kortbeskrivelse ?></p>
        <form method="POST" action="fuldbeskrivelse.php" >
            <button type="submit" name="third" value="1" class="btn btn-primary">Fuld beskrivelse</button>
        </form>
        
      </div>
    </div>
  </div>
        
        
  </body>
</html>
