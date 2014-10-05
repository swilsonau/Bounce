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

                    echo '
                    <div class="pure-g">
                      <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
                          <table class="pure-table" style="width: 100%;">
                          <thead>
                              <tr>
                                  <th width="5%">ID</th>
                                  <th width="15%">Program Name</th>
                                  <th width="15%">Program Date</th>
                                  <th width="15%">Program Time</th>
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
                                <td>'.$prog['programname'].'</td>
                                <td>';
                                if($prog['type'] == 1) {
                                  echo "Every ".date('l', strtotime(str_replace('/', '-', $prog['datestart'])));
                                } else {
                                  echo date('l d/m/y', strtotime(str_replace('/', '-', $prog['datestart'])));
                                }
                                echo '</td>
                                <td>'.$prog['timestart'].' to '.$prog['timeend'].'</td>
                                <td>'.progtype($prog['type']) .'</td>
                                <td>'.$prog['id'].'</td>
                                <td>'.$prog['id'].' (Max '.$prog['maxpax'].')</td>
                                <td><a href="#" class="pure-button"><i class="fa fa-pencil"></i></a> <a href="#" class="pure-button"><i class="fa fa-trash"></i></a></td>
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
                      <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">';

                      if(isset($_POST['formsubmit'])) {
                        //print_r($_POST);
                        // Do the process for part 1, clean the inputs
                        $type = mysqli_real_escape_string($sql, (isset($_POST['type']) ? $_POST['type'] : null));
                        $programname = mysqli_real_escape_string($sql, (isset($_POST['programname']) ? $_POST['programname'] : null));
                        $maxpax = mysqli_real_escape_string($sql, (isset($_POST['maxpax']) ? $_POST['maxpax'] : null));
                        $openclass = mysqli_real_escape_string($sql, (isset($_POST['openclass']) ? $_POST['openclass'] : null));
                        $localatoffice = mysqli_real_escape_string($sql, (isset($_POST['localatoffice']) ? $_POST['localatoffice'] : null));

                        if($localatoffice == 0) {
                          $street = mysqli_real_escape_string($sql, (isset($_POST['street']) ? $_POST['street'] : null));
                          $suburb = mysqli_real_escape_string($sql, (isset($_POST['suburb']) ? $_POST['suburb'] : null));
                          $state = mysqli_real_escape_string($sql, (isset($_POST['astate']) ? $_POST['astate'] : null));
                          $postcode = mysqli_real_escape_string($sql, (isset($_POST['postcode']) ? $_POST['postcode'] : null));
                        } else {
                          $street = $orgdetails['address_street'];
                          $suburb = $orgdetails['address_suburb'];
                          $state = $orgdetails['address_state'];
                          $postcode = $orgdetails['address_postcode'];
                        }

                        if($type == 1) {
                          $recurrstartdate = mysqli_real_escape_string($sql, (isset($_POST['recurr-startdate']) ? $_POST['recurr-startdate'] : null));
                          $recurrenddate = mysqli_real_escape_string($sql, (isset($_POST['recurr-enddate']) ? $_POST['recurr-enddate'] : null));
                          $recurrday = mysqli_real_escape_string($sql, (isset($_POST['recurr-day']) ? $_POST['recurr-day'] : null));

                          $recurrtimestarthour = mysqli_real_escape_string($sql, (isset($_POST['recurr-timestart-hour']) ? $_POST['recurr-timestart-hour'] : null));
                          $recurrtimestartminute = mysqli_real_escape_string($sql, (isset($_POST['recurr-timestart-minute']) ? $_POST['recurr-timestart-minute'] : null));
                          $recurrtimestart12hr = mysqli_real_escape_string($sql, (isset($_POST['recurr-timestart-12hr']) ? $_POST['recurr-timestart-12hr'] : null));

                          $recurrtimeendhour = mysqli_real_escape_string($sql, (isset($_POST['recurr-timeend-hour']) ? $_POST['recurr-timeend-hour'] : null));
                          $recurrtimeendminute = mysqli_real_escape_string($sql, (isset($_POST['recurr-timeend-minute']) ? $_POST['recurr-timeend-minute'] : null));
                          $recurrtimeend12hr = mysqli_real_escape_string($sql, (isset($_POST['recurr-timeend-12hr']) ? $_POST['recurr-timeend-12hr'] : null));
                        }elseif($type == 2) {
                          $oneoffdate = mysqli_real_escape_string($sql, (isset($_POST['oneoff-date']) ? $_POST['oneoff-date'] : null));

                          $oneofftimestarthour = mysqli_real_escape_string($sql, (isset($_POST['oneoff-timestart-hour']) ? $_POST['oneoff-timestart-hour'] : null));
                          $oneofftimestartminute = mysqli_real_escape_string($sql, (isset($_POST['oneoff-timestart-minute']) ? $_POST['oneoff-timestart-minute'] : null));
                          $oneofftimestart12hr = mysqli_real_escape_string($sql, (isset($_POST['oneoff-timestart-12hr']) ? $_POST['oneoff-timestart-12hr'] : null));

                          $oneofftimeendhour = mysqli_real_escape_string($sql, (isset($_POST['oneoff-timeend-hour']) ? $_POST['oneoff-timeend-hour'] : null));
                          $oneofftimeendminute = mysqli_real_escape_string($sql, (isset($_POST['oneoff-timeend-minute']) ? $_POST['oneoff-timeend-minute'] : null));
                          $oneofftimeend12hr = mysqli_real_escape_string($sql, (isset($_POST['oneoff-timeend-12hr']) ? $_POST['oneoff-timeend-12hr'] : null));
                        }



                        $latchng = mysqli_real_escape_string($sql, (isset($_POST['latchng']) ? $_POST['latchng'] : null));
                        $lngchng = mysqli_real_escape_string($sql, (isset($_POST['lngchng']) ? $_POST['lngchng'] : null));

                        // Error validation
                        // Doing it server side because ajax/js takes too long
                        $errors = 0;
                        $errorarray = array();

                        if($type == 0) {
                          $errors++;
                          $errorarray[] = "You must select a Program Type.";
                        }

                        if($programname == '') {
                          $errors++;
                          $errorarray[] = "You must enter a Program Name.";
                        }

                        if(!is_numeric($maxpax) && $maxpax != null) {
                          $errors++;
                          $errorarray[] = "The Max Participants must be numeric.";
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

                        if($type == 1) {
                          if($recurrstartdate == '') {
                            $errors++;
                            $errorarray[] = "You must enter a Start Date";
                          }

                          if($recurrenddate == '') {
                            $errors++;
                            $errorarray[] = "You must enter an End Date";
                          }

                          if(strtotime("$recurrtimestarthour:$recurrtimestartminute $recurrtimestart12hr") > strtotime("$recurrtimeendhour:$recurrtimeendminute $recurrtimeend12hr")) {
                            $errors++;
                            $errorarray[] = "The program cannot end before it starts.";
                          }

                        }elseif($type == 2) {
                          if($oneoffdate == '') {
                            $errors++;
                            $errorarray[] = "You must enter a Date";
                          }

                          if(strtotime("$oneofftimestarthour:$oneofftimestartminute $oneofftimestart12hr") > strtotime("$oneofftimeendhour:$oneofftimeendminute $oneofftimeend12hr")) {
                            $errors++;
                            $errorarray[] = "The program cannot end before it starts.";
                          }
                        }

                        if((!is_numeric($postcode) || strlen($postcode) != 4) && $postcode != '') {
                          $errors++;
                          $errorarray[] = "Postcode is incorrectly formatted. Eg. 2500";
                        }

                        // Show errors if needed
                        if($errors > 0) {
                          echo '
                          <a name="thisform"></a>
                          <script>window.onload = scrollToAnchor("thisform")</script>
                          <aside class="error"><strong>Please fix the following errors:</strong><br /><ul>';
                          foreach($errorarray as $error) {
                            echo '<li>'.$error.'</li>';
                          }
                          echo '</ul></aside>';
                        } else {
                          // Do update SQL statement
                          if((isset($latchng) && $latchng != '') || (isset($lngchng) && $lngchng != '')) {
                            // It was changed on the page, no need to get x and y
                            $lat = $latchng;
                            $lng = $lngchng;
                          } else {
                            // Not changed on page, get the x and y from Google

                            $session = new Temboo_Session('bounceapp', 'Bounce', 'b3fa425a34b14b1898f8415aa083bedf');

                            $geocodeByAddress = new Google_Geocoding_GeocodeByAddress($session);
                            $geocodeByAddressInputs = $geocodeByAddress->newInputs();
                            $geocodeByAddressInputs->setAddress("$street $suburb $state $postcode");
                            $geocodeByAddressResults = $geocodeByAddress->execute($geocodeByAddressInputs)->getResults();
                            //echo $geocodeByAddressResults->getResponse();
                            $geoxml = new SimpleXMLElement($geocodeByAddressResults->getResponse());

                            $geo = $geoxml->xpath('/GeocodeResponse/result/geometry');

                            $lat = (string) $geo[0]->location->lat;
                            $lng = (string) $geo[0]->location->lng;
                          }

                          if($type == 1) {
                            $datestart = $recurrstartdate;
                            $dateend = $recurrenddate;

                            echo "$recurrstartdate $datestart $recurrenddate $dateend";

                            $timestart = "$recurrtimestarthour:$recurrtimestartminute $recurrtimestart12hr";
                            $timeend = "$recurrtimeendhour:$recurrtimeendminute $recurrtimeend12hr";

                            $time = time();
                            $userid = $userdetails['id'];

                            $sql2 = mysqli_query($sql, "INSERT INTO `programs`(`orgid`, `programname`, `maxpax`, `openclass`, `datestart`, `dateend`, `timestart`, `timeend`, `type`, `street`, `suburb`, `state`, `postcode`, `lat`, `lng`, `datecreated`, `createdbyid`)VALUES('$thisorgid', '$programname', '$maxpax', '$openclass', '$datestart', '$dateend', '$timestart', '$timeend', '1', '$street', '$suburb', '$state', '$postcode', '$lat', '$lng', '$time', '$userid')");
                          } else {
                            $datestart = $oneoffdate;

                            $timestart = "$oneofftimestarthour:$oneofftimestartminute $oneofftimestart12hr";
                            $timeend = "$oneofftimeendhour:$oneofftimeendminute $oneofftimeend12hr";

                            $time = time();
                            $userid = $userdetails['id'];

                            $sql2 = mysqli_query($sql, "INSERT INTO `programs`(`orgid`, `programname`, `maxpax`, `openclass`, `datestart`, `dateend`, `timestart`, `timeend`, `type`, `street`, `suburb`, `state`, `postcode`, `lat`, `lng`, `datecreated`, `createdbyid`)VALUES('$thisorgid', '$programname', '$maxpax', '$openclass', '$datestart', '', '$timestart', '$timeend', '2', '$street', '$suburb', '$state', '$postcode', '$lat', '$lng', '$time', '$userid')");

                          }

                          //$sql2 = mysqli_query($sql, "UPDATE `organisation` SET `name` = '$name', `contact_email` = '$email', `ccontact_email` = '$cemail', `contact_phone` = '$phone', `address_street` = '$street', `address_suburb` = '$suburb', `address_state` = '$state', `address_postcode` = '$postcode'$xychange WHERE `id` = '$orgid'");

                          if(!$sql2) {
                            echo '<aside class="error"><p>Sorry, there was an issue saving that program. Please try again later or contact '.$sitename.' support.</p></aside>';
                            echo mysqli_error($sql);
                          } else {
                            // Send an email to the organisation administrator notifying the changes
                            $user = $userdetails['firstname'].' '.$userdetails['lastname'];

                            //sendemail($email, "Organisation Changes", "<strong>Attention $name administrations</strong><br /><br />The user, $user, has made changes to your organisational profile on $sitename. If this is in error, please revert the changes.<br /><br />Cheers,<br />$sitename");

                            echo '<aside class="success"><p>Changes Saved</p></aside>';
                          }

                        }

                        echo "<script>
                        $(document).ready(function() {";
                        if($type == 1) {
                          echo "$('.recurringprogram').slideDown();";
                        }elseif($type == 2) {
                          echo "$('.oneoffprogram').slideDown();";
                        }

                        if($localatoffice == 0) {
                            echo "$('.addressgroup').slideDown();";
                        }

                        echo "});
                        </script>";

                      }

                      echo '
                        <form class="pure-form pure-form-aligned" method="post" action="'.$siteurl.'org/oprograms/'.$thisorgid.'">
                          <fieldset>
                            <legend>Program Details</legend>

                            <div class="pure-control-group">
                              <label for="type">Type</label>
                              <select name="type" id="type" onchange="showprogramtype()">
                                <option value="0"'; if(!isset($_POST['type']) || $_POST['type'] == 0) { echo ' selected'; } echo '>-- CHOOSE ONE --</option>
                                <option value="1"'; if(isset($_POST['type']) && $_POST['type'] == 1) { echo ' selected'; } echo '>Recurring</option>
                                <option value="2"'; if(isset($_POST['type']) && $_POST['type'] == 2) { echo ' selected'; } echo '>One Off</option>
                              </select>
                            </div>

                            <div class="pure-control-group">
                                <label for="programnamel">Program Name</label>
                                <input name="programname" type="text" placeholder="" value="'.(isset($_POST['programname']) ? $_POST['programname'] : null).'">
                            </div>

                            <div class="pure-control-group">
                                <label for="maxpax" class="tooltip" title="You can limit the amount of clients that can be assigned to this program. If left blank, there will be no limit."><i class="fa fa-info-circle"></i> Max Participants</label>
                                <input name="maxpax" type="text" placeholder="0" size="5" value="'.(isset($_POST['maxpax']) ? $_POST['maxpax'] : null).'">
                            </div>

                            <div class="pure-control-group">
                                <label for="openclass" class="tooltip" title="If the class is open, any client can join the class. If the class is closed, a client can only be added by a trainer or administrator."><i class="fa fa-info-circle"></i> Open Class</label>
                                <select name="openclass">
                                  <option value="1"'; if(!isset($_POST['openclass']) || $_POST['openclass'] == 1) { echo ' selected'; } echo '>Yes</option>
                                  <option value="2"'; if(isset($_POST['openclass']) && $_POST['openclass'] == 2) { echo ' selected'; } echo '>No</option>
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
                                <option value="1"'; if(!isset($_POST['localatoffice']) || $_POST['localatoffice'] == 1) { echo ' selected'; } echo '>Yes</option>
                                <option value="0"'; if(isset($_POST['localatoffice']) && $_POST['localatoffice'] == 0) { echo ' selected'; } echo '>No</option>
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
                              <input class="startdatepicker readonly" name="recurr-startdate" placeholder="Click Me" type="text" value="'.(isset($_POST['recurr-startdate']) ? $_POST['recurr-startdate'] : null).'" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-enddate" class="tooltip" title="Leave blank for none."><i class="fa fa-info-circle"></i> End Date</label>
                              <input class="isdatepicker" name="recurr-enddate" placeholder="Click Me" type="text" value="'.(isset($_POST['recurr-enddate']) ? $_POST['recurr-enddate'] : null).'" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-day">Recurring Day</label>
                              <input class="readonly recurringday" name="recurr-day" placeholder="Populate Start Date" type="text" value="'.(isset($_POST['recurr-day']) ? $_POST['recurr-day'] : null).'" />
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-timestart">Time Start</label>
                              <select name="recurr-timestart-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g') && !isset($_POST['recurr-timestart-hour'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['recurr-timestart-hour']) && $_POST['recurr-timestart-hour'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="recurr-timestart-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i') && !isset($_POST['recurr-timestart-minute'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['recurr-timestart-minute']) && $_POST['recurr-timestart-minute'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="recurr-timestart-12hr">
                              <option'; if(isset($_POST['recurr-timestart-12hr']) && $_POST['recurr-timestart-12hr'] == "AM") { echo ' selected'; }elseif(date('A') == "AM" && !isset($_POST['recurr-timestart-12hr'])) { echo ' selected'; } echo '>AM</option>
                              <option'; if(isset($_POST['recurr-timestart-12hr']) && $_POST['recurr-timestart-12hr'] == "PM") { echo ' selected'; }elseif(date('A') == "PM" && !isset($_POST['recurr-timestart-12hr'])) { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>

                            <div class="pure-control-group">
                              <label for="recurr-timeend">Time End</label>
                              <select name="recurr-timeend-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g') && !isset($_POST['recurr-timeend-hour'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['recurr-timeend-hour']) && $_POST['recurr-timeend-hour'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="recurr-timeend-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i') && !isset($_POST['recurr-timeend-minute'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['recurr-timeend-minute']) && $_POST['recurr-timeend-minute'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="recurr-timeend-12hr">
                              <option'; if(isset($_POST['recurr-timeend-12hr']) && $_POST['recurr-timeend-12hr'] == "AM") { echo ' selected'; }elseif(date('A') == "AM" && !isset($_POST['recurr-timeend-12hr'])) { echo ' selected'; } echo '>AM</option>
                              <option'; if(isset($_POST['recurr-timeend-12hr']) && $_POST['recurr-timeend-12hr'] == "PM") { echo ' selected'; }elseif(date('A') == "PM" && !isset($_POST['recurr-timeend-12hr'])) { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>
                          </fieldset>

                          <fieldset class="oneoffprogram" style="display: none;">
                            <legend>One Off Program</legend>

                            <div class="pure-control-group">
                              <label for="oneoff-date">Date</label>
                              <input class="isdatepicker readonly" name="oneoff-date" placeholder="Click Me" type="text" value="'.(isset($_POST['oneoff-date']) ? $_POST['oneoff-date'] : null).'" />
                            </div>

                            <div class="pure-control-group">
                              <label for="oneoff-timestart">Time Start</label>
                              <select name="oneoff-timestart-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g') && !isset($_POST['oneoff-timestart-hour'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['oneoff-timestart-hour']) && $_POST['oneoff-timestart-hour'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="oneoff-timestart-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i') && !isset($_POST['oneoff-timestart-minute'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['oneoff-timestart-minute']) && $_POST['oneoff-timestart-minute'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="oneoff-timestart-12hr">
                              <option'; if(isset($_POST['oneoff-timestart-12hr']) && $_POST['oneoff-timestart-12hr'] == "AM") { echo ' selected'; }elseif(date('A') == "AM" && !isset($_POST['oneoff-timestart-12hr'])) { echo ' selected'; } echo '>AM</option>
                              <option'; if(isset($_POST['oneoff-timestart-12hr']) && $_POST['oneoff-timestart-12hr'] == "PM") { echo ' selected'; }elseif(date('A') == "PM" && !isset($_POST['oneoff-timestart-12hr'])) { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>

                            <div class="pure-control-group">
                              <label for="oneoff-timeend">Time End</label>
                              <select name="oneoff-timeend-hour">';
                                for($i = 1; $i < 13; $i++) {
                                  if($i == date('g') && !isset($_POST['oneoff-timeend-hour'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['oneoff-timeend-hour']) && $_POST['oneoff-timeend-hour'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> : <select name="oneoff-timeend-minute">';
                                for($i = 0; $i < 60; $i++) {
                                  $i = str_pad($i, '2', '0', STR_PAD_LEFT);
                                  if($i == date('i') && !isset($_POST['oneoff-timeend-minute'])) {
                                    echo "<option selected>$i</option>";
                                  }elseif(isset($_POST['oneoff-timeend-minute']) && $_POST['oneoff-timeend-minute'] == $i){
                                    echo "<option selected>$i</option>";
                                  } else {
                                    echo "<option>$i</option>";
                                  }
                                }
                              echo '</select> <select name="oneoff-timeend-12hr">
                              <option'; if(isset($_POST['oneoff-timeend-12hr']) && $_POST['oneoff-timeend-12hr'] == "AM") { echo ' selected'; }elseif(date('A') == "AM" && !isset($_POST['oneoff-timeend-12hr'])) { echo ' selected'; } echo '>AM</option>
                              <option'; if(isset($_POST['oneoff-timeend-12hr']) && $_POST['oneoff-timeend-12hr'] == "PM") { echo ' selected'; }elseif(date('A') == "PM" && !isset($_POST['oneoff-timeend-12hr'])) { echo ' selected'; } echo '>PM</option>
                              </select>
                            </div>
                          </fieldset>

                          <input type="hidden" name="latchng" id="latchng" />
                          <input type="hidden" name="lngchng" id="lngchng" />

                          <div class="pure-controls bounce-controls">
                              <button type="submit" name="formsubmit" class="pure-button pure-button-primary formsubmit">Add Program</button>
                          </div>
                        </form>
                      </div>

                      <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                        <script type="text/javascript">
                          window.onload = function () {
                            google.maps.event.addDomListener(window, \'load\', gmaps_ini('.$orgdetails['cord_lat'].', '.$orgdetails['cord_long'].'));
                          }
                        </script>

                        <div id="map-canvas" style="width: 100%; height: 300px;"></div>

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
