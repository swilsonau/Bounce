<?php
include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

// Receive notification from fitbit
$notificationData = file_get_contents($_FILES['updates']['tmp_name']);

$jsondata = json_decode($notificationData, true);

$token = $jsondata[0]['ownerId'];

// Get the list
$fbnot_sql = mysqli_query($sql, "SELECT `UserID`, `status` FROM `fitbit_notif` WHERE `UserID` = '$token' AND `status` = '0'");

if(!$fbnot_sql) {
  echo 'Cannot run';
  mail("sw730@uowmail.edu.au", "$token Fitbit Cron MySQL Error", "Error: ".mysql_error());
} else {
  if(mysqli_num_rows($fbnot_sql) != 0) {
    echo 'Already exists. We know! Thanks.';
  } else {

    // Check that the user exists.

    // Get the list of users currently using fitbit
    $fbf_sql = mysqli_query($sql, "SELECT `u_id`, `AccessToken`, `AccessTokenSecret` FROM `connectedapps` WHERE `app` = 'fitbit' AND `UserID` = '$token'");

    if(!$fbf_sql) {
      echo 'Cannot run';
      mail("sw730@uowmail.edu.au", "$token Fitbit Cron MySQL Error", "Error: ".mysql_error());
    } else {
      if(mysqli_num_rows($fbf_sql) == 0) {
        echo 'No user using fitbit';
      } else {
        // put it into the db
        $date = time();

        $insnotif_sql = mysqli_query($sql, "INSERT INTO `fitbit_notif`(`UserID`, `date`)VALUES('$token', '$date')");

        if(!$insnotif_sql) {
          echo 'Nope';
        }
      }
    }
  }
}
header('HTTP/1.0 204 No Content');
?>
