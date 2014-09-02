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
    <h1><?php echo getusertype($userdetails, true); ?> Dashboard / Users</h1>
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
              <p><i class="fa fa-info-circle"></i> You can edit the users of your organisation here. This includes it's trainers, administrators and clients. You can add users using their email address or mobile number.</p>
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
                <select name="orgselect" onchange="changeorg(this.value, \'ousers\');">';
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
                          <th>ID</th>
                          <th>Name</th>
                          <th>Mobile Number</th>
                          <th>Email Address</th>
                          <th>Type</th>
                          <th></th>
                      </tr>
                  </thead>

                  <tbody>';
                      // Pull all the users from the DB
                      $thisorgid = $orgdetails['id'];

                      $getuserscountsql = mysqli_query($sql, "SELECT `organise_assign`.`user_id`, `organise_assign`.`organ_id`, `organise_assign`.`date_assigned`, `organise_assign`.`perms`, `users`.`id`, `users`.`id`, `users`.`firstname`, `users`.`lastname`, `users`.`phonenumber`, `users`.`emailaddress` FROM `organise_assign` RIGHT JOIN `users` ON `organise_assign`.`user_id` = `users`.`id` WHERE `organ_id`= '$thisorgid' AND  `organise_assign`.`perms` <> 0");


                      $num_rows = mysqli_num_rows($getuserscountsql);

                      $items = 10;

                      $nrpage_amount = $num_rows/$items;
                      $page_amount = ceil($num_rows/$items);
                      $page_amount = $page_amount-1;
                      $page = mysqli_real_escape_string($sql, (isset($_GET['p']) ? $_GET['p'] : null));
                      if($page < "1"){
                      	$page = "0";
                      }
                      $p_num = $items*$page;

                      $getusersorgsql = mysqli_query($sql, "SELECT `organise_assign`.`user_id`, `organise_assign`.`organ_id`, `organise_assign`.`date_assigned`, `organise_assign`.`perms`, `users`.`id`, `users`.`id`, `users`.`firstname`, `users`.`lastname`, `users`.`phonenumber`, `users`.`emailaddress` FROM `organise_assign` RIGHT JOIN `users` ON `organise_assign`.`user_id` = `users`.`id` WHERE `organ_id`= '$thisorgid' AND  `organise_assign`.`perms` <> 0 LIMIT $p_num , $items");

                      if(!$getusersorgsql) {
                        echo '<aside class="error">
                        <p>There was an issue collecting users assigned to this organisation. Please try again or report the issue.</p>
                        </aside>';
                      } else {
                        while($userorg = mysqli_fetch_array($getusersorgsql)) {
                          echo '<tr>
                          <td>'.$userorg['id'].'</td>
                          <td>'.$userorg['firstname'].' '.$userorg['lastname'].'</td>
                          <td>'.$userorg['phonenumber'].'</td>
                          <td>'.$userorg['emailaddress'].'</td>
                          <td>'.stringorgperms($userorg['perms'], true).'</td>
                          <td></td>
                      </tr>';
                        }
                      }
                  echo '</tbody>
              </table>';
              if($page_amount != "0"){
            		echo '<ul class="pure-paginator">';

                        echo '<li'; if($page == "0"){ $prev = 0; } else { $prev = $page-1; } echo '><a class="pure-button prev" href="'.$siteurl.'org/ousers/'.$thisorgid.'/?p='.$prev.'">&#171;</a></li>';

            			for ( $counter = 0; $counter <= $page_amount; $counter += 1) {
            				echo '<li><a href="'.$siteurl.'org/ousers/'.$thisorgid.'/?p='.$counter.'" class="pure-button'; if($counter == $page) { echo ' pure-button-active'; } echo '">'.($counter + 1).'</a></li>';
            			}

                        echo '<li'; if($page >= $page_amount){ echo ' onclick="return false;"'; $next = 0; } else { $next = $page+1; } echo '><a class="pure-button next" href="'.$siteurl.'org/ousers/'.$thisorgid.'/?p='.$next.'">&#187;</a></li>';

            		echo '</ul>';
            	}
  echo '
              <h3>Assign a user</h3>
              <aside class="warning">
                <p><i class="fa fa-user"></i> You can assign a user to your organisation below. Once you assign a user, they will be notified via email or other notification methods they have specified. You can add a user either via their email address or mobile number. Alternatively, you can create an account for a user and they will be emailed the details.</p><p><strong>Important:</strong> It is possible to assign users with administrator or trainer privileges in this section. Please ensure you double check what permission you are assigning.</p>
              </aside>
                </div>
                </div>

                <div class="pure-g">
                  <input type="hidden" id="orgid" value="'.$orgdetails['id'].'">
                  <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                    <form class="pure-form pure-form-aligned">
                      <fieldset>
                        <legend>Add Existing User</legend>

                        <aside class="existing-confirmed" style="display: none;">
                          <p>The user was found and a request was sent. The user will need to accept the request within one week. You can revoke the request by pushing Pending Users below and revoking the selected user.</p>
                        </aside>

                        <div class="pure-control-group">
                          <label for="emailaddress">Email Address</label>
                          <input name="emailaddress" id="emailaddress" type="text">
                        </div>

                        <div class="pure-control-group">
                          <label for="none"><strong>OR</strong></label>
                        </div>

                        <div class="pure-control-group">
                          <label for="mobilenumber">Mobile Number</label>
                          <input name="mobilenumber" id="mobilenumber" type="text">
                        </div>

                        <div class="pure-control-group" style="margin-top: 40px;">
                          <label for="usertype">User Type</label>
                          <select name="usertype" id="usertype">
                            <option value="1">Client</option>
                            <option value="2">Trainer</option>
                            <option value="3">Administrator</option>
                          </select>
                        </div>
                      </fieldset>

                      <fieldset>
                          <div class="pure-controls">
                              <button type="button" class="pure-button pure-button-primary" onclick="searchforuser()">Add User</a>
                          </div>

                          <div class="existinguser-loading" style="display: none;">
                            <i class="fa fa-refresh fa-spin"></i> Please wait. Requesting information....
                          </div>
                      </fieldset>
                    </form>
                  </div>
                  <div class="pure-u-1 pure-u-md-1-2" style="padding: 5px;">
                    <form class="pure-form pure-form-aligned" method="post" action="<?php echo $siteurl; ?>">
                      <fieldset>
                        <legend>Add New User</legend>

                        <aside class="newuser-confirmed" style="display: none;">
                          <p>A user has been created and they have been emailed information. The user will need to create the account within one week. You can revoke the request by pushing Pending Users below and revoking the selected user.</p>
                        </aside>

                        <div class="pure-control-group">
                          <label for="firstname">First Name</label>
                          <input name="firstname" id="new-firstname" type="text">
                        </div>

                        <div class="pure-control-group">
                          <label for="new-emailaddress">Email Address</label>
                          <input name="new-emailaddress" id="new-emailaddress" type="text">
                        </div>

                        <div class="pure-control-group">
                          <label for="new-mobilenumber">Mobile Number</label>
                          <input name="new-mobilenumber" id="new-mobilenumber" type="text">
                        </div>

                        <div class="pure-control-group" style="margin-top: 40px;">
                          <label for="usertype">User Type</label>
                          <select name="new-usertype" id="new-usertype">
                            <option value="1">Client</option>
                            <option value="2">Trainer</option>
                            <option value="3">Administrator</option>
                          </select>
                        </div>
                      </fieldset>

                      <fieldset>
                          <div class="pure-controls">
                              <button type="button" class="pure-button pure-button-primary" onclick="createnewuser()">Create User</a>
                          </div>

                          <div class="newuser-loading" style="display: none;">
                            <i class="fa fa-refresh fa-spin"></i> Please wait. Creating user....
                          </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                <div class="pure-g">
                  <div class="pure-u-1 pure-u-md-1-1" style="padding: 5px;">
                    Show: <a href="'.$siteurl.'org/showpending" class="pure-button button-small">Pending Users</a> <a class="pure-button button-small">Removed Users</a>
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
