<?php 
require_once "include/LoremIpsum.class.php";
require_once "include/helpers.php";
$gen = new LoremIpsumGenerator;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/reset.css" type="text/css" rel="stylesheet"></link>
    <link  href="http://fonts.googleapis.com/css?family=Bangers:regular" rel="stylesheet" type="text/css" ></link>
    <link  href="http://fonts.googleapis.com/css?family=Bevan:regular" rel="stylesheet" type="text/css" ></link>
    <link  href="http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope:regular" rel="stylesheet" type="text/css" ></link>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:regular,bold' rel='stylesheet' type='text/css'></link>
    <link type="text/css" rel="stylesheet" href="css/orbit/orbit-1.2.3.css" />            
    <link href="css/default.css" type="text/css" rel="stylesheet"></link>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery-BubbleEngine.js"></script>
    <script type="text/javascript" src="js/jquery.orbit-1.2.3.js"></script>
    <script type="text/javascript" src="js/epc.js"></script>   
    <title>Wendell's Pool Services</title>
  </head>
  <body>
    <div id="wrapper">
      <div id="banner">
        <span class="title">Wendell's Pool Service</span>
      </div>
      <div id="banner-menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="services.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div id="border"></div>      
      <div id="content">
        <p>Services</p>
      </div>      
      <div class="push"></div>
    </div>
    <div id="footer">
      <?php echo getFooter(); ?>
    </div>
  </body>
</html>
