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
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="services.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <span style="float: right; color: #A5A5A5; position:relative; top:-30px;">
          <iframe src="http://www.facebook.com/plugins/like.php?app_id=171249642935162&amp;href=htttp%3A%2F%2Fwendell.jaradd.com&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font=arial&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:40px;" allowTransparency="true"></iframe>
        </span>                  
      </div>
      <div id="border"></div>      
      <div id="content">
        <ul class="service-list">
          <li>
            <h3>Opening/Summerizing</h3>
            <p>Removal of winter cover, re-installation of filtration system & equipment, cleaning and test-firing of heater, brushing pool walls, addition of opening chemicals.</p>
          </li>
          <li>
            <h3>Swimming Pool Cover Repair</h3>
            <p>We will deliver safety covers to Meyco, have them repaired and evaluated if necessary.</p>
          </li>
          <li>
            <h3>Initial Vacuum</h3>
            <p>First cleaning of the year, similar to a basic vacuum service, but requires the removal of heavy debris from the pool floor.</p>
          </li>
          <li>
            <h3>Basic Vacuum Service</h3>
            <p>Includes vacuuming the pool, cleaning skimmer baskets, cleaning debris bag in automatic cleaners, testing of chemicals, basic cleaning of tiles, backwashing filter, test-firing heater, and cleaning of pump baskets.</p>
          </li>
          <li>
            <h3>Leak Detection and Repair</h3>            
            <p>Pressure testing of lines and dye testing.</p>
          </li>
          <li>
            <h3>Closing/Winterizing</h3>
            <p>Draining pool's filtration system and removal of water with high-powered air blower from pool's circulation system, capping of pool lines, addition of winter chemical kit (included in the price of Winterizing) to help keep water clear over winter period & installation of winter cover which decreases collection of debris and provides safety over the winter.</p>
          </li>
          <li>
            <h3>Winter Maintenance</h3>
            <p>Testing, partially-balancing and chlorination of pool water, securing and adjusting the winter cover (and removal of branches and leaves from cover) & monitoring water level of pool, which includes lowering as needed.  </p>
          </li>
          <li class="active"></li>
        </ul>
        <div id="service-image">
          <img src="images/is-service-1.jpg" alt="" />
        </div>
      </div>      
      <div class="push"></div>
    </div>    
    <div id="page-bottom"></div>
    <div id="page-floor"></div>
    <div id="footer">
      <?php echo getFooter(); ?>
    </div>
  </body>
</html>
