<?php
if(checklogin()) {
$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>Welcome <?php echo $userdetails['firstname']; ?>!</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5">
        <div class="pure-menu pure-menu-open">
          <ul>
              <li class="pure-menu-selected"><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-home"></i> Account Home</a></li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-calendar"></i> My Planner</a></li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-bar-chart-o"></i> My Progress</a></li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-child"></i> My Trainers</a></li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-rss"></i> My Programs</a></li>
              <li class="pure-menu-heading">Find Trainers</li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-search"></i> Find Trainers</a></li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-search"></i> Find Programs</a></li>
              <li class="pure-menu-heading">Settings</li>
              <li><a href="<?php echo $siteurl; ?>account/"><i class="fa fa-user"></i> My Profile</a></li>
              <li><a href="<?php echo $siteurl; ?>account/apps"><i class="fa fa-exchange"></i> Connected Apps</a></li>
              <li><a href="<?php echo $siteurl; ?>account/logout"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-1-5">2</div>
      <div class="pure-u-1 pure-u-md-1-5">3</div>
      <div class="pure-u-1 pure-u-md-1-5">4</div>
      <div class="pure-u-1 pure-u-md-1-5">5</div>
  </div>
</div>

<?php
} else {
?>

<div class="page-header">
  <div class="content">
    <h1>Your Account</h1>
  </div>
</div>

<div class="content-wrapper">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2 login">
        <h2>Already a user</h2>
        <p class="text-subhead">Login to your account to connect with your trainer or check your stats.</p>
        <?php
          if(isset($_GET['incorrect'])) {
            echo "<p><strong>Sorry, the details you entered were incorrect.</strong></p>";
          }
        ?>
        <form class="pure-form pure-form-stacked" action="<?php echo $siteurl; ?>account/login" method="post">
          <fieldset>
              <label for="email">Email</label>
              <input name="email" type="email" placeholder="Email" required>

              <label for="password">Password</label>
              <input name="password" type="password" placeholder="Password" required>

              <label for="remember" class="pure-checkbox">
                  <input id="remember" type="checkbox" disabled="disabled"> Remember me
              </label>

              <button type="submit" class="pure-button pure-button-primary">Sign in</button>
          </fieldset>
        </form>
      </div>

      <div class="pure-u-1 pure-u-md-1-2 register">
        <h2>Not a user?</h2>
        <p class="text-subhead">Discover how easy it is to use Bounce. Connect with your new Personal Trainer in an instant.</p>
        <form class="pure-form pure-form-stacked" action="<?php echo $siteurl; ?>account/register" method="post">
          <fieldset>
              <label for="firstname">First Name</label>
              <input id="firstname" type="text" placeholder="First Name" required>

              <label for="lastname">Last Name</label>
              <input id="lastname" type="text" placeholder="Last Name" required>

              <label for="email">Email</label>
              <input id="email" type="email" placeholder="Email" required>

              <label for="password">Password</label>
              <input id="password" type="password" placeholder="Password" required>

              <label for="remember" class="pure-checkbox">
                  <input id="remember" type="checkbox" disabled="disabled"> Remember me
              </label>

              <button type="submit" class="pure-button pure-button-primary">Sign in</button>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-1">
        <p style="text-align: center; "><a href="<?php echo $siteurl; ?>account/forgot">I've Forgotten My Password</a></p>
        <p style="text-align: center; "><i class="fa fa-lock"></i> This page has been secured. Your IP Address (<?php echo $_SERVER["REMOTE_ADDR"]; ?>) has been recorded.</p>
      </div>
    </div>
</div>
<?php
}
?>
