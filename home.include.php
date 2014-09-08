<div class="splash-container">
    <div class="splash pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
          <h1 class="splash-head">New Users</h1>
          <p class="splash-subhead">
              Connect with your personal trainer better than ever before.
          </p>
          <p>
              <a href="<?php echo $siteurl; ?>signup/part1" class="pure-button pure-button-primary">Sign Up</a>
          </p>
          <p>
            <small>* Note, we are only trailing Bounce in Wollongong, NSW.</small>
          </p>
      </div>
      <div class="pure-u-1 pure-u-md-1-2">
        <h1 class="splash-head">Existing</h1>
        <p class="splash-subhead">
            Login to your account to connect with your trainer now.
        </p>
          <form class="pure-form pure-form-stacked splash-form" action="<?php echo $siteurl; ?>account/login" method="post">
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
    </div>
    <div style="clear: both;"></div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">SOMETHING SOMETHING SOMETHING.</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Works Anywhere
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Heaps of Features
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Plays Nice
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon pure-g">
        <div class="gmap-view">
          <div class="home-gmap">
            <script type="text/javascript">
              window.onload = function () {
                google.maps.event.addDomListener(window, 'load', gmaps_ini(-34.5792123, 150.8674041));
              }
            </script>

            <div id="map-canvas" class="home-map"></div>
          </div>

          <div class="home-text">
                <h2 class="content-head content-head-ribbon">There's someone near you...</h2>
            </div>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">


                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">

                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">

                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>
