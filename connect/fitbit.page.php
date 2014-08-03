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
  if(isset($_GET['finish'])) {

    // This is the finish, make sure the sessions exist
    if(!isset($_SESSION['fitbitcallbackid']) || !isset($_SESSION['fitbitoauthtokensecret'])) {
      echo 'Something went wrong..... Redirecting.';
      echo '<meta http-equiv="refresh" content="2; url='.$siteurl.'account/apps" />';
    } else {
      // All good

      $finalizeOAuth = new Fitbit_OAuth_FinalizeOAuth($session);
      $finalizeOAuthInputs = $finalizeOAuth->newInputs();
      $finalizeOAuthInputs->setCredential('Fitbit');
      $finalizeOAuthInputs->setCallbackID($_SESSION['fitbitcallbackid'])->setOAuthTokenSecret($_SESSION['fitbitoauthtokensecret']);
      $finalizeOAuthResults = $finalizeOAuth->execute($finalizeOAuthInputs)->getResults();

      // Store the details
      $accesstoken = $finalizeOAuthResults->getAccessToken();
      $accesssecret = $finalizeOAuthResults->getAccessTokenSecret();
      $userid = $finalizeOAuthResults->getUserID();
      $date = time();

      // Insert into DB
      $insertsql = mysqli_query($sql, "INSERT INTO `connectedapps`(`app`, `u_id`, `AccessToken`, `AccessTokenSecret`, `UserID`, `dateadded`)VALUES('fitbit', '$userdetails[id]', '$accesstoken', '$accesssecret', '$userid', '$date')");

      if($insertsql) {
        // App is connected

        sendemail($userdetails['emailaddress'], "You've connected Fitbit", "Hello!<br />Thanks for using $sitename.<br /><br />Just letting you know, either you (or someone else) has connected Fitbit to $sitename. If this wasn't you, we suggest changing your password and revoking access.<br /><br />Cheers,<br />$sitename");

        echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/apps" />';
      } else {
        echo 'There was an issue connecting the app.';
      }
    }

  } else {
    $initializeOAuth = new Fitbit_OAuth_InitializeOAuth($session);

    // Get an input object for the Choreo
    $initializeOAuthInputs = $initializeOAuth->newInputs();

    // Set credential to use for execution
    $initializeOAuthInputs->setCredential('Fitbit');

    $initializeOAuthInputs->setForwardingURL($siteurl."connect/fitbit?finish=true");

    // Execute Choreo and get results
    $initializeOAuthResults = $initializeOAuth->execute($initializeOAuthInputs)->getResults();

    // Save important details into a session
    $_SESSION['fitbitcallbackid'] = $initializeOAuthResults->getCallbackID();
    $_SESSION['fitbitoauthtokensecret'] = $initializeOAuthResults->getOAuthTokenSecret();

    // Redirect the user to fitbit
    $fitbiturl = $initializeOAuthResults->getAuthorizationURL();
    echo '<meta http-equiv="refresh" content="0; url='.$fitbiturl.'" />';
  }
}
?>
