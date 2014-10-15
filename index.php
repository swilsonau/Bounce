<?php
session_start();

include('config/site.config.php');
include('config/mysql.config.php');
include('config/functions.config.php');

// Temboo API
include('libs/temboo/temboo.php');

if(checklogin()) {
  $userdetails = fetchuserdetail($_SESSION['bounceuser']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title><?php echo $sitename; ?></title>

    <link rel="stylesheet" href="<?php echo $siteurl; ?>css/pure-min.css">

<!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">

<![endif]-->
<!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="<?php echo $siteurl; ?>css/grids-responsive-min.css">

<!--<![endif]-->

    <script src="<?php echo $siteurl; ?>/libs/jquery-1.11.1.min.js"></script>
    <script src="<?php echo $siteurl; ?>/libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo $siteurl; ?>/libs/moment.min.js"></script>

    <link rel="stylesheet" href="<?php echo $siteurl; ?>css/layouts/bouncelayout.css">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/tooltipster/css/tooltipster.css">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/jquery-ui/jquery-ui.theme.min.css">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/remodal/jquery.remodal.css">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/fullcalendar-2.1.1/fullcalendar.css">

    <script type="text/javascript"
      src="<?php echo $siteurl; ?>libs/site.php">
    </script>

    <script type="text/javascript"
      src="<?php echo $siteurl; ?>libs/tooltipster/js/jquery.tooltipster.min.js">
    </script>

    <script type="text/javascript"
      src="<?php echo $siteurl; ?>libs/remodal/jquery.remodal.js">
    </script>

    <script type="text/javascript"
      src="<?php echo $siteurl; ?>libs/fullcalendar-2.1.1/fullcalendar.js">
    </script>

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKh4oR9Q39yvLf3xTxG1ViXWF-UjA0iw0">
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53229393-2', 'auto');
      ga('send', 'pageview');

    </script>

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="<?php echo $siteurl; ?>"><img src="<?php echo $siteurl; ?>img/bounce-logo-white.png" width="100px"/></a>

        <div id="mobile-menu">
          <a onclick="togglemenu()"><i class="fa fa-bars fa-2x"></i></a>
        </div>

          <ul>
              <li<?php if(!isset($_GET['page'])) { echo ' class="pure-menu-selected"'; }?>><a href="<?php echo $siteurl; ?>">Home</a></li>
              <li<?php if(isset($_GET['page']) && $_GET['page'] == "features") { echo ' class="pure-menu-selected"'; }?>><a href="<?php echo $siteurl; ?>features">Features</a></li>
              <li<?php if(isset($_GET['page']) && $_GET['page'] == "pricing") { echo ' class="pure-menu-selected"'; }?>><a href="<?php echo $siteurl; ?>pricing">Pricing</a></li>
              <li<?php if(isset($_GET['page']) && $_GET['page'] == "account") { echo ' class="pure-menu-selected"'; }?>><a href="<?php echo $siteurl; ?>account">Dashboard</a></li>
              <li<?php if(isset($_GET['page']) && $_GET['page'] == "contact") { echo ' class="pure-menu-selected"'; }?>><a href="<?php echo $siteurl; ?>contact">Contact Us</a></li>
          </ul>


        <div class="nav-right">
          <?php
          if(!checklogin()) {
            echo 'Please <a href="'.$siteurl.'account">Login</a> to continue.';
          } else {
            echo '<button class="pure-button pure-button-primary" onclick="window.location = \''.$siteurl.'account/logout\'"><i class="fa fa-user"></i> '.$userdetails['firstname'].'</button>';
          }
          ?>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

<?php

if(!isset($_GET['page'])) {
  include('home.include.php');
} else {
  if(!isset($_GET['action'])) {
    if(file_exists($_GET['page'].'/default.page.php')) {
      include($_GET['page'].'/default.page.php');
    } else {
      // 404 page not found
      header('HTTP/1.0 404 Not Found');
      include('notfound.include.php');
    }
  } else {
    if(file_exists($_GET['page'].'/'.$_GET['action'].'.page.php')) {
      include($_GET['page'].'/'.$_GET['action'].'.page.php');
    } else {
      // 404 page not found
      header('HTTP/1.0 404 Not Found');
      include('notfound.include.php');
    }
  }
}

?>

    <div class="footer l-box is-center">
        <img src="<?php echo $siteurl; ?>img/bounce-logo-white.png" width="80px" /><br />
        &copy; 2014 <?php echo $sitename; ?>. All Rights Reserved.<br />
        <strong>Connected to:</strong> <?php echo $alias." (".gethostname().")"; ?><br />
        <strong>Version:</strong> <?php echo $siteversion; ?>
    </div>

</div>






</body>
</html>
