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
      <h1>'.$prog['programname'].'</h1>
      <script type="text/javascript">

      </script>

      <div id="map-canvas" style="width: 100%; height: 300px;"></div>
      <br />
      <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-2">
            <table width="100%">
              <tr>
                <td width="30%">Day:</td>
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
                <td width="30%">End Time:</td>
                <td>'.$prog['timeend'].'</td>
              </tr>
              <tr>
                <td width="30%">Program Ends:</td>
                <td>'.(empty($prog['dateend']) ? "Does not end" : $prog['dateend']).'</td>
              </tr>
            </table>
          </div>

          <div class="pure-u-1 pure-u-md-1-2">
            <h3 style="margin-top: 0; padding-top: 0;">Location</h3>
            '.$prog['street'].'<br />'.$prog['suburb'].' '.$prog['state'].' '.$prog['postcode'].'<br /><br />
            <a class="pure-button" href="https://www.google.com/maps/dir/Current+Location/'.str_replace(" ", "+", "$prog[street] $prog[suburb] $prog[postcode] $prog[postcode]").'" target="_blank">Get Directions</a>
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
