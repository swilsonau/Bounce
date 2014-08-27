<?php
session_start();

include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

// Stuff
$firstname = mysqli_real_escape_string($sql, (isset($_POST['firstname']) ? $_POST['firstname'] : null));
$email = mysqli_real_escape_string($sql, (isset($_POST['email']) ? $_POST['email'] : null));
$mobile = mysqli_real_escape_string($sql, (isset($_POST['mobile']) ? $_POST['mobile'] : null));
$orgid = mysqli_real_escape_string($sql, (isset($_POST['orgid']) ? $_POST['orgid'] : null));
$usertype = mysqli_real_escape_string($sql, (isset($_POST['usertype']) ? $_POST['usertype'] : null));
$userid = $_SESSION['bounceuser'];

$array = array();

// Check if the user has permission for this organisation first (checking the haxxors)
$checkpermssql = mysqli_query($sql, "SELECT `user_id`, `organ_id`, `perms` FROM `organise_assign` WHERE `user_id` = '$userid' AND `organ_id` = '$orgid' AND `perms` > 1");

if(!$checkpermssql) {
  $array['error'] = 1;
  $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
} else {
  if(mysqli_num_rows($checkpermssql) == 0) {
    $array['error'] = 1;
    $array['errortext'] = "You don't have permission.";
  } else {
    // Now search for the user
    $assnpermsql = mysqli_fetch_array($checkpermssql);

    if($usertype >= $assnpermsql['perms']) {
      $array['error'] = 1;
      $array['errortext'] = "Sorry but your account type doesn't allow you to make this type of account.";
    } else {
      // Check if the email or mobile exists
      $findsql = mysqli_query($sql, "SELECT `id`, `firstname`, `lastname`, `emailaddress`, `phonenumber` FROM `users` WHERE `emailaddress` = '$email' OR `phonenumber` = '$mobile'");

      if(!$findsql) {
        $array['error'] = 1;
        $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
      } else {
        if(mysqli_num_rows($findsql) != 0) {
          $array['error'] = 1;
          $array['errortext'] = "Sorry, a user already exists with that information.";
        } else {
          $currtime = time();
          $expiry = strtotime('+1 week', $currtime);
          $token = bin2hex(openssl_random_pseudo_bytes(32));

          $reqsql = mysqli_query($sql, "INSERT INTO `pending_user`(`firstname`, `emailaddress`, `phonenumber`, `orgid`, `token`, `perm`, `daterequest`, `expiry`)VALUES('$firstname', '$email', '$mobile', '$orgid', '$token', '$usertype', '$currtime', '$expiry')");

          if(!$reqsql) {
            $array['error'] = 1;
            $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
          } else {
            $type = stringorgperms($usertype, true);
            $requestlink = $siteurl."signup/forced/".$token;

            // Org information
            $orgdetail = fetchorgdetail($orgid);
            $orgname = $orgdetail['name'];

            // All good, send an email
            sendemail($email, $orgname.": Account Created", "Hello $firstname,<br /><br />A member of $orgname has created an account on your behalf. If you are expecting this, you can push the link below to continue the registration. The request will expire in 1 week.<br /><br /><a href=\"$requestlink\">Continue My Registration</a><br /><br />Cheers,<br />$sitename");

            $array['error'] = 0;
          }

        }
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
