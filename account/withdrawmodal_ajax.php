<?php
session_start();

include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

if(!checklogin()) {
  echo json_encode(array("error" => 1, "errortext" => "You are not logged in."));
  die();
}

if($_SERVER["CONTENT_TYPE"] != "application/x-www-form-urlencoded; charset=UTF-8") {
  echo json_encode(array("error" => 1, "errortext" => "Invalid request. Expecting something different. Sorry but we are experiencing an issue. Please try again later."));
  die();
}

// Stuff
$progid = mysqli_real_escape_string($sql, (isset($_POST['progid']) ? $_POST['progid'] : null));
$userid = $_SESSION['bounceuser'];

$array = array();

// Check if the user has permission for this organisation first (checking the haxxors)
$checkpermssql = mysqli_query($sql, "SELECT * FROM `programs` LEFT JOIN `program_assign` ON `program_assign`.`progid` = `programs`.`id` WHERE `program_assign`.`userid` = '$userid' AND `program_assign`.`progid` = '$progid'");

if(!$checkpermssql) {
  $array['error'] = 1;
  $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
} else {
  if(mysqli_num_rows($checkpermssql) == 0) {
    $array['error'] = 1;
    $array['errortext'] = "You are not assigned to this program. If this issue persists, please contact your admin.";
  } else {
    $prog = mysqli_fetch_array($checkpermssql);

      $array['error'] = 0;
      $array['html'] = '

                <img src="'.$siteurl.'img/bounce-logo-black.png" width="150px"/>
                <h1>Confirm Withdrawal</h1>
                <aside>
                  <p>If you withdraw from a closed or full class, you may not be able to join the class again until a spot opens.</p>
                </aside>
                <p>Are you sure you want to withdraw from '.$prog['programname'].'?</p>
                <a class="remodal-cancel" href="#">NO</a>
                <a class="remodal-confirm" href="#" onclick="joinprogram('.$prog['progid'].', \'leave\', true); return false;">YES</a>';
  }

}

echo json_encode($array);
?>
