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
$checkpermssql = mysqli_query($sql, "SELECT *, `programs`.`id` AS `pid` FROM `programs` LEFT JOIN `program_assign` ON `program_assign`.`progid` = `programs`.`id` WHERE `program_assign`.`userid` = '$userid' AND `program_assign`.`progid` = '$progid'");

if(!$checkpermssql) {
  $array['error'] = 1;
  $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
} else {
  if(mysqli_num_rows($checkpermssql) == 0) {
    $array['error'] = 1;
    $array['errortext'] = "You are not assigned to this program. If this issue persists, please contact your admin.";
  } else {
    $prog = mysqli_fetch_array($checkpermssql);

    $progid = $prog['pid'];

    // Get trainers
    $ltrainersql = mysqli_query($sql, "SELECT `program_assign`.`userid`, `users`.`firstname`, `users`.`lastname`, `users`.`emailaddress` FROM `program_assign` LEFT JOIN `users` ON `program_assign`.`userid` = `users`.`id` WHERE `program_assign`.`progid` = '$progid' AND `program_assign`.`istrainer` = '1'");

    if($ltrainersql) {
      if(mysqli_num_rows($ltrainersql) == 0) {
        $trainerhtml = 'Sorry! No Trainer Assigned.';
      }elseif(mysqli_num_rows($ltrainersql) == 1) {
        $trainer = mysqli_fetch_array($ltrainersql);
        $tuserid = base64url_encode($trainer['userid']);

        $trainerhtml = '<img src="'.get_gravatar($trainer['emailaddress'], 85).'" />';
        $trainerhtml .= '<br />'.$trainer['firstname'].' '.$trainer['lastname'].'<br />';
        $trainerhtml .= '<br /><a class="pure-button" href="'.$siteurl.'messaging/new/'.$tuserid.'"><i class="fa fa-envelope"></i> Contact Trainer</a>';
      } else {
        $trainerhtml = 'Multiple Trainers Assigned.';
      }
    } else {
      $trainerhtml = 'Sorry, we can\'t obtain trainer information at the moment.';
    }

      $array['error'] = 0;
      $array['html'] = '
      <link rel="stylesheet" href="'.$siteurl.'libs/font-awesome/css/font-awesome.min.css">
      <h1>'.$prog['programname'].'</h1>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
          <div id="map-canvas" style="width: 100%; height: 300px;"></div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
          <h3>Your Trainer</h3>
          '.$trainerhtml.'
        </div>
      </div>
      <br />
      <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-2">
            <table width="100%" class="pure-table pure-table-bordered">
              <tr>
                <td width="40%">Day:</td>
                <td>';
                if($prog['type'] == 1) {
                  $array['html'] .= "Every ".date('l', strtotime(str_replace('/', '-', $prog['datestart'])));
                } else {
                  $array['html'] .= date('l d/m/y', strtotime(str_replace('/', '-', $prog['datestart'])));
                }
                $array['html'] .= '</td>
              </tr>
              <tr>
                <td width="30%">Start Time:</td>
                <td>'.$prog['timestart'].'</td>
              </tr>
              <tr>
                <td width="30%">Duration:</td>
                <td>'.dateDiff($prog['timestart'], $prog['timeend']).'</td>
              </tr>
              <tr>
                <td width="30%">Program Ends:</td>
                <td>'.(empty($prog['dateend']) ? "Does not end" : $prog['dateend']).'</td>
              </tr>
            </table>
          </div>

          <div class="pure-u-1 pure-u-md-1-2">
            <aside class="success" style="margin: 10px;">
              <p><i class="fa fa-location-arrow"></i> '.$prog['street'].', '.$prog['suburb'].' '.$prog['state'].' '.$prog['postcode'].'<br />
              <a class="pure-button" href="https://www.google.com/maps/dir/Current+Location/'.str_replace(" ", "+", "$prog[street] $prog[suburb] $prog[postcode] $prog[postcode]").'" target="_blank"><i class="fa fa-car"></i> Get Directions</a></p>
              </aside>
          </div>
      </div>
      <br />
      <a class="remodal-cancel" href="#">Close</a>';
      $array['long_lat'] = $prog['lat'];
      $array['long_lng'] = $prog['lng'];
  }

}

echo json_encode($array);
?>
