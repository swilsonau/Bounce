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
            <aside class="error mobilewarning">
              <p style="font-weight: bold;"><i class="fa fa-mobile"></i> Mobile Warning</p>
              <p>We notice you're using a mobile device. Please note, this page works best on a desktop computer or tablet.</p>
            </aside>

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
                                  <th width="10%">Program Trainer</th>
                                  <th width="10%">Program Attendees</th>
                                  <th width="10%"></th>
                              </tr>
                          </thead>

                          <tbody>';

                          $thisorgid = $orgdetails['id'];

                          $getprogcountsql = mysqli_query($sql, "SELECT `id` FROM `programs` WHERE `orgid` = '$thisorgid'");

                          $num_rows = mysqli_num_rows($getprogcountsql);

                          $items = 10;

                          $nrpage_amount = $num_rows/$items;
                          $page_amount = ceil($num_rows/$items);
                          $page_amount = $page_amount-1;
                          $page = mysqli_real_escape_string($sql, (isset($_GET['p']) ? $_GET['p'] : null));
                          if($page < "1"){
                            $page = "0";
                          }
                          $p_num = $items*$page;

                          // Get programs
                          $progsql = mysqli_query($sql, "SELECT * FROM `programs` WHERE `orgid` = '$thisorgid' LIMIT $p_num , $items");

                          if(!$progsql) {
                            echo '<tr>
                              <td colspan="7"><i class="fa fa-times-circle"></i> There was an error retrieving the programs. Please try again later.</td>
                            </tr>';
                          } else {
                            if(mysqli_num_rows($progsql) == 0) {
                              echo '<tr>
                                <td colspan="7"><i class="fa fa-times-circle"></i> There are no programs.</td>
                              </tr>';
                            } else {
                              while($prog = mysqli_fetch_array($progsql)) {
                                echo '<tr>
                                <td>'.$prog['id'].'</td>
                                <td>';
                                if($prog['type'] == 1) {
                                  echo "Every ".date('l', $prog['datestart']);
                                } else {
                                  echo date('l d/m/y', $prog['datestart']);
                                }
                                echo '</td>
                                <td>'.$prog['timestring'].'</td>
                                <td>'.progtype($prog['type']) .'</td>
                                <td>'.$prog['id'].'</td>
                                <td>'.$prog['id'].'</td>
                                <td><a href="#" class="pure-button"><i class="fa fa-pencil"></i> Edit</a> <a href="#" class="pure-button"><i class="fa fa-trash"></i> Delete</a></td>
                                </tr>';
                              }
                            }
                          }


                          echo '</tbody>
                        </table>
                        <!---Options: <a href="'.$siteurl.'org/showpending" class="pure-button button-small">Add Program</a>-->
                        ';

                        if($page_amount != "0"){
                          echo '<ul class="pure-paginator">';

                                  echo '<li'; if($page == "0"){ $prev = 0; } else { $prev = $page-1; } echo '><a class="pure-button prev" href="'.$siteurl.'org/oprograms/'.$thisorgid.'/?p='.$prev.'">&#171;</a></li>';

                            for ( $counter = 0; $counter <= $page_amount; $counter += 1) {
                              echo '<li><a href="'.$siteurl.'org/oprograms/'.$thisorgid.'/?p='.$counter.'" class="pure-button'; if($counter == $page) { echo ' pure-button-active'; } echo '">'.($counter + 1).'</a></li>';
                            }

                                  echo '<li'; if($page >= $page_amount){ echo ' onclick="return false;"'; $next = 0; } else { $next = $page+1; } echo '><a class="pure-button next" href="'.$siteurl.'org/oprograms/'.$thisorgid.'/?p='.$next.'">&#187;</a></li>';

                          echo '</ul>';
                        }

                        echo '

                        <h3>Create A Program</h3>
                        <aside class="warning">
                          <p><i class="fa fa-futbol-o"></i> You are able to create new programs below. There are two types of programs available, Recurring and One Off. A recurring program will run at a specific time each week while a One Off program will only run once on a specific date. Recurring programs are useful for those daily workout sessions and the One Off programs are useful for one-on-ones with clients.</p>

                          <p>Once a program has finished (the recurring program\'s end date has been reached or a one off program has passed) it will be removed and only show in the archived programs sections. By default, clients cannot see archived programs/</p>
                        </aside>
                      </div>
                    </div>

                    <div class="pure-g">
                      <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                        <form class="pure-form pure-form-aligned">
                          <fieldset>
                            <legend>Program Details</legend>

                            <div class="pure-control-group">
                              <label for="type">Type</label>
                              <select name="type" id="type" onchange="showprogramtype()">
                                <option value="0">-- CHOOSE ONE --</option>
                                <option value="1">Recurring</option>
                                <option value="2">One Off</option>
                              </select>
                            </div>

                            <div class="pure-control-group">
                                <label for="programnamel">Program Name</label>
                                <input name="programname" type="text" placeholder="" value="'.(isset($_POST['ccontactemail']) ? $_POST['ccontactemail'] : null).'">
                            </div>

                            <div class="pure-control-group">
                                <label for="maxpax" class="tooltip" title="You can limit the amount of clients that can be assigned to this program. If left blank, there will be no limit."><i class="fa fa-info-circle"></i> Max Participants</label>
                                <input name="maxpax" type="text" placeholder="0" size="5" value="'.(isset($_POST['ccontactemail']) ? $_POST['ccontactemail'] : null).'">
                            </div>

                            <div class="pure-control-group">
                                <label for="maxpax" class="tooltip" title="If the class is open, any client can join the class. If the class is closed, a client can only be added by a trainer or administrator."><i class="fa fa-info-circle"></i> Open Class</label>
                                <select name="type">
                                  <option value="1">Yes</option>
                                  <option value="2">No</option>
                                </select>
                            </div>
                          </fieldset>

                          <fieldset>
                            <legend>Program Location</legend>

                            <aside class="address-message" style="display: none;">
                              <p>Please now confirm the location of your organisation using the Google Map. Move the marker and push Save Location once it\'s correct. If the map is already correct, you can push the Save Profile button below.</p>
                            </aside>

                            <div class="pure-control-group">
                              <label for="localatoffice"> Is the program at your office location?</label>
                              <select name="localatoffice" id="type" onchange="showlocaltype(this.value)">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                              </select> <i class="fa fa-info-circle tooltip" title="Your office location being the address in the Profile section."></i>
                            </div>

                            <div class="addressgroup" style="display: none;">

                            <div class="pure-control-group">
                                <label for="street">Street</label>
                                <input name="street" id="street" type="text" placeholder="" value="'.(isset($_POST['street']) ? $_POST['street'] : null).'">
                            </div>

                            <div class="pure-control-group">
                                <label for="suburb">Suburb</label>
                                <input name="suburb" id="suburb" type="text" placeholder="" value="'.(isset($_POST['suburb']) ? $_POST['suburb'] : null).'">
                            </div>

                            <div class="pure-control-group">
                                <label for="state">State</label>
                                <input name="astate" id="state" type="text" placeholder="" value="'.(isset($_POST['astate']) ? $_POST['astate'] : 'NSW').'" readonly>
                            </div>

                            <div class="pure-control-group">
                                <label for="postcode">Postcode</label>
                                <input name="postcode" id="postcode" type="text" placeholder="" value="'.(isset($_POST['postcode']) ? $_POST['postcode'] : null).'" size="5">
                            </div>

                            <div class="pure-controls">
                              <button type="button" onclick="confirmaddress()" class="pure-button">Confirm Address</button>

                              <div class="address-loading" style="display: none;">
                                <i class="fa fa-refresh fa-spin"></i> Please wait. Loading map......
                              </div>
                            </div>

                            </div>
                          </fieldset>

                          <fieldset class="recurringprogram" style="display: none;">
                            <legend>Recurring Program</legend>

                            <div class="pure-control-group">
                              <label for="recurr-startdate">Start Date</label>
                              <input class="startdatepicker readonly" name="recurr-startdate" placeholder="Click Me" type="text" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-enddate" class="tooltip" title="Leave blank for none."><i class="fa fa-info-circle"></i> End Date</label>
                              <input class="isdatepicker" name="recurr-enddate" placeholder="Click Me" type="text" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-day">Recurring Day</label>
                              <input class="readonly recurringday" name="recurr-day" placeholder="Populate Start Date" type="text" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-timestart">Time Start</label>
                              <select name="recurr-timestart-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="recurr-timestart-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="recurr-timestart-12hr">
                              <option'; if(date('A') == "AM") { echo ' selected'; } echo '>AM</option>
                              <option'; if(date('A') == "PM") { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-timeend">Time End</label>
                              <select name="recurr-timeend-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="recurr-timeend-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="recurr-timeend-12hr">
                              <option'; if(date('A') == "AM") { echo ' selected'; } echo '>AM</option>
                              <option'; if(date('A') == "PM") { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>
                          </fieldset>

                          <fieldset class="oneoffprogram" style="display: none;">
                            <legend>One Off Program</legend>

                            <div class="pure-control-group">
                              <label for="recurr-date">Date</label>
                              <input class="isdatepicker readonly" name="recurr-date" placeholder="Click Me" type="text" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-timestart">Time Start</label>
                              <select name="recurr-timestart-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="recurr-timestart-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="recurr-timestart-12hr">
                              <option'; if(date('A') == "AM") { echo ' selected'; } echo '>AM</option>
                              <option'; if(date('A') == "PM") { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-timeend">Time End</label>
                              <select name="recurr-timeend-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="recurr-timeend-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i')) {
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="recurr-timeend-12hr">
                              <option'; if(date('A') == "AM") { echo ' selected'; } echo '>AM</option>
                              <option'; if(date('A') == "PM") { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>
                          </fieldset>
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
                          <p><i class="fa fa-star-o"></i> Moving the marker will only update the precise location of the program. Useful if the program is in a park or reserve.</p>
                        </aside>
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
