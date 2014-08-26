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
            <aside>
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

                    echo '
                    <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                      <form class="pure-form pure-form-aligned" method="post" action="'.$siteurl.'org/profile">
                      <fieldset>
                          <legend>Organisation Details</legend>

                          <div class="pure-control-group">
                              <label for="name">Name</label>
                              <input name="name" type="text" size="30" value="'.$orgdetails['name'].'">
                          </div>

                          <div class="pure-control-group">
                              <label for="contactemail">Contact Email</label>
                              <input name="contactemail" type="text" size="30" value="'.$orgdetails['contact_email'].'"><br />
                              <small>This contact email is used by '.$sitename.' to contact you in relation to your organisation. This email will not be displayed to your clients.</small>
                          </div>

                          <legend>Organisation Contact Details</legend>
                          <small>The details used below will be shown to your potential and current clients. This details are completely public.</small><br /><br />

                          <div class="pure-control-group">
                              <label for="ccontactemail">Email</label>
                              <input name="ccontactemail" type="text" placeholder="" value="'.$orgdetails['ccontact_email'].'">
                          </div>

                          <div class="pure-control-group">
                              <label for="phonenumber">Telephone Number</label>
                              <input name="phonenumber" type="text" placeholder="Phone Number" value="'.$orgdetails['contact_phone'].'">
                          </div>

                          <div class="pure-control-group">
                              <label for="mobile">Opening Hours</label>
                              <a href="#" class="pure-button">Setup Opening Hours</a>
                          </div>

                          <legend>Address Details</legend>

                          <div class="pure-control-group">
                              <label for="street">Street</label>
                              <input name="street" id="street" type="text" placeholder="" value="'.$orgdetails['address_street'].'">
                          </div>

                          <div class="pure-control-group">
                              <label for="suburb">Suburb</label>
                              <input name="suburb" id="suburb" type="text" placeholder="" value="'.$orgdetails['address_suburb'].'">
                          </div>

                          <div class="pure-control-group">
                              <label for="state">State</label>
                              <input name="state" id="state" type="text" placeholder="" value="NSW" disabled>
                          </div>

                          <div class="pure-control-group">
                              <label for="postcode">Postcode</label>
                              <input name="postcode" id="postcode" type="text" placeholder="" value="'.$orgdetails['address_postcode'].'" size="5">
                          </div>

                          <div class="pure-controls">
                              <a href="#" onclick="confirmaddress()" class="pure-button">Confirm Address</a>
                          </div>

                          <!---<div class="pure-controls">
                              <button type="submit" class="pure-button pure-button-primary">Submit</button>
                          </div>-->
                      </fieldset>

                      <input type="hidden" id="latchng" />
                      <input type="hidden" id="lngchng" />
                  </form>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                      <script type="text/javascript">
                        function initialize() {
                          var local = new google.maps.LatLng('.$orgdetails['cord_lat'].', '.$orgdetails['cord_long'].');

                          var mapOptions = {
                            center: local,
                            zoom: 16
                          };
                          var map = new google.maps.Map(document.getElementById("map-canvas"),
                              mapOptions);

                              var marker = new google.maps.Marker({
                                  position: local,
                                  map: map,
                                  draggable:true
                              });

                              google.maps.event.addListener(marker, \'dragend\', function() {
                                // When the user moves the marker, enable the save location button
                                $(\'.bounce-savelocal\').removeClass(\'pure-button-disabled\');

                                // Store these vars in hidden inputs....
                                var change = marker.getPosition();

                                $(\'#latchng\').val(change.lat());
                                $(\'#lngchng\').val(change.lng());
                              });
                        }
                        google.maps.event.addDomListener(window, \'load\', initialize);
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
