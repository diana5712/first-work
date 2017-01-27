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
    ?> 
    
     <p class="text3">Enter the id of the section to change it.</p>
    <form action = "Edit_Form.php" method= "post">
            <input name="id" placeholder="What is section id?" class="name" required />
            <input name="submit" class="btnn" type="submit" value="Continue" />
    </form>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.min.js"></script>
  </body>
</html>
  