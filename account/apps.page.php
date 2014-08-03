<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Apps Config Page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}
?>

<div class="page-header">
  <div class="content">
    <h1>Apps</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5">1</div>
      <div class="pure-u-1 pure-u-md-1-5">2</div>
      <div class="pure-u-1 pure-u-md-1-5">3</div>
      <div class="pure-u-1 pure-u-md-1-5">4</div>
      <div class="pure-u-1 pure-u-md-1-5">5</div>
  </div>
</div>
