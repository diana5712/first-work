<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Main Page</title>

    <!-- Bootstrap -->
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="style.css" rel="stylesheet">
    
  </head>
  <body id = "addb"> 
       
         
     <div id="holder">
  <?php
    include "blocks/navbar.php";
    //include "blocks/container.php";
    ?>
      
    <div id="content">
    <!-- Document starts. -->
    <?php 
      include "blocks/db.php";
      $result = mysql_query("DELETE FROM info WHERE id='$_POST[id]'");
        
      if($result == true)
      {
echo <<<HERE
    <div class = "text">
        The information was deleted successfully!
    </div>
HERE;
      }
      else
      {
echo <<<HERED
    <div class = "text">
        Something was wrong, the information was not deleted!
    </div>
HERED;
      }
    ?> 
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.min.js"></script>
  </body>
</html>
  