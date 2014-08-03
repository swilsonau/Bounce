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
                      <p>Something about fitbit</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                      <a class="pure-button pure-button-primary" href="<?php echo $siteurl; ?>connect/fitbit">Connect with Fitbit</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
        </div>
  </div>
</div>
