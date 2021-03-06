<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Part 1

// Part 1 focuses on the actual creation of the user, grabbing data such as email address, password etc

// Check for forced signup
if(isset($_SESSION['forcedsignup'])) {
  // Yes, this is a forced signup.
  $id = mysqli_real_escape_string($sql, $_SESSION['forcedsignup']);

  $actsql = mysqli_query($sql, "SELECT * FROM `pending_user` RIGHT JOIN `organisation` ON `pending_user`.`orgid` = `organisation`.`id` WHERE `pending_user`.`id` = '$id' LIMIT 1");

  if($actsql) {
    // All good
    $forcedarray = mysqli_fetch_array($actsql);

    $forced_firstname = $forcedarray['firstname'];
    $forced_emailaddress = $forcedarray['emailaddress'];
    $forced_phonenumber = $forcedarray['phonenumber'];
    $forced_orgid = $forcedarray['orgid'];
    $forced_perm = $forcedarray['perm'];
    $forced_orgname = $forcedarray['name'];

  }
}

?>

<div class="signup-header">
  <h1>Hey<?php echo (isset($forced_firstname) ? " ".ucfirst($forced_firstname) : null) ?>! Welcome to <?php echo $sitename; ?>.</h1>
  <p>You're on your way to communicating with your Personal Trainer. Before we start, we just need to get some information from you. Don't worry, it won't take long.</p>
</div>

<div class="content-wrapper account-grid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2 signup-left" style="padding: 5px">
        <?php
          if(isset($_SESSION['forcedsignup'])) {
              echo '<aside class="warning">
              <p><strong>Hi There! Welcome to '.$sitename.'!</strong></p>
              <p>'.$forcedarray['name'].' has invited you to join '.$sitename.'. Please fill out the form to continue your registration, modifying the pre-filled items if needed. Don\'t worry, it won\'t take long. Once you have completed the registration, you\'ll have access to your trainer.</p>
              </aside>';
          }
        ?>

        <ul>
          <li>
            <img src="" />
          </li>

          <li>
            <img src="" />
          </li>

          <li>
            <img src="" />
          </li>

          <li>
            <img src="" />
          </li>
        </ul>
      </div>

      <div class="pure-u-1 pure-u-md-1-2 signup-div">
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

          if(!empty($pass) && ($pass == $passconfirm) && !valid_pass($pass)) {
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

            try {
              $session = new Temboo_Session('bounceapp', 'Bounce', 'b3fa425a34b14b1898f8415aa083bedf');

              $geocodeByAddress = new Google_Geocoding_GeocodeByAddress($session);
              $geocodeByAddressInputs = $geocodeByAddress->newInputs();
              $geocodeByAddressInputs->setAddress("$postcode Australia");
              $geocodeByAddressResults = $geocodeByAddress->execute($geocodeByAddressInputs)->getResults();
              //echo $geocodeByAddressResults->getResponse();
              $geoxml = new SimpleXMLElement($geocodeByAddressResults->getResponse());

              $geo = $geoxml->xpath('/GeocodeResponse/result/geometry');

              $lat = (string) $geo[0]->location->lat;
              $lng = (string) $geo[0]->location->lng;
            } catch (Exception $e) {
                // That didn't work, give them defaults
                $lat = "-34.4331";
                $lng = "150.8831";
            }

            $hashpwd = password_hash($pass, PASSWORD_DEFAULT);

            $addusersql = mysqli_query($sql, "INSERT INTO `users`(`firstname`, `lastname`, `emailaddress`, `password`, `phonenumber`, `status`, `postcode`, `pc_lat`, `pc_lng`)VALUES('$firstname', '$lastname', '$email', '$hashpwd', '$mobile', '0', '$postcode', '$lat', '$lng')");

            if(!$addusersql) {
              echo 'Sorry. There was an issue with creating your account. Please try again later or <a href="">contact us</a> for more information.';
            } else {
              // The user had been added, get the ID and store it in session
              $id = mysqli_insert_id($sql);
              $_SESSION['bouncenewid'] = $id;

              // Now direct the user to step 2 (or the end process of step 2)

              if(isset($_SESSION['forcedsignup'])) {
                // Quickly set some session vars
                $_SESSION['forcedsignupinfo'] = array("id" => $_SESSION['forcedsignup'], "orgid" => $forced_orgid, "perms" => $forced_perm, "orgname" => $forced_orgname);

                echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'signup/part2/process" />';
              } else {
                echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'signup/part2/" />';
              }
            }
          }
        }
        ?>

        <form class="pure-form pure-form-aligned" method="post" action="<?php echo $siteurl; ?>signup/part1/process">
          <fieldset>
              <legend>Account Details</legend>

              <div class="pure-control-group">
                  <label for="email">Email Address</label>
                  <input name="email" type="email" placeholder="Email Address" value="<?php echo (isset($email) ? $email : (isset($forced_emailaddress) ? $forced_emailaddress : null)) ?>">
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
                  <input name="firstname" type="text" placeholder="First Name" value="<?php echo (isset($firstname) ? $firstname : (isset($forced_firstname) ? ucfirst($forced_firstname) : null)) ?>">
              </div>

              <div class="pure-control-group">
                  <label for="lastname">Last Name</label>
                  <input name="lastname" type="text" placeholder="Last Name" value="<?php echo (isset($lastname) ? $lastname : null) ?>">
              </div>

              <div class="pure-control-group">
                  <label for="mobile">Mobile Number</label>
                  <input name="mobile" type="text" placeholder="0400000000" value="<?php echo (isset($mobile) ? $mobile : (isset($forced_phonenumber) ? $forced_phonenumber : null)) ?>">
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
