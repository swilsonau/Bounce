<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// My Programs

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>My Programs</h1>
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

          <div style="text-align: right; margin-bottom: 5px;">
            View Type: <a class="pure-button pure-button-primary" href="#"><i class="fa fa-tasks"></i></a> <a class="pure-button" href="#"><i class="fa fa-cubes"></i></a>
          </div>

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
                <td data-title="Name">'.$usrprog['programname'].'</td>
                <td>';
                if($usrprog['type'] == 1) {
                  echo "Every ".date('l', strtotime(str_replace('/', '-', $usrprog['datestart'])));
                } else {
                  echo date('l d/m/y', strtotime(str_replace('/', '-', $usrprog['datestart'])));
                }
                echo '</td>
                <td data-title="Time">'.dateDiff($usrprog['timestart'], $usrprog['timeend']).'</td>
                <td data-title="Status"><i class="fa fa-check"></i> Enrolled</td>
                <td data-title="Options" style="text-align: right;"><button class="pure-button" onclick="progviewmodal('.$usrprog['progid'].')"><i class="fa fa-search"></i> View Details</button> <button class="pure-button pure-button-error" onclick="withdrawmodal('.$usrprog['progid'].')"><i class="fa fa-external-link-square"></i> Withdraw</button></td>
                </tr>';
              }
            }
          }
          ?>
        </tbody>
      </table>

      <div class="remodal" data-remodal-id="modal">
        <p>Loading content....</p>

        <a class="remodal-cancel" href="#">Cancel</a>
      </div>
        </div>
  </div>
</div>
