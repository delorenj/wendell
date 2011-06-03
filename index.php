<?php 
require_once "include/LoremIpsum.class.php";
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
    <link href="css/default.css" type="text/css" rel="stylesheet"></link>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div id="border"></div>      
      <div id="content">
        <div id="description">
          <?php echo $gen->getContent(60,"plain"); ?>
        </div>        
        <img src="images/is-poolguy.jpg" />
        <img src="images/is-pool-vacum2.jpg" />
      </div>      
    </div>
    <div id="footer">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
