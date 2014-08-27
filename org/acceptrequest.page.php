<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Accept Request
?>
<div class="page-header">
  <div class="content">
    <h1>Accept Request</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
        <?php
            if(isset($_GET['process'])) {
              // Check the activation code exists
              $code = mysqli_real_escape_string($sql, $_GET['process']);

              $actsql = mysqli_query($sql, "SELECT * FROM `assign_request` WHERE `authkey` = '$code' AND `expiry` < CURRENT_TIMESTAMP");

              if($actsql) {
                // All good

                if(!mysqli_num_rows($actsql)) {
                  echo '<aside class="error">
                  <p>Sorry! The request has either already been accepted or is invalid/expired.</p>
                  </aside>';
                } else {

                  $acc = mysqli_fetch_array($actsql);

                  $userid = $acc['user_id'];
                  $orgid = $acc['org_id'];
                  $perm = $acc['perms'];
                  $currtime = time();

                  // Activate the user
                  $activsql = mysqli_query($sql, "INSERT INTO `organise_assign`(`user_id`, `organ_id`, `date_assigned`, `perms`)VALUES('$userid', '$orgid', '$currtime', '$perm')");

                  if($activsql) {
                    // All good, delete the request
                    $id = $acc['id'];
                    $user = fetchuserdetail($userid);

                    $delsql = mysqli_query($sql, "DELETE FROM `assign_request` WHERE `id` = '$id'");

                    if(!$delsql) {
                      echo 'There was an error.';
                    } else {

                      //sendemail($acc['emailaddress'], $sitename." Account Activated", "Hello $acc[firstname],<br />Thanks for signing up for $sitename!<br /><br />Your account has been activated. You can now login to $sitename with the email address and password you specified at sign up.<br /><br />Thank you,<br />$sitename");

                      echo '<aside class="success">
                      <p>Thanks. You have accepted the request and have been added.</p>
                      </aside>';
                    }
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
        ?>
      </div>
    </div>
  </div>
