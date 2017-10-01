<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oscar MMalo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/myStyle.css" rel="stylesheet">
  </head>  
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
      <?php include "components/php/header.php"; ?>
    </header> 
    
      <?php include "components/php/heroImage.php"; ?>  
      <?php include "components/php/aboutMe.php"; ?>
      <?php include "components/php/mySkills.php"; ?>
      <?php include "components/php/education.php"; ?>
      <?php include "components/php/workExperience.php"; ?>
      <?php include "components/php/pagesILike.php"; ?>
      <?php include "components/php/contactMe.php"; ?>

      <!--<div id="googleMap" style="height:400px;width:100%;"></div>-->
      <iframe  width="100%"  height="400"  frameborder="0" style="border:0"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0kkBMUjx6m2boflcIXBxBQ0Ee_7lcrg8 &q=Westchester,Miami+FL" allowfullscreen>
      </iframe>

      <?php include "components/php/footer.php"; ?>

    <script src="js/bootstrap.js"></script>
    <script src="js/myScript.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0kkBMUjx6m2boflcIXBxBQ0Ee_7lcrg8&callback=myMap"></script>-->
  </body>
</html>