<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Signup process Part 1

// Part 1 focuses on the actual creation of the user, grabbing data such as email address, password etc

?>

<div class="signup-header">
  <h1>Hey! Welcome to <?php echo $sitename; ?>.</h1>
  <p>You're on your way to communicating with your Personal Trainer. Before we start, we just need to get some information from you. Don't worry, it won't take long.</p>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">

      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <form class="pure-form pure-form-aligned">
          <fieldset>
              <legend>Account Details</legend>

              <div class="pure-control-group">
                  <label for="email">Email Address</label>
                  <input id="email" type="email" placeholder="Email Address">
              </div>

              <div class="pure-control-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" placeholder="Password">
              </div>

              <legend>Your Information</legend>

              <div class="pure-control-group">
                  <label for="firstname">First Name</label>
                  <input id="firstname" type="text" placeholder="First Name">
              </div>

              <div class="pure-control-group">
                  <label for="lastname">Last Name</label>
                  <input id="lastname" type="text" placeholder="Last Name">
              </div>

              <div class="pure-control-group">
                  <label for="mobile">Mobile Number</label>
                  <input id="mobile" type="text" placeholder="0400000000">
              </div>

              <div class="pure-control-group">
                  <label for="postcode">Postcode</label>
                  <input id="postcode" type="text" placeholder="2500" class="pure-u-1-8">
              </div>

              <div class="pure-controls">
                  <label for="cb" class="pure-checkbox">
                      <input id="cb" type="checkbox"> I've read the <a href="#">terms and conditions</a>.
                  </label>

                  <button type="submit" class="pure-button pure-button-primary">Submit</button>
              </div>
          </fieldset>
      </form>
      </div>

  </div>
</div>
