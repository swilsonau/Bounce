<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Fitbit connect page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

// User details
$userdetails = fetchuserdetail($_SESSION['bounceuser']);

// Check if the user already has fitbit connected
$checkuser = mysqli_query($sql, "SELECT `id`, `app`, `u_id` FROM `connectedapps` WHERE `app` = 'fitbit' AND `u_id` = '$userdetails[id]' LIMIT 1") or die(mysql_error());

if(mysqli_num_rows($checkuser) != 0) {
  echo 'You\'ve already connected this application';
} else {
  echo '<br /><br />';
  // Instantiate the Choreo, using a previously instantiated Temboo_Session object, eg:
  $session = new Temboo_Session('bounceapp', 'Bounce', 'b3fa425a34b14b1898f8415aa083bedf');

  // Check to if this is the finish
  if(isset($_GET['process'])) {

    // This is the finish, make sure the sessions exist
    if(!isset($_SESSION['facebookcallbackid'])) {
      echo 'Something went wrong..... Redirecting.';
      echo '<meta http-equiv="refresh" content="2; url='.$siteurl.'account/profile" />';
    } else {
      // All good

      $finalizeOAuth = new Facebook_OAuth_FinalizeOAuth($session);
      $finalizeOAuthInputs = $finalizeOAuth->newInputs();
      $finalizeOAuthInputs->setCredential('facebook');
      $finalizeOAuthInputs->setCallbackID($_SESSION['facebookcallbackid']);
      $finalizeOAuthResults = $finalizeOAuth->execute($finalizeOAuthInputs)->getResults();

      // Store the details
      $accesstoken = $finalizeOAuthResults->getAccessToken();
      $date = time();

      // Right, so that worked. Let's also get the user's ID and store that.
      $user = new Facebook_Reading_User($session);
      $userInputs = $user->newInputs();
      $userInputs->setAccessToken($accesstoken);
      $userResults = $user->execute($userInputs)->getResponse();

      $fbid = $userResults['id'];

      // Update the DB
      $insertsql = mysqli_query($sql, "UPDATE `users` SET `fb_secret` = '$fbid', `fb_secret` = '$accesstoken' WHERE `id` = '$userdetails[id]'");

      if($insertsql) {
        // App is connected

        sendemail($userdetails['emailaddress'], "You've connected Facebook", "Hello!<br />Thanks for using $sitename.<br /><br />Just letting you know, either you (or someone else) has connected Facebook to $sitename. If this wasn't you, we suggest changing your password and revoking access.<br /><br />Cheers,<br />$sitename");

        echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/profile" />';
      } else {
        echo 'There was an issue connecting the app.';
      }
    }

  } else {
    $initializeOAuth = new Facebook_OAuth_InitializeOAuth($session);

    $initializeOAuthInputs = $initializeOAuth->newInputs();
    $initializeOAuthInputs->setCredential('facebook');
    $initializeOAuthInputs->setScope("email,publish_actions");
    $initializeOAuthInputs->setForwardingURL($siteurl."connect/facebook/finish");
    $initializeOAuthResults = $initializeOAuth->execute($initializeOAuthInputs)->getResults();

    // Save important details into a session
    $_SESSION['facebookcallbackid'] = $initializeOAuthResults->getCallbackID();

    // Redirect the user to fitbit
    $fitbiturl = $initializeOAuthResults->getAuthorizationURL();
    echo '<meta http-equiv="refresh" content="0; url='.$fitbiturl.'" />';
  }
}
?>
