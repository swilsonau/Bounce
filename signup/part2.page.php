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
    <div class="pure-u-1 pure-u-md-1-1">
      <h1>What kind of user are you?</h1>
    </div>
  </div>

  <?php
  if(isset($_GET['process'])) {
    // Generate an activation code and store it
    $token = bin2hex(openssl_random_pseudo_bytes(32));
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $userid = $_SESSION['bouncenewid'];

    $actsql = mysqli_query($sql, "UPDATE `users` SET `activationhash` = '$token', `ip` = '$ipaddress' WHERE `id` = '$userid'");

    if(!$actsql) {
      echo "There was an error finishing your account setup.";
    } else {
      // Add the appropriate info into db
      if(isset($_SESSION['forcedsignupinfo'])) {
        $signuparray = $_SESSION['forcedsignupinfo'];
        $assid = $signuparray['id'];
        $orgid = $signuparray['orgid'];
        $perms = $signuparray['perms'];
        $orgname = $signuparray['orgname'];

        $time = time();

        $asssql = mysqli_query($sql, "INSERT INTO `organise_assign`(`user_id`, `organ_id`, `date_assigned`, `perms`)VALUES('$userid', '$orgid', '$time', '$perms')");

        // Delete the request
        $delsql = mysqli_query($sql, "DELETE FROM `pending_user` WHERE `id` = '$assid'");

        // Modify the email text
        $forcedinfo = " You've also automatically been assigned to $orgname. Once you've activated your account, you can start communicating with your trainer immediately.";
      }

      // All good, send the email
      $actlink = $siteurl."signup/activate/".$token;
      sendemail($newuserinfo['emailaddress'], $sitename." activation email", "Hello $newuserinfo[firstname],<br />Thanks for signing up for $sitename!<br /><br />Please click on the link below to activate your account.$forcedinfo<br /><br /><a href=\"$actlink\">$actlink</a><br /><br />Thank you,<br />$sitename");

      echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'signup/finish" />';

    }
  }
  ?>

  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <div style="text-align: center">
          <i class="fa fa-user fa-5x"></i>
        </div>

        <h2>I'm a client</h2>
        <p>I want to use <?php echo $sitename; ?> to communicate with my Personal Trainer.</p>

        <form action="<?php echo $siteurl; ?>signup/part2/process" method="post">
          <input type="hidden" name="type" value="1">
          <button type="submit" class="pure-button pure-button-primary">Complete Sign Up</button>
        </form>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <div style="text-align: center">
          <i class="fa fa-users fa-5x"></i>
        </div>

        <h2>I'm a Personal Trainer or Gym</h2>
        <p>I want to use <?php echo $sitename; ?> to communcate with my own clients!</p>

        <form action="<?php echo $siteurl; ?>signup/part2/process" method="post">
          <input type="hidden" name="type" value="2">
          <button type="submit" class="pure-button pure-button-primary" disabled>Complete Sign Up</button>
        </form>
      </div>
  </div>
</div>
