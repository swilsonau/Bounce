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
$action = mysqli_real_escape_string($sql, (isset($_POST['action']) ? $_POST['action'] : null));
$progid = mysqli_real_escape_string($sql, (isset($_POST['progid']) ? $_POST['progid'] : null));
$userid = $_SESSION['bounceuser'];

$array = array();

switch($action) {
  default:
    $array['error'] = 1;
    $array['errortext'] = "Invalid request. Expecting something different. Sorry but we are experiencing an issue. Please try again later.";
  break;

  case "join":
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
            // All good to join the class, process this

            $date = time();

            $inssql = mysqli_query($sql, "INSERT INTO `program_assign`(`userid`, `progid`, `dateassigned`)VALUES('$userid', '$progid', $date)");

            if(!$inssql) {
              $array['error'] = 1;
              $array['errortext'] = "We are having issues processing that request. Please try again later.";
            } else {
              $array['error'] = 0;
            }
          }
        }
      }
    }
  break;

  case "leave":
    // Check if the user has permission for this organisation first (checking the haxxors)
    $checkpermssql = mysqli_query($sql, "SELECT `userid`, `progid` FROM `program_assign` WHERE `userid` = '$userid' AND `progid` = '$progid'");

    if(!$checkpermssql) {
      $array['error'] = 1;
      $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
    } else {
      if(mysqli_num_rows($checkpermssql) == 0) {
        $array['error'] = 1;
        $array['errortext'] = "You are not assigned to this program. If this issue persists, please contact your admin.";
      } else {
        // all good, delete
        $delassql = mysqli_query($sql, "DELETE FROM `program_assign` WHERE `userid` = '$userid' AND `progid` = '$progid' LIMIT 1");

        if(!$delassql) {
          $array['error'] = 1;
          $array['errortext'] = "We are having issues processing that request. Please try again later.";
        } else {
          $array['error'] = 0;
        }
      }

    }
  break;
}

echo json_encode($array);
?>
