<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Activate Acc
?>
<div class="page-header">
  <div class="content">
    <h1>Activate Account</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
        <?php
          if(checklogin()) {
            echo '<aside class="error">
            <p>Whoops! You\'re already logged in.</p>
            </aside>';
          } else {
            if(isset($_GET['process'])) {
              // Check the activation code exists
              $code = mysqli_real_escape_string($sql, $_GET['process']);

              $actsql = mysqli_query($sql, "SELECT `id`, `activationhash`, `firstname`, `emailaddress` FROM `users` WHERE `activationhash` = '$code' AND `status` = '0'");

              if($actsql) {
                // All good

                if(!mysqli_num_rows($actsql)) {
                  echo '<aside class="error">
                  <p>Account already activated or activation hash invalid.</p>
                  </aside>';
                } else {

                  $acc = mysqli_fetch_array($actsql);

                  // Activate the user
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
                }

              } else {
                // MySQL error

                echo 'There was an error.';
              }
            } else {
              echo '<aside class="error">
              <p>Whoops! No activation code was specified.</p>
              </aside>';
            }
          }
        ?>
      </div>
    </div>
  </div>
