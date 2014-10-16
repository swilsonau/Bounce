<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Site Configuration File


// SITE URL
// Sets the current site URL. Used in any AJAX calls, redirects or links that require absolute URLs
// SITE NAME
// Sets the current site name or branding

switch(gethostname()) {
  default:
    $siteurl = "http://".$_SERVER['SERVER_ADDR']."/";
    $sitename = "Bounce Dev";
    $alias = gethostname()."-dev";
  break;

  case "eden.sp.cleverapp.net":
    $siteurl = "https://bounceapp.net/";
    $sitename = "Bounce";
    $alias = "bounce-prod";
  break;

  case "byron.sp.cleverapp.net":
    $siteurl = "http://pre-prod.bounceapp.net/";
    $sitename = "Bounce";
    $alias = "bounce-pre-prod";
  break;

  case "proj-is06":
    $siteurl = "http://bouncelocal.net/";
    $sitename = "Bounce Dev";
    $alias = "proj-is06-dev";
  break;
}

// SITE VERSION
// Sets the site version
$siteversion = "0.3.0 master";

date_default_timezone_set('Australia/Sydney');

?>
