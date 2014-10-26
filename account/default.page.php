<?php
if(checklogin()) {
$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<script>
$.get("<?php echo $siteurl; ?>account/calendar_ajax.php?next=1", function( data ) {
  rsp = JSON.parse(data);

  $( ".remindertile" ).html(
    "<h2>Your next session</h2><p>" + rsp[0].title + "<br />Starts: " + rsp[0].hstart + "<br />At: " + rsp[0].location + "</p>"
  );
});
</script>

<div class="page-header">
  <div class="content">
    <h1>Hi <?php echo $userdetails['firstname']; ?>!</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 account-nav">
        <?php
          if(isset($_GET['action'])) {
            echo dashnav($_GET['action'], $userdetails);
          } else {
            echo dashnav('', $userdetails);
          }
        ?>
      </div>
      <div class="pure-u-1 pure-u-md-3-4 tile-grid">
        <div class="pure-g tile-row">
          <div class="pure-u-1 pure-u-md-2-5 tile remindertile">

          </div>

          <div class="pure-u-1 pure-u-md-4-24 tile">
            2
          </div>

          <div class="pure-u-1 pure-u-md-4-24 tile">
            3
          </div>

          <div class="pure-u-1 pure-u-md-4-24 tile">
            4
          </div>
        </div>

        <div class="pure-g tile-row">
          <div class="pure-u-1 pure-u-md-4-24 tile">
            5
          </div>

          <div class="pure-u-1 pure-u-md-4-24 tile">
            6
          </div>

          <div class="pure-u-1 pure-u-md-2-5 tile">
            7
          </div>

          <div class="pure-u-1 pure-u-md-4-24 tile">
            8
          </div>
        </div>
      </div>
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
              <br />
              <button type="submit" class="pure-button pure-button-primary">Sign in</button>
          </fieldset>
        </form>
      </div>

      <div class="pure-u-1 pure-u-md-1-2 register">
        <h2>Not a user?</h2>
        <p class="text-subhead">Discover how easy it is to use Bounce. Connect with your new Personal Trainer in an instant.</p>

        <p>Quickly enrol into Programs</p>
        <p>Communicate with your trainer in an instant</p>
        <p>Check and share your progress</p>
        <br />
        <a href="<?php echo $siteurl; ?>signup/part1" class="pure-button pure-button-primary">Sign Up</a>
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
