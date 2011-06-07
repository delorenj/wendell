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
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css' />    
    <link type="text/css" rel="stylesheet" href="css/orbit/orbit-1.2.3.css" />            
    <link rel="Stylesheet" href="css/ui-selectmenu.css" type="text/css"></link>
    <link rel="Stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css" type="text/css"></link>
    <link href="css/default.css" type="text/css" rel="stylesheet"></link>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-select.js"></script>    
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
          <li class="active"><a href="#">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>          
        </ul>
        <span style="float: right; color: #A5A5A5; position:relative; top:-30px;">
          <iframe src="http://www.facebook.com/plugins/like.php?app_id=171249642935162&amp;href=htttp%3A%2F%2Fwendell.jaradd.com&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font=arial&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:40px;" allowTransparency="true"></iframe>
        </span>                  
      </div>
      <div id="content">
        <div class="container">
          <div id="left">
            <blockquote>
              <p>I had a last-minute "pool emergency" and they went out of their way to fix everything up within a moment's notice. I couldn't be around since I was working, but they did all the work while I was out. Highly recommended.</p>
            </blockquote>
            <div class="border"></div>
            <blockquote>
              <p><?php echo $gen->getContent(25, "plain"); ?></p>
            </blockquote>            
          </div>
          <div id="right">
            <p>Schedule a free consultation</p>
            <form action="schedule.php" method="POST">
              <div class="field">
                <label>What do you need done?</label><br />
                <select name="services">
                  <option>--Choose a Service--</option>
                  <option>Opening</option>
                  <option>Winterizing</option>
                  <option>Cover Installation</option>
                  <option>Maintenance</option>
                  <option>Removal</option>
                  <option>Installation</option>
                  <option>Repair</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="field">
                <label>When are you free?</label><br />
                <input type="text" name="date" />
              </div>              
              <div class="field">
                <label>What's your name?</label><br />
                <input type="text" name="name" />
              </div>                            
              <div class="field">
                <label>How should we contact you?</label>
                <select name="contact">                  
                  <option selected>I'll just call later</option>                  
                  <option>Phone</option>
                  <option>Email</option>                  
                </select>
              </div>
              <div style="display:none" class="field" id="phone">
                <label>Phone</label><br />
                <input type="text" name="phone"></input>
              </div>
              <div style="display:none" class="field" id="email">
                <label>Email</label><br />
                <input type="text" name="email"></input>
              </div>              
              <button type="submit">Schedule me!</button>
            </form>
          </div>                    
          <div id="gallery">
            <img src="images/is-poolguy.jpg" />            
            <img src="images/is-pool-vacum2.jpg" />
            <img src="images/is-poolside.jpg" />
          </div>
        </div>
      </div>    
    </div>
    <div class="border"></div>
    <div id="footer">
      <?php echo getFooter(); ?>
    </div>
  </body>
</html>
