<?php
session_start();

include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

// Stuff
$progid = mysqli_real_escape_string($sql, (isset($_POST['progid']) ? $_POST['progid'] : null));
$userid = $_SESSION['bounceuser'];

$array = array();

// Check if the user has permission for this organisation first (checking the haxxors)
$checkpermssql = mysqli_query($sql, "SELECT `userid`, `progid` FROM `program_assign` WHERE `userid` = '$userid' AND `progid` = '$progid'");

if(!$checkpermssql) {
  $array['error'] = 1;
  $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
} else {
  if(mysqli_num_rows($checkpermssql) != 0) {
    $array['error'] = 1;
    $array['errortext'] = "You are already assigned to this program. You cannot join a program twice.";
  } else {
    // The user can be assigned. Now we need to check if the program is joinable and not full
    $findpgsql = mysqli_query($sql, "SELECT *, `programs`.`id` AS `pid`, (select count(*) from `program_assign` WHERE `progid` = `programs`.`id`) AS count FROM `programs` WHERE `id` = '$progid' LIMIT 1");

    if(!$findpgsql) {
      $array['error'] = 1;
      $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
    } else {
      $prog = mysqli_fetch_array($findpgsql);

      if($prog['count'] == $prog['maxpax'] || $prog['openclass'] == 2) {
        $array['error'] = 1;
        $array['errortext'] = "You cannot choose this class. Please choose a new one.";
      } else {

      }
    }
  }
}

/*$lat = (string) $geo[0]->location->lat;
$lng = (string) $geo[0]->location->lng;

$array = array('lat' => $lat, 'lng' => $lng);
*/

echo json_encode($array);
?>
