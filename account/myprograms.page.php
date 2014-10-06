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
          <?php
          // Get users current
          $userid = $userdetails['id'];

          $usprgsq = mysqli_query($sql, "SELECT * FROM `programs` LEFT JOIN `program_assign` ON `program_assign`.`progid` = `programs`.`id` WHERE `program_assign`.`userid` = '$userid'");

          if(!$usprgsq) {
            echo "Error";
          } else {
            if(mysqli_num_rows($usprgsq) == 0) {
              echo 'You are not assigned to any programs!';
            } else {
              while($usrprog = mysqli_fetch_array($usprgsq)) {
                echo $usrprog['programname'];
              }
            }
          }
          ?>
        </div>
  </div>
</div>
