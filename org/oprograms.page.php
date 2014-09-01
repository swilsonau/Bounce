<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Org Program Page

// Organisations can create, modify or remove programs from here

if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1><?php echo getusertype($userdetails, true); ?> Dashboard / Programs</h1>
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
            <aside style="margin-top: 0;">
              <p><i class="fa fa-info-circle"></i> In this section, you are able to create, modify or remove programs for your clients. You can also assign your clients to a program.</p>
            </aside>

            <?php
            // Check if the user is a member of multiple organisations
            $userid = $userdetails['id'];

            $wherecl = "WHERE `organise_assign`.`user_id` = '$userid' AND `organise_assign`.`perms` > '1'";

            $checkorgsql = mysqli_query($sql, "SELECT `organise_assign`.`perms`, `organisation`.`id` AS `orgid`, `organisation`.`name` AS `orgname` FROM `organise_assign` RIGHT JOIN `organisation` ON `organise_assign`.`organ_id` = `organisation`.`id` $wherecl");

            if(!$checkorgsql) {
              echo '<aside class="error">
              <p>There was an error with the database query.</p>
              </aside>';
            } else {
              $numorgs = mysqli_num_rows($checkorgsql);
              if(!$numorgs) {
                echo '<aside class="error">
                <p>You don\'t have access to any organisations.</p>
                </aside>';
              } else {
                echo '<div class="orgselector">
                <p><i class="fa fa-university"></i> Select Organisation:</p>
                <select name="orgselect" onchange="changeorg(this.value, \'oprograms\');">';
                $loopx = 0;
                $firstorg = NULL;

                while($orgarray = mysqli_fetch_array($checkorgsql)) {
                  $orgid = $orgarray['orgid'];
                  $orgname = $orgarray['orgname'];

                  if(!isset($_GET['process']) && $numorgs == 1) {
                    $selectfirst = true;
                    $onlyorgid = $orgid;
                  } else {
                    $selectedorg = $_GET['process'];
                  }

                  if($loopx == 0) {
                    // First run, means first org id
                    $onlyorgid = $orgid;
                  }

                  $perm = stringorgperms($orgarray['perms'], true);
                  echo '<option value="'.$orgid.'"'; if(isset($selectfirst) || $selectedorg == $orgid) { echo ' selected'; } echo '>'.$orgname.' ('.$perm.')</option>';
                  $loopx++;
                }

                echo '</select>
                <div style="clear: both;"></div>
                </div>';

                // Grab the org stuff
                $onlyorgid2 = (isset($onlyorgid) ? $onlyorgid : null);
                $orgid = mysqli_real_escape_string($sql, (isset($_GET['process']) ? $_GET['process'] : $onlyorgid2));

                $getorgdetsql = mysqli_query($sql, "SELECT `organisation`.*, `organise_assign`.`organ_id`, `organise_assign`.`user_id`, `organise_assign`.`perms` AS `orgperms` FROM  `organisation` RIGHT JOIN `organise_assign` ON `organisation`.`id` = `organise_assign`.`organ_id` WHERE `organisation`.`id` = '$orgid' AND `organise_assign`.`user_id` = '$userdetails[id]'");

                if(!$getorgdetsql) {
                  echo '<aside class="error">
                  <p>There was an error with the database query.</p>
                  </aside>';
                } else {
                  if(mysqli_num_rows($getorgdetsql) == 0) {
                      echo '<aside class="error">
                      <p>You don\'t have access to this organisation.</p>
                      </aside>';
                  } else {

                    $orgdetails = mysqli_fetch_array($getorgdetsql);

                    if(isset($_POST['formsubmit'])) {
                      // Do the process for part 1, clean the inputs
                      $name = mysqli_real_escape_string($sql, (isset($_POST['name']) ? $_POST['name'] : null));
                      $email = mysqli_real_escape_string($sql, (isset($_POST['contactemail']) ? $_POST['contactemail'] : null));
                      $cemail = mysqli_real_escape_string($sql, (isset($_POST['ccontactemail']) ? $_POST['ccontactemail'] : null));
                      $phone = mysqli_real_escape_string($sql, (isset($_POST['phonenumber']) ? $_POST['phonenumber'] : null));
                      $street = mysqli_real_escape_string($sql, (isset($_POST['street']) ? $_POST['street'] : null));
                      $suburb = mysqli_real_escape_string($sql, (isset($_POST['suburb']) ? $_POST['suburb'] : null));
                      $state = mysqli_real_escape_string($sql, (isset($_POST['astate']) ? $_POST['astate'] : null));
                      $postcode = mysqli_real_escape_string($sql, (isset($_POST['postcode']) ? $_POST['postcode'] : null));

                      $latchng = mysqli_real_escape_string($sql, (isset($_POST['latchng']) ? $_POST['latchng'] : null));
                      $lngchng = mysqli_real_escape_string($sql, (isset($_POST['lngchng']) ? $_POST['lngchng'] : null));

                      // Error validation
                      // Doing it server side because ajax/js takes too long
                      $errors = 0;
                      $errorarray = array();

                      if($email == '') {
                        $errors++;
                        $errorarray[] = "You must enter a Contact email address.";
                      }

                      if(!filter_var($email, FILTER_VALIDATE_EMAIL) && $email != '') {
                        $errors++;
                        $errorarray[] = "You must enter a valid Contact email address.";
                      }

                      if($cemail == '') {
                        $errors++;
                        $errorarray[] = "You must enter a Public Contact email address.";
                      }

                      if(!filter_var($cemail, FILTER_VALIDATE_EMAIL) && $cemail != '') {
                        $errors++;
                        $errorarray[] = "You must enter a valid Public Contact email address.";
                      }

                      if($phone == '') {
                        $errors++;
                        $errorarray[] = "Telephone Number is a required field.";
                      }

                      if((!is_numeric($phone) || strlen($phone) != 10) && $phone != '') {
                        $errors++;
                        $errorarray[] = "Telephone Number is incorrectly formatted. Eg. 0200000000";
                      }

                      if($street == '') {
                        $errors++;
                        $errorarray[] = "Street is a required field.";
                      }

                      if($suburb == '') {
                        $errors++;
                        $errorarray[] = "Suburb is a required field.";
                      }

                      if($state == '') {
                        $errors++;
                        $errorarray[] = "State is a required field.";
                      }

                      if($postcode == '') {
                        $errors++;
                        $errorarray[] = "Postcode is a required field.";
                      }

                      if((!is_numeric($postcode) || strlen($postcode) != 4) && $postcode != '') {
                        $errors++;
                        $errorarray[] = "Postcode is incorrectly formatted. Eg. 2500";
                      }

                      // Show errors if needed
                      if($errors > 0) {
                        echo '<aside class="error"><strong>Please fix the following errors:</strong><br /><ul>';
                        foreach($errorarray as $error) {
                          echo '<li>'.$error.'</li>';
                        }
                        echo '</ul></aside>';
                      } else {
                        // Do update SQL statement
                        if(isset($latchng) || isset($lngchng)) {
                          $xychange = ', `cord_lat` = \''.$latchng.'\', `cord_long` = \''.$lngchng.'\'';
                        }

                        $sql2 = mysqli_query($sql, "UPDATE `organisation` SET `name` = '$name', `contact_email` = '$email', `ccontact_email` = '$cemail', `contact_phone` = '$phone', `address_street` = '$street', `address_suburb` = '$suburb', `address_state` = '$state', `address_postcode` = '$postcode'$xychange WHERE `id` = '$orgid'");

                        if(!$sql2) {
                          echo 'Sorry, there was an issue saving those details.';
                          echo mysqli_error($sql);
                        } else {
                          // Send an email to the organisation administrator notifying the changes
                          $user = $userdetails['firstname'].' '.$userdetails['lastname'];

                          sendemail($email, "Organisation Changes", "<strong>Attention $name administrations</strong><br /><br />The user, $user, has made changes to your organisational profile on $sitename. If this is in error, please revert the changes.<br /><br />Cheers,<br />$sitename");

                          echo '<aside class="success"><p>Changes Saved</p></aside>';
                        }
                      }

                    }

                    echo '
                    <div class="pure-g">
                      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
                          <table class="pure-table" style="width: 100%;">
                          <thead>
                              <tr>
                                  <th width="5%">ID</th>
                                  <th width="20%">Program Date</th>
                                  <th width="20%">Program Time</th>
                                  <th width="10%">Program Type</th>
                                  <th width="10%">Program Attendees</th>
                                  <th width="15%"></th>
                              </tr>
                          </thead>

                          <tbody>';

                          echo '<tr>
                            <td colspan="6"><i class="fa fa-times-circle"></i> There are no programs.</td>
                          </tr>';

                          echo '</tbody>
                        </table>
                      </div>
                    </div>
                    <div class="pure-g">
                      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
                        Options: <a href="'.$siteurl.'org/showpending" class="pure-button button-small">Add Program</a>
                      </div>
                    </div>
                    ';
                  }
                }

              }
            }
            ?>
        </div>
  </div>
</div>
