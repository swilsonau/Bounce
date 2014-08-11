<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Forgot Password page

?>


<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">I forgot my password</h2>
        <p style="text-align: center;">Whoops! Enter your email address below to reset your account.</p>
        <div style="text-align: center;">

          <?php
          if(isset($_GET['process'])) {
            $email = mysqli_real_escape_string($sql, (isset($_POST['email']) ? $_POST['email'] : null));

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

            // Check to ensure the mobile number and email address don't already exist
            $checksql = mysqli_query($sql, "SELECT `id`, `emailaddress` FROM `users` WHERE `emailaddress` = '$email' AND `status` = '1'");

            if($checksql) {
              // SQL query executed
              if(!mysqli_num_rows($checksql)) {
                $errors++;
                $errorarray[] = "An account does not exist with this email address.";
              }
            } else {
              $errors++;
              $errorarray[] = "Sorry. We are experiencing connection issues at the moment. Please try your request again later.";
            }

            // Show errors if needed
            if($errors > 0) {
              echo '<aside class="error"><strong>Please fix the following errors:</strong><br /><ul>';
              foreach($errorarray as $error) {
                echo '<li>'.$error.'</li>';
              }
              echo '</ul></aside>';
            } else {

              $searchsql = mysqli_query($sql, "SELECT `id`, `emailaddress`, `firstname` FROM `users` WHERE `emailaddress` = '$email'");

              if(!$searchsql) {
                echo 'Sorry. There was an issue.';
              } else {
                // all good
                $srch = mysqli_fetch_array($searchsql);
                $token = bin2hex(openssl_random_pseudo_bytes(32));
                $userid = $srch['id'];

                // Update the database
                $activsql = mysqli_query($sql, "UPDATE `users` SET `status` = '0', `activationhash` = '$token' WHERE `id` = '$userid'");

                $reseturl = $siteurl."account/reset/".$token;

                if($activsql) {
                  // All good

                  sendemail($srch['emailaddress'], $sitename." Account Reset", "Hello $srch[firstname],<br />Someone (hopefully you) has requested for your password to be reset. Please click on the link below to continue.<br /><br /><a href=\"$reseturl\">$reseturl</a><br /><br />If you did not request this reset, you must click the link below to reset your password. Please then advise our team by emailing info@bounceapp.net.<br /><br />Thank you,<br />$sitename");

                  echo '<aside>
                  <p>We have sent you an email.</p>
                  </aside>';
                } else {
                  echo 'There was an error.';
                }
              }
            }
          }
          ?>

          <form class="pure-form" method="post" action="<?php echo $siteurl; ?>account/forgot/process">
            <fieldset>

                <input name="email" type="email" placeholder="Email" size="30" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : null) ?>">

                <button type="submit" class="pure-button pure-button-primary">Reset Password</button>
            </fieldset>
        </form>
        </div>

    </div>

</div>
