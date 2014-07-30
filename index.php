<?php
session_start();

include('config/site.config.php');
include('config/mysql.config.php');

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




    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $siteurl; ?>css/layouts/marketing.css">
    <!--<![endif]-->

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><img src="<?php echo $siteurl; ?>img/bounce-logo-white.png" width="100px"/></a>

        <ul>
            <li class="pure-menu-selected"><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Account</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
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
        &copy; 2014 Bounce. All Rights Reserved.<br />
        <strong>Connected to:</strong> <?php echo gethostname(); ?>
    </div>

</div>






</body>
</html>
