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
        <p>I want to use <?php echo $sitename; ?> to communicate with my Personal Trainer.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1645.9274379054707!2d150.8790415436596!3d-34.40503443087485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b131971e23b2943%3A0x28106b564503fe41!2sUniversity+of+Wollongong!5e0!3m2!1sen!2s!4v1407294237338" width="400" height="300" frameborder="0" style="border:0"></iframe><br />
        <em>Evenutally, you'll be able to pick a local PT business here. For now, you'll just be assigned to the default.</em><br />
        <form action="<?php echo $siteurl; ?>signup/part2/process" method="post">
          <input type="hidden" name="ptid" value="1">
          <input type="hidden" name="type" value="1">
          <button type="submit" class="pure-button pure-button-primary">Complete Sign Up</button>
        </form>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <h2>I'm a PT</h2>
        <p>I want to use <?php echo $sitename; ?> to communcate with my own clients</p>

        <form action="<?php echo $siteurl; ?>signup/part2/process" method="post">
          <input type="hidden" name="type" value="2">
          <button type="submit" class="pure-button pure-button-primary">Complete Sign Up</button>
        </form>
      </div>
  </div>
</div>
