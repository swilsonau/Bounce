<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Part 2

// Part 2 focuses on the user type (whether a PT or actual client of a PT)

if(!isset($_SESSION['bouncenewid'])) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'" />';
  die();
} else {
  $newuserinfo = fetchuserdetail($_SESSION['bouncenewid']);
}

?>

<div class="signup-header">
  <h1>Hi <?php echo $newuserinfo['firstname']; ?>! Thanks for using <?php echo $sitename; ?>.</h1>
  <p>We just need a few extra details from you.</p>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
    <h1>What kind of user are you?</h1>
  </div>

  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <h2>I'm a client</h2>
        <p>I want to use <?php echo $sitename; ?> to communicate with my Personal Trainer</p>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <h2>I'm a PT</h2>
        <p>I want to use <?php echo $sitename; ?> to communcate with my own clients</p>
      </div>
  </div>
</div>
