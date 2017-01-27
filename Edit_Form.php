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
      $result = mysql_query("SELECT * FROM info  WHERE id = '$_POST[id]'");
      $myrow = mysql_fetch_array($result);
    ?> 
    
     <p class="text3">Fill this field to edit a section.</p>
        <form action = "Edit_Res.php?id=<?php echo $_POST['id']?>" method= "post">
            <input name="id" value="<?php echo $myrow['id'] ?>"  class="name" required />
            <input name="section_name" value="<?php echo $myrow['section_name'] ?>"  class="name" required />
            <input name="section_type" value="<?php echo $myrow['section_type'] ?>"  class="name" required />
            <input name="city" value="<?php echo $myrow['city'] ?>"  class="name" required />
            <input name="district" value="<?php echo $myrow['district'] ?>"  class="name" required />
            <input name="number" value="<?php echo $myrow['number'] ?>"  class="name" required />
            <input name="address" value="<?php echo $myrow['address'] ?>"  class="name" required />
            <input name="email" value="<?php echo $myrow['email'] ?>"  class="email" type="email" required />
            <input name="site" value="<?php echo $myrow['site'] ?>"  class="name" required />
            <input name="img" value="<?php echo $myrow['img'] ?>"  class="name" required />
        <input rows="4" value="<?php echo $myrow['short_info'] ?>"  name="short_info"  type= "text" class="name" required></input>
        <input rows="4" value="<?php echo $myrow['info'] ?>"  name="info"  type= "text" class="name" required></input>
        <input name="submit" class="btnn" type="submit" value="Edit" />
        </form>
        
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.min.js"></script>
  </body>
</html>
  