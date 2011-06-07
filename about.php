<?php 
require_once "include/LoremIpsum.class.php";
require_once "include/helpers.php";
$gen = new LoremIpsumGenerator;
?>

<!DOCTYPE html>
<html>
  <head>
    <?php echo getHead(); ?>
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
          <li><a href="services.php">Services</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <span style="float: right; color: #A5A5A5; position:relative; top:-30px;">
          <iframe src="http://www.facebook.com/plugins/like.php?app_id=171249642935162&amp;href=htttp%3A%2F%2Fwendell.jaradd.com&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font=arial&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:40px;" allowTransparency="true"></iframe>
        </span>                  
      </div>
      <div id="border"></div>      
      <div id="content">
        <p>About</p>
      </div>      
      <div class="push"></div>           
    </div>    
    <div id="page-bottom"></div>
    <div id="footer">
      <?php echo getFooter(); ?>
    </div>
  </body>
</html>
