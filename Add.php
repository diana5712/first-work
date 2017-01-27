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
        <p class="text2">Fill this field to add a section to the database.</p>
        <form action = "Add_Res.php" method= "post">
            <input name="id" placeholder="What is section id?" class="name" required />
            <input name="section_name" placeholder="What is section name?" class="name" required />
            <input name="section_type" placeholder="What is section type?" class="name" required />
            <input name="city" placeholder="Enter a city of the section please." class="name" required />
            <input name="district" placeholder="Enter a district of the section please." class="name" required />
            <input name="number" placeholder="Enter a number of the section please." class="name" required />
            <input name="address" placeholder="Enter an address of the section please." class="name" required />
            <input name="email" placeholder="What is an email of new section?" class="email" type="email" required />
            <input name="site" placeholder="Enter a site of the section please." class="name" required />
            <input name="img" placeholder="Enter an address of the image please." class="name" required />
        <textarea rows="4" cols="50" name="short_info" placeholder="Please enter short text." class="message" required></textarea>
        <textarea rows="4" cols="50" name="info" placeholder="Please enter full text." class="message" required></textarea>
        <input name="submit" class="btnn" type="submit" value="Send" />
        </form>
        
              
             
        
      
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.min.js"></script>
  </body>
</html>
  