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
        <h2 class="content-head is-center">Personal Training - reinvented.</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    <?php echo $sitename; ?> allows you to instantly enrol into the program that suits you. Communicate with your Personal Trainer easily and quickly.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Works Anywhere
                </h3>
                <p>
                    No downloading apps or constantly scrolling, we've worked hard to make sure <?php echo $sitename; ?> just works on mobile, tablet and computer.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Heaps of Features
                </h3>
                <p>
                    We've made <?php echo $sitename; ?> super easy to use and packed it full of features. From a simple planner to your diet schedule, we have you covered.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-bar-chart"></i>
                    Tracks Your Results
                </h3>
                <p>
                    Don't get left behind. <?php echo $sitename; ?> makes it super easy to track your results and get tips from your trainer.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon pure-g">
        <div class="gmap-view">
          <div class="home-gmap">
            <script type="text/javascript">
              function gmaps_ini_home(lat, lng, drag) {
                drag = (typeof drag === "undefined") ? true : drag;
                var local = new google.maps.LatLng('-37', '150');

                var mapOptions = {
                  center: local,
                  zoom: 16
                };

                var current = {
                  url: '<?php echo $siteurl; ?>img/currentlocation.png',
                  // This marker is 20 pixels wide by 32 pixels tall.
                  size: new google.maps.Size(32, 32),
                  // The origin for this image is 0,0.
                  origin: new google.maps.Point(0,0),
                  // The anchor for this image is the base of the flagpole at 0,32.
                  anchor: new google.maps.Point(17, 32)
                };

                var image = {
                  url: '<?php echo $siteurl; ?>img/mylocation.png',
                  // This marker is 20 pixels wide by 32 pixels tall.
                  size: new google.maps.Size(32, 32),
                  // The origin for this image is 0,0.
                  origin: new google.maps.Point(0,0),
                  // The anchor for this image is the base of the flagpole at 0,32.
                  anchor: new google.maps.Point(17, 32)
                };

                var map = new google.maps.Map(document.getElementById("map-canvas"),
                    mapOptions);

                    var marker = new google.maps.Marker({
                        position: local,
                        map: map,
                        icon: image,
                        draggable:drag
                    });

                    if(!!navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(function(position) {

                          var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

                          var infowindow = new google.maps.Marker({
                              map: map,
                              position: geolocate,
                              icon: current,
                              title: 'Your location'
                          });
                    });
                  }

                    google.maps.event.addListener(marker, 'dragend', function() {
                      // When the user moves the marker, enable the save location button
                      $('.bounce-savelocal').removeClass('pure-button-disabled');

                      // Store these vars in hidden inputs....
                      var change = marker.getPosition();

                      $('#latchng').val(change.lat());
                      $('#lngchng').val(change.lng());
                    });
              }



              window.onload = function () {
                google.maps.event.addDomListener(window, 'load', gmaps_ini_home());
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
