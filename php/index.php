<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body onload="getheader();">
        <div id="target" class="navbar-dark upperheader bg-darkgray">
            <a class="navbar-brand" href="index.php">  Mit portfolio  </a>
        </div>
        
        <header id="header">
        </header>
        <div id="front" class="row">
    <?php    
    
    include 'bin/getdata.php';
    $ID = 1;    
    
    for($ID;$ID<4;$ID++){
         list($titel, $kortbeskrivelse, $imgsrc, $onerrorimgsrc) = checkProject($ID);
        
         ?>
        
  <div class="col-lg card-margin">
    <div class="card">
        <img class="card-img-top card-imgage" src="<?php echo $imgsrc; ?>" onerror="<?php echo $onerrorimgsrc; ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $titel; ?></h5>
        <p class="card-text"><?php echo $kortbeskrivelse ?></p>
        <form method="GET" action="fuldbeskrivelse.php" >
            <button type="submit" name="value" value="<?php echo $ID ?>" class="btn btn-primary">Fuld beskrivelse</button>
        </form>
      </div>
    </div>
  </div>       
        
        <?php
    }
     ?>        
            </div>
            <div id="footer" class="footer bg-dark">
            </div>
        
<!--        All Java Script files  -->
        <script src="../js/getheader().js" type="text/javascript"></script>
        <script src="../js/getfooter.js" type="text/javascript"></script>
  </body>
</html>
