<?php
session_start();

include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

if(!checklogin()) {
  header("HTTP/1.0 403 Forbidden");
  die();
}

// Stuff
$userid = $_SESSION['bounceuser'];
$getstart = mysqli_real_escape_string($sql, (isset($_GET['start']) ? $_GET['start'] : null));

$array = array();

// Check if the user has permission for this organisation first (checking the haxxors)
$checkpermssql = mysqli_query($sql, "SELECT *, `programs`.`id` AS `pid`, (select `perms` from `organise_assign` WHERE `organ_id` = `programs`.`orgid` AND `user_id` = '$userid') AS `perms` FROM `programs` LEFT JOIN `program_assign` ON `program_assign`.`progid` = `programs`.`id` WHERE `program_assign`.`userid` = '$userid'");

if(!$checkpermssql) {
  header("HTTP/1.0 403 Forbidden");
} else {
  if(mysqli_num_rows($checkpermssql) == 0) {
    header("HTTP/1.0 404 Not Found");
  } else {
      while($prog = mysqli_fetch_array($checkpermssql)) {
        switch($prog['perms']) {
          default:
            $color = "maroon";
          break;

          case "2":
            $color = "green";
          break;

          case "3":
            $color = "red";
          break;
        }

        if($prog['type'] == '1') {
          // Recurring
          $numofdays = countDays(date('l', strtotime(str_replace('/', '-', $prog['datestart']))), strtotime($getstart), strtotime(str_replace('/', '-', $prog['dateend'])));

          $thisday = date('w', strtotime(str_replace('/', '-', $prog['datestart'])));
          $dayofweek = date('w', strtotime($getstart));
          $result = date('Y-m-d', strtotime(($thisday - $dayofweek).' day', strtotime($getstart)));

          for($i = 0; $i < $numofdays; $i++) {
              $timestart = strtotime($result. " ".$prog['timestart']. " + $i week");
              $timeend = strtotime($result. " ".$prog['timeend']. " + $i week");
              $array[] = array("id" => $prog['pid'], "title" => $prog['programname'], "start" => date('Y-m-d\TH:i', $timestart), "end" => date('Y-m-d\TH:i', $timeend), "color" => $color, "backgroundColor" => $color);
          }
        } else {
          // One off
          $datestart = str_replace('/', '-', $prog['datestart']);
          $timestart = strtotime($datestart." ".$prog['timestart']);
          $timeend = strtotime($datestart." ".$prog['timeend']);

          $array[] = array("id" => $prog['pid'], "title" => "One off: ".$prog['programname'], "start" => date('Y-m-d\TH:i', $timestart), "end" => date('Y-m-d\TH:i', $timeend), "color" => $color, "backgroundColor" => $color);
        }
      }
  }

}

echo json_encode($array);
?>
