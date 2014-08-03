<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Apps Config Page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>Apps</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 settings-nav">
            <div class="pure-menu pure-menu-open">
              <ul>
                  <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-arrow-left"></i> Return to Account</a></li>
              </ul>
          </div>
        </div>

        <div class="pure-u-1 pure-u-md-3-4 settings-content">
            <aside>
              <p><i class="fa fa-info-circle"></i> You can connect a number of external apps to <?php echo $sitename; ?>. <?php echo $sitename; ?> will then aggregrate a number of key statistics from these apps and show them in your Dashbaord. You also have the option to share these statistics with your trainer. Your trainer can then offer suggestions or recommendations based upon these statistics.</p>
            </aside>

            <h2>Connect Apps</h2>
            <p>To connect an app to <?php echo $sitename; ?>, click to Connect button below. Then follow the steps to login to your account.</p>

            <div class="apps-list">
              <ul>
                <li>
                  <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-5">
                      <img src="<?php echo $siteurl; ?>img/apps/fitbit.png" class="app-img" />
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                      <h3>Fitbit</h3>

                      <?php
                      // Check if the user has connected fitbit

                      $checksql = mysqli_query($sql, "SELECT `id`, `app`, `u_id`, `dateadded` FROM `connectedapps` WHERE `app` = 'fitbit' AND `u_id` = '$userdetails[id]'");
                      if($checksql) {
                        if(mysqli_num_rows($checksql) == 0) {
                          echo '<p>Fitbit is a physical tracker and activity monitoring device. Easy keep track of your steps, sleep and activities with the Fitbit tracker. Once connected, '.$sitename.' can access your step counter, sleep statistics and activity information.</p>';
                        } else {
                          $fitbitconnected = true;
                          $fitbitinfo = mysqli_fetch_array($checksql);
                          echo '<p>You\'ve connected Fitbit to '.$sitename.'!</p>';
                          echo '<p>Date Connected: '.pardate($fitbitinfo['dateadded']).'</p>';
                        }
                      } else {
                        echo '<p>There was an issue fetching details about your Fitbit connection.</p>';
                      }
                      ?>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                      <?php
                      if($fitbitconnected) {
                        echo '<strong>To disconnect Fitbit from '.$sitename.', you\'ll need to "Revoke Access" from your Fitbit account page</strong>';
                      } else {
                        echo '<a class="pure-button pure-button-primary" href="'.$siteurl.'connect/fitbit">Connect with Fitbit</a>';
                      }
                      ?>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
        </div>
  </div>
</div>
