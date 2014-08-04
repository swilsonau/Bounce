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

    <script src="<?php echo $siteurl; ?>/libs/yui-min.js"></script>


    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $siteurl; ?>css/layouts/bouncelayout.css">
    <!--<![endif]-->

  <link rel="stylesheet" href="<?php echo $siteurl; ?>libs/font-awesome/css/font-awesome.min.css">

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="<?php echo $siteurl; ?>"><img src="<?php echo $siteurl; ?>img/bounce-logo-white.png" width="100px"/></a>

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
            echo '<button class="pure-button pure-button-primary" onclick="window.location = \''.$siteurl.'account/logout\'"><i class="fa fa-power-off"></i> Logout</button>';
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
      include('notfound.include.php');
    }
  } else {
    if(file_exists($_GET['page'].'/'.$_GET['action'].'.page.php')) {
      include($_GET['page'].'/'.$_GET['action'].'.page.php');
    } else {
      // 404 page not found
      include('notfound.include.php');
    }
  }
}

?>

    <div class="footer l-box is-center">
        &copy; 2014 <?php echo $sitename; ?>. All Rights Reserved.<br />
        <strong>Connected to:</strong> <?php echo gethostname(); ?><br />
        <strong>Version:</strong> <?php echo $siteversion; ?>
    </div>

</div>






</body>
</html>
