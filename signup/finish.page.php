<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Finish

// Now we show the finish page to the user

if(!isset($_SESSION['bouncenewid'])) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'" />';
  die();
} else {
  $newuserinfo = fetchuserdetail($_SESSION['bouncenewid']);
}
?>

<div class="signup-header">
  <h1>Thanks <?php echo $newuserinfo['firstname']; ?>! You've signed up to <?php echo $sitename; ?>.</h1>
  <p>Just one more thing......</p>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-1">
      <aside>
        <p>We've emailed you an activation link. You'll need to click on this link to activate your account.</p>
      </aside>
    </div>
  </div>
</div>
