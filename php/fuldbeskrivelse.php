<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <title>Opgaver </title>
    </head>
    <body onload="getheader();">
        <div id="target" class="navbar-dark upperheader bg-darkgray">
            <a class="navbar-brand" href="index.php">  Mit portfolio  </a>
        </div>
        
        <header id="header">
        </header>
         
          <?php  
    
    include 'bin/getdata.php';
    

    $ID =$_GET['value'];    
    
   
         list($titel, $beskrivelse, $imgsrc, $dato, $github) = checkProjectExtend($ID);
        
         ?>
        
<div class="col-sm-6 card-margin-big">
    <div class="card">
        <img class="card-img-top card-img-big" src="<?php echo $imgsrc; ?>" alt="<?php echo $imgsrc; ?>">
        
        <div class="card-body">
            <h5 class="card-title"><?php echo $titel; ?></h5>
            <p class="card-text"><?php echo $beskrivelse; ?></p>
            <p class="card-text">
                <small class="text-muted">
                    <a target="_blank" href="<?php echo $github; ?>">GitHub</a>
                    Last updated <?php echo $dato; ?></small></p>
        </div>
    </div>
</div>
             

            <div id="footer" class="footer bg-dark">
            </div>
        
<!--        All Java Script files  -->
        <script src="../js/getheader().js" type="text/javascript"></script>
        <script src="../js/getfooter.js" type="text/javascript"></script>
    </body>
</html>
