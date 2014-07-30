<div class="page-header">
  <div class="content">
    <h1>Your Account</h1>
  </div>
</div>

<div class="content-wrapper">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2 register">
        <h2>Not a user?</h2>
        <p class="text-subhead">Discover how easy it is to use Bounce. Connect with your new Personal Trainer in an instant.</p>
      </div>

      <div class="pure-u-1 pure-u-md-1-2 login">
        <h2>Already a user</h2>
        <p class="text-subhead">Discover how easy it is to use Bounce. Connect with your new Personal Trainer in an instant.</p>
        <form class="pure-form pure-form-stacked" action="<?php echo $siteurl; ?>account/login" method="post">
          <fieldset>
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

</div>
