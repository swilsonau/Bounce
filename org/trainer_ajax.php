<?php
session_start();

header('Content-type: application/json');

include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

if(!checklogin()) {
  echo json_encode(array("error" => 1, "errortext" => "You are not logged in."));
  die();
}

/*if($_SERVER["CONTENT_TYPE"] != "application/x-www-form-urlencoded; charset=UTF-8") {
  echo json_encode(array("error" => 1, "errortext" => "Invalid request. Expecting something different. Sorry but we are experiencing an issue. Please try again later."));
  die();
}*/

// Stuff
$orgid = mysqli_real_escape_string($sql, (isset($_POST['orgid']) ? base64url_decode($_POST['orgid']) : null));
$userid = $_SESSION['bounceuser'];

$array = array();

$array[] = "This is a test";

echo json_encode($array);
?>
