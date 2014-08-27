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
                <select name="orgselect" onchange="changeorg(this.value, \'showpending\');">';
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
                          <th>Date Requested</th>
                          <th>Expiry</th>
                          <th>Type</th>
                          <th></th>
                      </tr>
                  </thead>

                  <tbody>';
                      // Pull all the users from the DB
                      $thisorgid = $orgdetails['id'];

                      $getusersorgsql = mysqli_query($sql, "SELECT `assign_request`.`user_id`, `assign_request`.`org_id`, `assign_request`.`timerequested`, `assign_request`.`expiry`, `assign_request`.`perms`, `users`.`id`, `users`.`id`, `users`.`firstname`, `users`.`lastname` FROM `assign_request` RIGHT JOIN `users` ON `assign_request`.`user_id` = `users`.`id` WHERE `org_id`= '$thisorgid'");

                      if(!$getusersorgsql) {
                        echo '<aside class="error">
                        <p>There was an issue collecting users assigned to this organisation. Please try again or report the issue.</p>
                        </aside>';
                      } else {
                        while($userorg = mysqli_fetch_array($getusersorgsql)) {
                          echo '<tr>
                          <td>'.$userorg['id'].'</td>
                          <td>'.$userorg['firstname'].' '.$userorg['lastname'].'</td>
                          <td>'.pardate($userorg['timerequested']).'</td>
                          <td>'.pardate($userorg['expiry']).'</td>
                          <td>'.stringorgperms($userorg['perms'], true).'</td>
                          <td></td>
                      </tr>';
                        }
                      }
                  echo '</tbody>
              </table>
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
