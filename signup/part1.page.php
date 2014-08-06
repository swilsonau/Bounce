<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Part 1

// Part 1 focuses on the actual creation of the user, grabbing data such as email address, password etc

?>

<div class="signup-header">
  <h1>Hey! Welcome to <?php echo $sitename; ?>.</h1>
  <p>You're on your way to communicating with your Personal Trainer. Before we start, we just need to get some information from you. Don't worry, it won't take long.</p>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">

      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <?php
        if(isset($_GET['process'])) {
          // Do the process for part 1, clean the inputs
          $email = mysqli_real_escape_string($sql, (isset($_POST['email']) ? $_POST['email'] : null));
          $pass = mysqli_real_escape_string($sql, (isset($_POST['password']) ? $_POST['password'] : null));
          $passconfirm = mysqli_real_escape_string($sql, (isset($_POST['passwordconfirm']) ? $_POST['passwordconfirm'] : null));
          $firstname = mysqli_real_escape_string($sql, (isset($_POST['firstname']) ? $_POST['firstname'] : null));
          $lastname = mysqli_real_escape_string($sql, (isset($_POST['lastname']) ? $_POST['lastname'] : null));
          $mobile = mysqli_real_escape_string($sql, (isset($_POST['mobile']) ? $_POST['mobile'] : null));
          $postcode = mysqli_real_escape_string($sql, (isset($_POST['postcode']) ? $_POST['postcode'] : null));
          $tcs = mysqli_real_escape_string($sql, (isset($_POST['tcs']) ? $_POST['tcs'] : null));

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

          if($pass == '' || $passconfirm == '') {
            $errors++;
            $errorarray[] = "You must fill both password fields.";
          }

          if($pass != $passconfirm) {
            $errors++;
            $errorarray[] = "Your passwords do not match.";
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

          if($postcode == '') {
            $errors++;
            $errorarray[] = "Postcode is a required field.";
          }

          if((!is_numeric($postcode) || strlen($postcode) != 4) && $postcode != '') {
            $errors++;
            $errorarray[] = "Postcode is incorrectly formatted. Eg. 2500";
          }

          if(!$tcs) {
            $errors++;
            $errorarray[] = "You must accept the Terms and Conditions to use $sitename";
          }

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

          // Show errors if needed
          if($errors > 0) {
            echo '<aside class="error"><strong>Please fix the following errors:</strong><br /><ul>';
            foreach($errorarray as $error) {
              echo '<li>'.$error.'</li>';
            }
            echo '</ul></aside>';
          } else {
            // All is well, start entering the user into the DB and save the user ID into a session

            $hashpwd = password_hash($pass, PASSWORD_DEFAULT);

            $addusersql = mysqli_query($sql, "INSERT INTO `users`(`firstname`, `lastname`, `emailaddress`, `password`, `phonenumber`, `status`)VALUES('$firstname', '$lastname', '$email', '$hashpwd', '$mobile', '0')");

            if(!$addusersql) {
              echo 'Sorry. There was an issue with creating your account. Please try again later or <a href="">contact us</a> for more information.';
            } else {
              // The user had been added, get the ID and store it in session
              $id = mysqli_insert_id($sql);
              $_SESSION['bouncenewid'] = $id;

              // Now direct the user to step 2
              echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'signup/part2" />';
            }
          }
        }
        ?>

        <form class="pure-form pure-form-aligned" method="post" action="<?php echo $siteurl; ?>signup/part1/process">
          <fieldset>
              <legend>Account Details</legend>

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

              <legend>Your Information</legend>

              <div class="pure-control-group">
                  <label for="firstname">First Name</label>
                  <input name="firstname" type="text" placeholder="First Name" value="<?php echo (isset($firstname) ? $firstname : null) ?>">
              </div>

              <div class="pure-control-group">
                  <label for="lastname">Last Name</label>
                  <input name="lastname" type="text" placeholder="Last Name" value="<?php echo (isset($lastname) ? $lastname : null) ?>">
              </div>

              <div class="pure-control-group">
                  <label for="mobile">Mobile Number</label>
                  <input name="mobile" type="text" placeholder="0400000000" value="<?php echo (isset($mobile) ? $mobile : null) ?>">
              </div>

              <div class="pure-control-group">
                  <label for="postcode">Postcode</label>
                  <input name="postcode" type="text" placeholder="2500" class="pure-u-1-8" value="<?php echo (isset($postcode) ? $postcode : null) ?>">
              </div>

              <div class="pure-controls">
                  <label for="tcs" class="pure-checkbox">
                      <input name="tcs" type="checkbox"> I've read the <a href="#">terms and conditions</a>.
                  </label>

                  <button type="submit" class="pure-button pure-button-primary">Submit</button>
              </div>
          </fieldset>
      </form>
      </div>

  </div>
</div>
