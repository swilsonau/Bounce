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

                $getorgdetsql = mysqli_query($sql, "SELECT `organisation`.`id`, `organisation`.`name`, `organisation`.`address`, `organisation`.`contact_email`, `cord_lat`, `organisation`.`cord_long`, `organise_assign`.`organ_id`, `organise_assign`.`user_id`, `organise_assign`.`perms` FROM  `organisation` RIGHT JOIN `organise_assign` ON `organisation`.`id` = `organise_assign`.`organ_id` WHERE `organisation`.`id` = '$orgid' AND `organise_assign`.`user_id` = '$userdetails[id]'");

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
                              <input name="contactemail" type="text" size="30" value="'.$orgdetails['contact_email'].'">
                          </div>

                          <div class="pure-control-group">
                              <label for="passwordconfirm">Confirm Password</label>
                              <input name="passwordconfirm" type="password" placeholder="Confirm Password">
                          </div>

                          <legend>Your Information</legend>

                          <div class="pure-control-group">
                              <label for="firstname">First Name</label>
                              <input name="firstname" type="text" placeholder="First Name" value="">
                          </div>

                          <div class="pure-control-group">
                              <label for="lastname">Last Name</label>
                              <input name="lastname" type="text" placeholder="Last Name" value="">
                          </div>

                          <div class="pure-control-group">
                              <label for="mobile">Mobile Number</label>
                              <input name="mobile" type="text" placeholder="0400000000" value="">
                          </div>

                          <div class="pure-control-group">
                              <label for="postcode">Postcode</label>
                              <input name="postcode" type="text" placeholder="2500" value="">
                          </div>

                          <div class="pure-controls">
                              <label for="tcs" class="pure-checkbox">
                                  <input name="tcs" type="checkbox"> Ive read the <a href="#">terms and conditions</a>.
                              </label>

                              <button type="submit" class="pure-button pure-button-primary">Submit</button>
                          </div>
                      </fieldset>
                  </form>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                    <form class="pure-form pure-form-aligned"  method="post" action="'.$siteurl.'org/profile">
                    <fieldset>
                        <legend>Location Details</legend>

                    </fieldset>
                    </form>
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
