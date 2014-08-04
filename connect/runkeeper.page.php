<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Runkeeper connect page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

// User details
$userdetails = fetchuserdetail($_SESSION['bounceuser']);

// Check if the user already has runkeeper connected
$checkuser = mysqli_query($sql, "SELECT `id`, `app`, `u_id` FROM `connectedapps` WHERE `app` = 'runkeeper' AND `u_id` = '$userdetails[id]' LIMIT 1") or die(mysql_error());

if(mysqli_num_rows($checkuser) != 0) {
  echo 'You\'ve already connected this application';
} else {
  echo '<br /><br />';
  // Instantiate the Choreo, using a previously instantiated Temboo_Session object, eg:
  $session = new Temboo_Session('bounceapp', 'Bounce', 'b3fa425a34b14b1898f8415aa083bedf');

  // Check to if this is the finish
  if(isset($_GET['finish'])) {

    // This is the finish, make sure the sessions exist
    if(!isset($_SESSION['runkeepercallbackid'])) {
      echo 'Something went wrong..... Redirecting.';
      echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/apps" />';
    } else {
      // All good

      $finalizeOAuth = new RunKeeper_OAuth_FinalizeOAuth($session);
      $finalizeOAuthInputs = $finalizeOAuth->newInputs();
      $finalizeOAuthInputs->setCredential('Runkeeper');
      $finalizeOAuthInputs->setCallbackID($_SESSION['runkeepercallbackid'])->setClientSecret("52f0bfdc7dd943f2a6c50aa76cbfcc61");
      $finalizeOAuthResults = $finalizeOAuth->execute($finalizeOAuthInputs)->getResults();

      // Store the details
      $accesstoken = $finalizeOAuthResults->getAccessToken();
      $date = time();

      // Insert into DB
      $insertsql = mysqli_query($sql, "INSERT INTO `connectedapps`(`app`, `u_id`, `AccessToken`, `AccessTokenSecret`, `UserID`, `dateadded`)VALUES('runkeeper', '$userdetails[id]', '$accesstoken', '', '', '$date')");

      if($insertsql) {
        // App is connected

        echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/apps" />';
      } else {
        echo 'There was an issue connecting the app.';
      }
    }

  } else {
    $initializeOAuth = new RunKeeper_OAuth_InitializeOAuth($session);

    // Get an input object for the Choreo
    $initializeOAuthInputs = $initializeOAuth->newInputs();

    // Set credential to use for execution
    $initializeOAuthInputs->setCredential('Runkeeper');

    $initializeOAuthInputs->setForwardingURL($siteurl."connect/runkeeper?finish=true");

    // Execute Choreo and get results
    $initializeOAuthResults = $initializeOAuth->execute($initializeOAuthInputs)->getResults();

    // Save important details into a session
    $_SESSION['runkeepercallbackid'] = $initializeOAuthResults->getCallbackID();

    // Redirect the user to fitbit
    $rkurl = $initializeOAuthResults->getAuthorizationURL();
    echo '<meta http-equiv="refresh" content="0; url='.$rkurl.'" />';
  }
}
?>
