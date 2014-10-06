<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Find Programs

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
    <div class="pg-pull-left">
      <h1>My Programs <small></small></h1>
    </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 settings-nav">
            <?php
                echo dashnav($_GET['action'], $userdetails);
              ?>
        </div>

        <div class="pure-u-1 pure-u-md-3-4">
          <aside>
            <p><i class="fa fa-info-circle"></i> This is a list of the current programs you're assigned to. You can view information or withdraw from a program here.</p>
          </aside>

          <table class="pure-table" width="100%">
            <thead>
              <tr>
                <td width="30%">Program Name</td>
                <td width="20%">Program Date</td>
                <td width="20%">Program Duration</td>
                <td width="10%">Status</td>
                <td width="20%"></td>
              </tr>
            </thead>

            <tbody>
          <?php
          // Get users current
          $userid = $userdetails['id'];

          $usprgsq = mysqli_query($sql, "SELECT * FROM `programs` LEFT JOIN `program_assign` ON `program_assign`.`progid` = `programs`.`id` WHERE `program_assign`.`userid` = '$userid'");

          if(!$usprgsq) {
            echo "<tr>
              <td colspan=\"5\">
                Sorry, there was an issue processing that request. Please try again.
              </tr>
            </tr>";
          } else {
            if(mysqli_num_rows($usprgsq) == 0) {
              echo "<tr>
                <td colspan=\"5\">
                  Whoops! You aren't assigned to any programs. <a href=\"$siteurl\">Join One Now</a>.
                </tr>
              </tr>";
            } else {
              while($usrprog = mysqli_fetch_array($usprgsq)) {
                echo '<tr>
                <td>'.$usrprog['programname'].'</td>
                <td></td>
                <td>'.dateDiff($usrprog['timestart'], $usrprog['timeend']).'</td>
                <td><i class="fa fa-check"></i> Enrolled</td>
                <td style="text-align: right;"><button class="pure-button"><i class="fa fa-search"></i> View Details</button> <button class="pure-button pure-button-error"><i class="fa fa-external-link-square"></i> Withdraw</button></td>
                </tr>';
              }
            }
          }
          ?>
        </tbody>
      </table>
        </div>
  </div>
</div>
