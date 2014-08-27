<?php
session_start();

include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

// Stuff
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
    if($email) {
      $selectvar = "emailaddress";
      $where = "WHERE `$selectvar` = '$email'";
    }elseif($mobile) {
      $selectvar = "phonenumber";
      $where = "WHERE `$selectvar` = '$mobile'";
    }
    $findsql = mysqli_query($sql, "SELECT `id`, `firstname`, `lastname`, `emailaddress`, `phonenumber` FROM `users` $where");

    if(!$findsql) {
      $array['error'] = 1;
      $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
    } else {
      if(mysqli_num_rows($findsql) == 0) {
        $array['error'] = 1;
        $array['errortext'] = "Sorry, we can't find a user with that information.";
      } else {
        $userdetails = mysqli_fetch_array($findsql);
        $userid = $userdetails['id'];

        // Check if the user is already assigned to the particular group
        $checkpermssql2 = mysqli_query($sql, "SELECT `user_id`, `organ_id` FROM `organise_assign` WHERE `user_id` = '$userid' AND `organ_id` = '$orgid'");

        if(!$checkpermssql2) {
          $array['error'] = 1;
          $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
        } else {
          if(mysqli_num_rows($checkpermssql2) != 0) {
            $array['error'] = 1;
            $array['errortext'] = "This user has already been assigned to this organisation.";
          } else {
            // So we can send the request to the user now, the user must accept to be added to the organisation
            $currtime = time();
            $expiry = strtotime('+1 week', $currtime);
            $token = bin2hex(openssl_random_pseudo_bytes(32));

            $reqsql = mysqli_query($sql, "INSERT INTO `assign_request`(`user_id`, `org_id`, `perms`, `authkey`, `timerequested`, `expiry`)VALUES('$userid', '$orgid', '$usertype', '$token', '$currtime', '$expiry')");

            if(!$reqsql) {
              $array['error'] = 1;
              $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
            } else {
              $type = stringorgperms($usertype, true);
              $requestlink = $siteurl."org/acceptrequest/".$token;
              $userfirstname = $userdetails['firstname'];

              // Org information
              $orgdetail = fetchorgdetail($orgid);
              $orgname = $orgdetail['name'];

              // All good, send an email
              sendemail($userdetails['emailaddress'], $orgname.": Assign Request", "Hello $userfirstname,<br /><br />The organisation, $orgname has requested your permission to add you as a $type. If you are expecting this, you can push the link below to accept the request. The request will expire in 1 week.<br /><br /><a href=\"$requestlink\">Accept This Request</a><br /><br />Cheers,<br />$sitename");

              $array['error'] = 0;
            }


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
