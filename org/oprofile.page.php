<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Org Profile Page

// Profile focuses

if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1><?php echo getusertype($userdetails, true); ?> Dashboard / Profile</h1>
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
              <p><i class="fa fa-info-circle"></i> You can edit the profile of your organisation here. This includes the name, address, contact details and settings. You can upload a logo here to show on your sessions and any emails sent out. If you are a member of multiple organisations, you can change organisations with the dropdown menu.</p>
            </aside>

            <?php
            // Check if the user is a member of multiple organisations
            $userid = $userdetails['id'];

            $wherecl = "WHERE `organise_assign`.`user_id` = '$userid' AND `organise_assign`.`perms` <> '0'";

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
                <select name="orgselect" onchange="changeorg(this.value);">';
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
                          echo '<aside class="success"><p>Changes Saved</p></aside>';
                        }
                      }

                    }

                    echo '
                    <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                      <form class="pure-form pure-form-aligned" method="post" action="'.$siteurl.'org/oprofile/'.$orgdetails['id'].'">
                      <fieldset>
                          <legend>Organisation Details</legend>

                          <div class="pure-control-group">
                              <label for="name">Name</label>
                              <input name="name" type="text" size="30" value="'.(isset($_POST['name']) ? $_POST['name'] : $orgdetails['name']).'">
                          </div>

                          <div class="pure-control-group">
                              <label for="contactemail">Contact Email</label>
                              <input name="contactemail" type="text" size="30" value="'.(isset($_POST['contactemail']) ? $_POST['contactemail'] : $orgdetails['contact_email']).'"><br />
                              <small>This contact email is used by '.$sitename.' to contact you in relation to your organisation. This email will not be displayed to your clients.</small>
                          </div>

                          <legend>Organisation Contact Details</legend>
                          <small>The details used below will be shown to your potential and current clients. This details are completely public.</small><br /><br />

                          <div class="pure-control-group">
                              <label for="ccontactemail">Email</label>
                              <input name="ccontactemail" type="text" placeholder="" value="'.(isset($_POST['ccontactemail']) ? $_POST['ccontactemail'] : $orgdetails['ccontact_email']).'">
                          </div>

                          <div class="pure-control-group">
                              <label for="phonenumber">Telephone Number</label>
                              <input name="phonenumber" type="text" placeholder="Phone Number" value="'.(isset($_POST['phonenumber']) ? $_POST['phonenumber'] : $orgdetails['contact_phone']).'">
                          </div>

                          <div class="pure-control-group">
                              <label for="mobile">Opening Hours</label>
                              <a href="#" class="pure-button">Setup Opening Hours</a>
                          </div>

                          <legend>Address Details</legend>

                          <aside class="address-message" style="display: none;">
                            <p>Please now confirm the location of your organisation using the Google Map. Move the marker and push Save Location once it\'s correct. If the map is already correct, you can push the Save Profile button below.</p>
                          </aside>

                          <div class="pure-control-group">
                              <label for="street">Street</label>
                              <input name="street" id="street" type="text" placeholder="" value="'.(isset($_POST['street']) ? $_POST['street'] : $orgdetails['address_street']).'">
                          </div>

                          <div class="pure-control-group">
                              <label for="suburb">Suburb</label>
                              <input name="suburb" id="suburb" type="text" placeholder="" value="'.(isset($_POST['suburb']) ? $_POST['suburb'] : $orgdetails['address_suburb']).'">
                          </div>

                          <div class="pure-control-group">
                              <label for="state">State</label>
                              <input name="astate" id="state" type="text" placeholder="" value="'.(isset($_POST['astate']) ? $_POST['astate'] : 'NSW').'" readonly>
                          </div>

                          <div class="pure-control-group">
                              <label for="postcode">Postcode</label>
                              <input name="postcode" id="postcode" type="text" placeholder="" value="'.(isset($_POST['postcode']) ? $_POST['postcode'] : $orgdetails['address_postcode']).'" size="5">
                          </div>

                          <div class="pure-controls">
                            <button type="button" onclick="confirmaddress()" class="pure-button">Confirm Address</button>

                            <div class="address-loading" style="display: none;">
                              <i class="fa fa-refresh fa-spin"></i> Please wait. Loading map......
                            </div>
                          </div>

                          <div class="pure-controls bounce-controls">
                              <button type="submit" name="formsubmit" class="pure-button pure-button-primary">Save Profile</button>
                          </div>
                      </fieldset>

                      <input type="hidden" name="latchng" id="latchng" />
                      <input type="hidden" name="lngchng" id="lngchng" />

                  </form>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                      <script type="text/javascript">
                        window.onload = function () {
                          google.maps.event.addDomListener(window, \'load\', gmaps_ini('.$orgdetails['cord_lat'].', '.$orgdetails['cord_long'].'));
                        }
                      </script>

                      <div id="map-canvas" style="width: 100%; height: 300px;"></div>
                      <div style="text-align: right; margin-top: 10px;">
                      <button class="pure-button button-small">Reset Map</button> <button class="pure-button pure-button-primary pure-button-disabled button-small bounce-savelocal">Save Location</button>
                      </div>

                      <br /><aside>
                        <p><i class="fa fa-star-o"></i> Moving the marker will only update the precise location of your address and not modify the actual address details.</p>
                      </aside>
                    </div>
                    </div>';
                    if($orgdetails['orgperms'] == 1) {
                      echo '<div class="pure-g">
                      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
                        <aside class="error">
                          <p>Sorry, but as a trainer, you cannot edit this organisations details. Please contact the administrator for your organisation to change any details.</p>
                        </aside>
                      </div>
                      </div>';
                    }
                  }
                }

              }
            }
            ?>
        </div>
  </div>
</div>
