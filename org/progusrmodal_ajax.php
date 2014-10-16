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
$checkpermssql = mysqli_query($sql, "SELECT *, `programs`.`id` AS `pid` FROM `programs` LEFT JOIN `organise_assign` ON `organise_assign`.`organ_id` = `programs`.`orgid` WHERE `organise_assign`.`user_id` = '$userid' AND `programs`.`id` = '$progid' AND `organise_assign`.`perms` >= '2'");

if(!$checkpermssql) {
  $array['error'] = 1;
  $array['errortext'] = "Sorry but we are experiencing an issue. Please try again later.";
} else {
  if(mysqli_num_rows($checkpermssql) == 0) {
    $array['error'] = 1;
    $array['errortext'] = "You don't have permission for this program/organisation.";
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
      <link rel="stylesheet" href="'.$siteurl.'libs/jquery-ui/jquery-ui.min.css">
      <link rel="stylesheet" href="'.$siteurl.'libs/jquery-ui/jquery-ui.structure.min.css">
      <link rel="stylesheet" href="'.$siteurl.'libs/jquery-ui/jquery-ui.theme.min.css">
      <script>
        $(function() {
          $( "#trainername" ).autocomplete({
            source: function( request, response ) {
              $.ajax({
                url: "'.$siteurl.'org/trainer_ajax.php",
                dataType: "jsonp",
                data: {
                  q: request.term,
                  orgid: "'.base64url_encode($prog['orgid']).'"
                },
                success: function( data ) {
                  response( data );
                }
              });
            },
            minLength: 1,
            select: function( event, ui ) {alert(ui.item.label)},
            open: function() {
              $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
              $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
          });
        });
      </script>
      <h1>'.$prog['programname'].'</h1>
      <h3>Add Trainer</h3>

      <aside>
        <p>Start typing a trainers name and select them from the list to enrol the user. The trainer must be assigned to your organisation before they can be added.</p>
      </aside>

      <input id="trainername">

      <a class="remodal-cancel" href="#">Close</a>';
  }

}

echo json_encode($array);
?>
