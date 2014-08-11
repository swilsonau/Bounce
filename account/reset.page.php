<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Activate Acc
?>
<div class="page-header">
  <div class="content">
    <h1>Reset Account Password</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
        <?php
          if(checklogin()) {
            echo '<aside class="error">
            <p>Whoops! You\'re already logged in.</p>
            </aside>';
          } else {
            switch($_GET['process']) {
              default:
                // Check the activation code exists
                $code = mysqli_real_escape_string($sql, $_GET['process']);

                $actsql = mysqli_query($sql, "SELECT `id`, `activationhash`, `firstname`, `emailaddress` FROM `users` WHERE `activationhash` = '$code' AND `status` = '0'");

                if($actsql) {
                  // All good

                  if(!mysqli_num_rows($actsql)) {
                    echo '<aside class="error">
                    <p>Reset hash invalid.</p>
                    </aside>';
                  } else {
                    // Code exists, store it in session and refresh the page
                    $acc = mysqli_fetch_array($actsql);

                    $_SESSION['resetcode'] = $code;
                    $_SESSION['resetemail'] = $acc['emailaddress'];

                    $showform = true;

                  }

                } else {
                  // MySQL error

                  echo 'There was an error.';
                }

                break;

                case "process":
                  $resetcode = mysqli_real_escape_string($sql, (isset($_SESSION['resetcode']) ? $_SESSION['resetcode'] : null));
                  $resetemail = mysqli_real_escape_string($sql, (isset($_SESSION['resetemail']) ? $_SESSION['resetemail'] : null));

                  if(!$resetcode) {
                    echo '<aside class="error">
                    <p>No reset code was found.</p>
                    </aside>';
                  } else {
                    $showform = true;

                    $email = mysqli_real_escape_string($sql, (isset($_POST['email']) ? $_POST['email'] : null));
                    $pass = mysqli_real_escape_string($sql, (isset($_POST['password']) ? $_POST['password'] : null));
                    $passconfirm = mysqli_real_escape_string($sql, (isset($_POST['passwordconfirm']) ? $_POST['passwordconfirm'] : null));

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

                    if($email != $resetemail) {
                      $errors++;
                      $errorarray[] = "The email address you entered does not match the one on file.";
                    }

                    if($pass == '' || $passconfirm == '') {
                      $errors++;
                      $errorarray[] = "You must fill both password fields.";
                    }

                    if($pass != $passconfirm) {
                      $errors++;
                      $errorarray[] = "Your passwords do not match.";
                    }



                    // Show errors if needed
                    if($errors > 0) {
                      echo '<aside class="error"><strong>Please fix the following errors:</strong><br /><ul>';
                      foreach($errorarray as $error) {
                        echo '<li>'.$error.'</li>';
                      }
                      echo '</ul></aside>';
                    } else {
                      // All is well, change the password
                      $hashpwd = password_hash($pass, PASSWORD_DEFAULT);

                      $updsql = mysqli_query($sql, "UPDATE `users` SET `password` = '$hashpwd', `status` = '1', `activationhash` = NULL WHERE `emailaddress` = '$resetemail' AND `activationhash` = '$resetcode'");

                      if($updsql) {
                        // SQL query ran

                        echo '<aside class="success">
                        <p>Your password has been reset. You can now <a href="'.$siteurl.'account">login</a> with your new password.</p>
                        </aside>';
                      } else {
                        echo 'There was an issue with the query.';
                      }
                    }
                  }
              }

            if(isset($showform)) {
              ?>

                  <form class="pure-form pure-form-aligned" method="post" action="<?php echo $siteurl; ?>account/reset/process">
                    <fieldset>
                        <legend>New Password</legend>

                        <div class="pure-control-group">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" placeholder="Email Address" value="<?php echo (isset($email) ? $email : null) ?>">
                        </div>

                        <div class="pure-control-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" placeholder="Password">
                        </div>

                        <div class="pure-control-group">
                            <label for="passwordconfirm">Confirm Password</label>
                            <input name="passwordconfirm" type="password" placeholder="Confirm Password">
                        </div>

                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-primary">Submit</button>
                        </div>
                    </fieldset>
                  </form>

                  <?php
                }

              }
                  /* Activate the user
                  $activsql = mysqli_query($sql, "UPDATE `users` SET `status` = '1', `activationhash` = NULL WHERE `id` = '$acc[id]'");

                  if($activsql) {
                    // All good

                    sendemail($acc['emailaddress'], $sitename." Account Activated", "Hello $acc[firstname],<br />Thanks for signing up for $sitename!<br /><br />Your account has been activated. You can now login to $sitename with the email address and password you specified at sign up.<br /><br />Thank you,<br />$sitename");

                    echo '<aside>
                    <p>Thanks. Your account was activated.</p>
                    </aside>';
                  } else {
                    echo 'There was an error.';
                  }

                  */
?>
      </div>

      <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
        <aside>
          <p>Please confirm your email address for security purposes.</p>
        </aside>
        <br />
        <aside class="error">
          <p style="font-weight: bold; text-transform: uppercase;">If you didn't request this password reset</p>
          <p>We take account security seriously at <?php echo $sitename; ?>. If you didn't request this reset, please go ahead and reset your password and then contact our team by emailing <a href="mailto:info@bounceapp.net">info@bounceapp.net</a>.</p>
        </aside>
      </div>
    </div>
  </div>
