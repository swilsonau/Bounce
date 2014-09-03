<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Site Configuration File


// SITE URL
// Sets the current site URL. Used in any AJAX calls, redirects or links that require absolute URLs
// SITE NAME
// Sets the current site name or branding

if(gethostname() == "eden.sp.cleverapp.net") {
  $siteurl = "https://bounceapp.net/";
  $sitename = "Bounce";
} else {
  if($_SERVER['SERVER_ADDR'] == "10.64.23.164") {
    $siteurl = "http://10.64.23.164/";
    $sitename = "Bounce Dev";
  } else {
    $siteurl = "http://bouncelocal.net/";
    $sitename = "Bounce Dev";
  }
}

// SITE VERSION
// Sets the site version
$siteversion = "0.1.6 master";

date_default_timezone_set('Australia/Sydney');

?>
