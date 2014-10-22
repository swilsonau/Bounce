<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Profile Page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>My Profile</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 settings-nav">
            <?php
                echo dashnav($_GET['action'], $userdetails);
              ?>
        </div>

        <div class="pure-u-1 pure-u-md-3-4 settings-content">
            <aside>
              <p><i class="fa fa-info-circle"></i> You can edit your <?php echo $sitename; ?> profile here. This information is used for your account and is used by your trainers to properly identify you. You can also connect your Facebook account to <?php echo $sitename; ?>.</p>
            </aside>

            <?php
            if(isset($_GET['process'])) {
              // Do the process for part 1, clean the inputs
              $email = mysqli_real_escape_string($sql, (isset($_POST['email']) ? $_POST['email'] : null));
              $pass = mysqli_real_escape_string($sql, (isset($_POST['currentpassword']) ? $_POST['currentpassword'] : null));
              $passconfirm = mysqli_real_escape_string($sql, (isset($_POST['newpassword']) ? $_POST['newpassword'] : null));
              $passconfirm2 = mysqli_real_escape_string($sql, (isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : null));
              $firstname = mysqli_real_escape_string($sql, (isset($_POST['firstname']) ? $_POST['firstname'] : null));
              $lastname = mysqli_real_escape_string($sql, (isset($_POST['lastname']) ? $_POST['lastname'] : null));
              $mobile = mysqli_real_escape_string($sql, (isset($_POST['mobile']) ? $_POST['mobile'] : null));
              $postcode = mysqli_real_escape_string($sql, (isset($_POST['postcode']) ? $_POST['postcode'] : null));
              $tcs = mysqli_real_escape_string($sql, (isset($_POST['tcs']) ? $_POST['tcs'] : null));

              //
              if(!empty($pass)) {
                echo '
                <style type="text/css">
                  .newpassword-group {
                    display: inherit!important;
                  }

                  .confirmpassword-group {
                    display: inherit!important;
                  }
                </style>
                ';
              }

              // Error validation
              // Doing it server side because ajax/js takes too long
              $errors = 0;
              $errorarray = array();

              if($email == '') {
                $errors++;
                $errorarray[] = "You must enter an email address.";
              }

              if(!filter_var($email, FILTER_VALIDATE_EMAIL) && $email != '') {
                $errors++;
                $errorarray[] = "You must enter a valid email address.";
              }

              if(!empty($pass) && $passconfirm == '') {
                $errors++;
                $errorarray[] = "You need to fill in the new password fields to change your password.";
              }

              if(!empty($pass) && !password_verify($pass, $userdetails['password'])) {
                $errors++;
                $errorarray[] = "The entered password does not match your current password.";
              }

              if(!empty($pass) && ($passconfirm != $passconfirm2)) {
                $errors++;
                $errorarray[] = "Your new passwords do not match.";
              }

              if(!empty($pass) && ($passconfirm == $passconfirm2) && !valid_pass($passconfirm)) {
                $errors++;
                $errorarray[] = "Your new password does not meet password complexity requirements. Your password must be at least 8 characters long, contain one lowercase letter, one uppercase letter and one number.";
              }

              if($firstname == '') {
                $errors++;
                $errorarray[] = "First Name is a required field.";
              }

              if($lastname == '') {
                $errors++;
                $errorarray[] = "Last Name is a required field.";
              }

              if($mobile == '') {
                $errors++;
                $errorarray[] = "Mobile is a required field.";
              }

              if((!is_numeric($mobile) || strlen($mobile) != 10) && $mobile != '') {
                $errors++;
                $errorarray[] = "Mobile is incorrectly formatted. Eg. 0400000000";
              }

              /*if($postcode == '') {
                $errors++;
                $errorarray[] = "Postcode is a required field.";
              }

              if((!is_numeric($postcode) || strlen($postcode) != 4) && $postcode != '') {
                $errors++;
                $errorarray[] = "Postcode is incorrectly formatted. Eg. 2500";
              }
              */

              if($email != $userdetails['emailaddress']) {

                // Check to ensure the mobile number and email address don't already exist
                $checksql = mysqli_query($sql, "SELECT `id`, `emailaddress` FROM `users` WHERE `emailaddress` = '$email'");

                if($checksql) {
                  // SQL query executed
                  if(mysqli_num_rows($checksql)) {
                    $errors++;
                    $errorarray[] = "An account already exists with this email address.";
                  }
                } else {
                  $errors++;
                  $errorarray[] = "Sorry. We are experiencing connection issues at the moment. Please try your request again later.";
                }

                $newemail = true;
              }

              if($mobile != $userdetails['phonenumber']) {

                $check2sql = mysqli_query($sql, "SELECT `id`, `phonenumber` FROM `users` WHERE `phonenumber` = '$mobile'");

                if($check2sql) {
                  // SQL query executed
                  if(mysqli_num_rows($check2sql)) {
                    $errors++;
                    $errorarray[] = "An account already exists with this mobile number.";
                  }
                } else {
                  $errors++;
                  $errorarray[] = "Sorry. We are experiencing connection issues at the moment. Please try your request again later.";
                }
              }

              // Show errors if needed
              if($errors > 0) {
                echo '<br /><aside class="error"><strong>Please fix the following errors:</strong><br /><ul>';
                foreach($errorarray as $error) {
                  echo '<li>'.$error.'</li>';
                }
                echo '</ul></aside>';
              } else {
                // everything is confirmed....
                $userid = $userdetails['id'];

                // if the email account has been changed, the user will need to verify their new email address.
                if(isset($newemail)) {
                  // Send confirmation email
                  $token = bin2hex(openssl_random_pseudo_bytes(32));

                  $actsql = mysqli_query($sql, "UPDATE `users` SET `status` = '0', `activationhash` = '$token' WHERE `id` = '$userid'");

                  if(!$actsql) {
                    echo "There was an error changing your details. Please try again.";
                    die();
                  } else {
                    // All good, send the email
                    $actlink = $siteurl."signup/activate/".$token;
                    sendemail($email, $sitename." email verification", "Hello $userdetails[firstname],<br />Thanks for using $sitename!<br /><br />Please click on the link below to verify your new email address. You will not be able to access your account until this has been done.<br /><br /><a href=\"$actlink\">$actlink</a><br /><br />Thank you,<br />$sitename");

                  }
                }

                if(!empty($pass)) {
                  $newpass = password_hash($passconfirm, PASSWORD_DEFAULT);
                  $updatepass = ', `password` = \''.$newpass.'\'';
                } else {
                  $updatepass = '';
                }

                // Now update the database
                $accchsql = mysqli_query($sql, "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `emailaddress` = '$email', `phonenumber` = '$mobile', `postcode` = '$postcode'$updatepass WHERE `id` = '$userid'");

                if(!$accchsql) {
                  echo "There was an error changing your details. Please try again.";
                  die();
                } else {
                  // All good, alert the user

                  if(!isset($newemail)) {
                    echo '<aside class="success">
                    <p>Details updated.</p>
                    </aside>';
                  } else {
                    // the user changed their email, log them out and let them know
                    session_unset();
                    session_destroy();

                    echo '<br /><aside class="error">
                    <p>A verification email has been sent to your new email address. You have been logged out of '.$sitename.'. You must verify the new email address before logging in again.</p>
                    <p>Redirecting to login page in 5 seconds......</p>
                    </aside>';

                    echo '<meta http-equiv="refresh" content="5; url='.$siteurl.'account" />';
                  }

                }

              }
            }
            ?>

            <form class="pure-form pure-form-aligned" method="post" action="<?php echo $siteurl; ?>account/profile/process">
              <fieldset>
                <legend>Profile Details</legend>

                <div class="pure-control-group">
                    <label for="email">Email Address</label>
                    <input name="email" type="email" placeholder="Email Address" value="<?php echo $userdetails['emailaddress']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="firstname">First Name</label>
                    <input name="firstname" type="text" placeholder="First Name" value="<?php echo $userdetails['firstname']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="lastname">Last Name</label>
                    <input name="lastname" type="text" placeholder="Last Name" value="<?php echo $userdetails['lastname']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="mobile">Mobile Number</label>
                    <input name="mobile" type="text" placeholder="0400000000" value="<?php echo $userdetails['phonenumber']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="postcode">Postcode</label>
                    <input name="postcode" type="text" placeholder="2500" size="5" value="<?php echo $userdetails['postcode']; ?>">
                </div>

              </fieldset>

              <fieldset>
                <legend>Password</legend>
                  <p>To change your password, firstly type in your current password and the extra options will appear. You only need to fill on your current password if you wish to change it.</p>

                  <div class="pure-control-group">
                    <label for="currentpassword">Current Password</label>
                    <input name="currentpassword" type="password" id="currentpassword" onkeypress="showpasswordfields();" onblur="hidepasswordfields();">
                  </div>

                  <div class="pure-control-group newpassword-group" style="display: none;">
                    <label for="newpassword">New Password</label>
                    <input name="newpassword" type="password">
                  </div>

                  <div class="pure-control-group confirmpassword-group" style="display: none;">
                    <label for="confirmpassword">Confirm New Password</label>
                    <input name="confirmpassword" type="password">
                  </div>

              </fieldset>

              <fieldset>
                <legend>Facebook Account</legend>
                  <p>Click the button below to connect your Facebook account. Once you have connected the account, you can enable notifications and even post stats to your Facebook account.</p>

                  <?php
                  if(checkfbconnect($userdetails)) {
                    echo '<div class="fb-view">
                            <img src="'.$userdetails['fb_profileimageurl'].'" />
                            <p><strong>Facebook Connected As:</strong><br />
                            '.$userdetails['fb_fullname'].'</p>
                            <div style="clear: both;"></div>
                        </div>';

                    echo '<div class="pure-controls">
                            <a class="pure-button" href="'.$siteurl.'connect/facebook">Disconnect Facebook Account</a>
                        </div>';
                  } else {
                    echo '<div class="pure-controls">
                            <a class="pure-button" href="'.$siteurl.'connect/facebook">Connect Facebook Account</a>
                        </div>';
                  }
                  ?>

              </fieldset>

              <fieldset>
                  <div class="pure-controls">
                      <button type="submit" class="pure-button pure-button-primary">Submit Changes</a>
                  </div>
              </fieldset>

            </form>
        </div>
  </div>
</div>
