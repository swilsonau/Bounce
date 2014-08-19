<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Profile Page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>My Profile</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 settings-nav">
            <?php
                echo dashnav($_GET['action'], $userdetails);
              ?>
        </div>

        <div class="pure-u-1 pure-u-md-3-4 settings-content">
            <aside>
              <p><i class="fa fa-info-circle"></i> You can edit your <?php echo $sitename; ?> profile here. This information is used for your account and is used by your trainers to properly identify you. You can also connect your Facebook account to <?php echo $sitename; ?>.</p>
            </aside>

            <form class="pure-form pure-form-aligned">
              <fieldset>
                <legend>Profile Details</legend>

                <div class="pure-control-group">
                    <label for="email">Email Address</label>
                    <input name="email" type="email" placeholder="Email Address" value="<?php echo $userdetails['emailaddress']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="firstname">First Name</label>
                    <input name="firstname" type="text" placeholder="First Name" value="<?php echo $userdetails['firstname']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="lastname">Last Name</label>
                    <input name="lastname" type="text" placeholder="Last Name" value="<?php echo $userdetails['lastname']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="mobile">Mobile Number</label>
                    <input name="mobile" type="text" placeholder="0400000000" value="<?php echo $userdetails['phonenumber']; ?>">
                </div>

                <div class="pure-control-group">
                    <label for="postcode">Postcode</label>
                    <input name="postcode" type="text" placeholder="2500" class="pure-u-1-8" value="">
                </div>

              </fieldset>

              <fieldset>
                <legend>Password</legend>

              </fieldset>

              <fieldset>
                <legend>Facebook Account</legend>

                <div class="pure-controls">
                    <a class="pure-button pure-button-primary" href="<?php echo $siteurl; ?>connect/facebook">Connect Facebook Account</a>
                </div>

              </fieldset>

            </form>
        </div>
  </div>
</div>
