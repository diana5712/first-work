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
      
      
     $result = mysql_query("INSERT INTO info (id, section_name, section_type, city, district, number, address, email, site, img, short_info, info) VALUES ('$_POST[id]', '$_POST[section_name]','$_POST[section_type]','$_POST[city]', '$_POST[district]', '$_POST[number]', '$_POST[address]', '$_POST[email]','$_POST[site]','$_POST[img]', '$_POST[short_info]', '$_POST[info]')");
      
      
      
      if($result == true)
      {
echo <<<HERE
    <div class = "text">
        The information was added successfully!
    </div>
HERE;
      }
      else
      {
echo <<<HERED
    <div class = "text">
        Something was wrong, the information was not added!
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
  