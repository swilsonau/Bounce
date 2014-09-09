<?php
include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

// Receive notification from fitbit
$token = mysqli_real_escape_string($sql, (isset($_GET['userid']) ? $_GET['userid'] : null));


// Get the list of users currently using fitbit
$fbf_sql = mysqli_query($sql, "SELECT `u_id`, `AccessToken`, `AccessTokenSecret` FROM `connectedapps` WHERE `app` = 'fitbit' AND `UserID` = '$token'");

if(!$fbf_sql) {
  echo 'Cannot run';
  sendemail("sw730@uowmail.edu.au", "Fitbit Cron MySQL Error", "Error: ".mysql_error());
} else {
  if(mysqli_num_rows($fbf_sql) == 0) {
    echo 'No users using fitbit';
  } else {
    while($fbf = mysqli_fetch_array($fbf_sql)) {
      $accesstoken = $fbf['AccessToken'];
      $accesssecret = $fbf['AccessTokenSecret'];

      echo $accesstoken.' '.$accesssecret;


    }
  }
}

?>
