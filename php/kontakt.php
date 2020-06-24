<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <title>Kontakt </title>
    </head>
 <body onload="getheader();">
    <div id="target" class="navbar-dark upperheader bg-darkgray">
        <a class="navbar-brand" href="index.php">  Mit portfolio  </a>
    </div>

    <header id="header">
    </header>
     
     
<div class="container">
    <div class="row row-margin">
        <div class="col-sm-6">
            
            <form method="post" action="bin/sendmail.php">
                <div class="form-group">
                  <label for="email">Email address </label>
                  <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="emne">Emne </label>
                  <input type="text" class="form-control" name="emne" placeholder="Emne">
                </div>
                <div class="form-group">
                  <label for="besked">Besked </label>
                  <textarea class="form-control" name="besked"  placeholder="Skriv din besked her..." rows="4"></textarea>
                </div>
                  <button type="submit" class="btn btn-primary mb-2">Send </button>
            </form>
        </div>
        <div class="col-sm-6">
            <img src="../images/thumb/pandamail_thumb.png" onerror="https://lh3.googleusercontent.com/proxy/f6Kb92i_cZk3jFasbrGXjL9xkQYb0VdhSF-pisk4epLpS9-LkmAo1PM9tdpvda2a7JUYFudsmiep7pdLfNBLoJON9fuj4xc">
        </div>
    </div>
</div>     

     
     
    <div id="footer" class="footer bg-dark">
    </div>
     
<!--        All Java Script files  -->
    <script src="../Bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/getheader().js" type="text/javascript"></script>
    <script src="../js/imgerror.js" type="text/javascript"></script>
    <script src="../js/getfooter.js" type="text/javascript"></script>
</body>
</html>
