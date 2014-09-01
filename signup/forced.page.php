<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Forced account creation
?>
<div class="page-header">
  <div class="content">
    <h1>Forced Signup</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
        <?php
            if(isset($_GET['process'])) {
              // Check the activation code exists
              $code = mysqli_real_escape_string($sql, $_GET['process']);

              $actsql = mysqli_query($sql, "SELECT * FROM `pending_user` WHERE `token` = '$code' AND `expiry` < CURRENT_TIMESTAMP");

              if($actsql) {
                // All good

                if(!mysqli_num_rows($actsql)) {
                  echo '<aside class="error">
                  <p>Sorry! The request has either already been accepted or is invalid/expired.</p>
                  </aside>';
                } else {
                  // All good, pass them onto the signup form
                  $acc = mysqli_fetch_array($actsql);

                  $id = $acc['id'];
                  $firstname = $acc['firstname'];
                  $orgid = $acc['orgid'];
                  $currtime = time();

                  $_SESSION['forcedsignup'] = $id;

                  echo '<aside>
                    <p><i class="fa fa-cog fa-spin"></i> Please wait.... sending to signup page.</p>
                  </aside>';

                  echo '<meta http-equiv="refresh" content="3; url='.$siteurl.'signup/part1" />';

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
        ?>
      </div>
    </div>
  </div>
