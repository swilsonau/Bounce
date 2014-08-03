<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Logout Page

if(!checklogin()) {
  echo '<br /><br />You need to be logged in to do that.';
  die();
}

session_unset();
session_destroy();

echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'" />';
?>
