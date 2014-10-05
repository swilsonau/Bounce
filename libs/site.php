<?php
header('Content-Type: application/javascript');
include('../config/site.config.php');
?>
$(document).ready(function() {
  $('.tooltip').tooltipster({
    trigger: 'click'
  });

  $(".isdatepicker").datepicker({ dateFormat: "dd/mm/yy", minDate: 0 });
  $(".startdatepicker").datepicker({ dateFormat: "dd/mm/yy", minDate: 0, altField: ".recurringday", altFormat: "DD"});

  $(".isdatepicker").attr( 'readOnly' , 'true' );
  $(".readonly").attr( 'readOnly' , 'true' );
});

$(window).keypress(function() {
		$('.tooltip').tooltipster('hide');
	});

function togglemenu() {
  $('.home-menu').find('li').toggle();
}

function changeorg(value, site){
  window.location='<?php echo $siteurl; ?>org/' + site +'/' + value;
}

function changedistance(value, site){
  window.location='<?php echo $siteurl; ?>account/' + site +'/' + value;
}

function showpasswordfields() {
  $('.newpassword-group').slideDown();
  $('.confirmpassword-group').slideDown();
}

function hidepasswordfields() {
    var currentpassword = $('#currentpassword').val();

    if(currentpassword == "") {
        $('.newpassword-group').slideUp();
        $('.confirmpassword-group').slideUp();
    }
}

function gmaps_ini(lat, lng) {
  var local = new google.maps.LatLng(lat, lng);

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
          draggable:true
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

function confirmaddress() {
  var address = $('#street').val();
  var suburb = $('#suburb').val();
  var state = $('#state').val();
  var postcode = $('#postcode').val();

  $('.address-loading').slideDown();

  $.post(
    "<?php echo $siteurl; ?>org/checkaddress_ajax.php",
    { address: address, suburb: suburb, state: state, postcode: postcode },
    function(data) {
      var parsedata = JSON.parse(data);
      google.maps.event.addDomListener(window, 'load', gmaps_ini(parsedata.lat, parsedata.lng));
      $('.address-loading').slideUp();

      $('.address-message').slideDown().delay(5000).slideUp();
    }

  );
}

function searchforuser() {
  var email = $('#emailaddress').val();
  var mobile = $('#mobilenumber').val();
  var orgid = $('#orgid').val();
  var usertype = $('#usertype').val();

  if(email && mobile) {
    alert('Please input only an email address OR mobile number.');
  } else {

    $('.existinguser-loading').slideDown();

    $.post(
      "<?php echo $siteurl; ?>org/checkuser_ajax.php",
      { orgid: orgid, email: email, mobile: mobile, usertype: usertype },
      function(data) {
        var parsedata = JSON.parse(data);

        if(parsedata.error == 1) {
          alert(parsedata.errortext);
          $('.existinguser-loading').slideUp();
        } else {
          $('.existinguser-loading').slideUp();
          $('.existing-confirmed').slideDown().delay(5000).slideUp();
        }
      }

    );
  }
}

function createnewuser() {
  var firstname = $('#new-firstname').val();
  var email = $('#new-emailaddress').val();
  var mobile = $('#new-mobilenumber').val();
  var orgid = $('#orgid').val();
  var usertype = $('#new-usertype').val();

    $('.newuser-loading').slideDown();

    $.post(
      "<?php echo $siteurl; ?>org/newuser_ajax.php",
      { orgid: orgid, firstname: firstname, email: email, mobile: mobile, usertype: usertype },
      function(data) {
        var parsedata = JSON.parse(data);

        if(parsedata.error == 1) {
          alert(parsedata.errortext);
          $('.newuser-loading').slideUp();
        } else {
          $('.newuser-loading').slideUp();
          $('.newuser-confirmed').slideDown().delay(5000).slideUp();
        }
      }

    );
}

function showprogramtype() {
  var type = $('#type').val();

  switch(type) {
    case "0":
      $('.recurringprogram').slideUp();
      $('.oneoffprogram').slideUp();
    break;

    case "1":
      $('.recurringprogram').slideDown();
      $('.oneoffprogram').slideUp();
    break;

    case "2":
      $('.recurringprogram').slideUp();
      $('.oneoffprogram').slideDown();
    break;
  }
}

function sidemenu(action) {
  switch(action) {
    case "show":
      $('.sidemenu').slideDown();
      $('.sidemenushow').slideUp();
      $('.sidemenuhide').slideDown();
    break;

    case "hide":
      $('.sidemenu').slideUp();
      $('.sidemenuhide').slideUp();
      $('.sidemenushow').slideDown();
    break;
  }
}

function showlocaltype(value) {
  switch(value) {
    case "0":
      $('.addressgroup').slideDown();
    break;

    case "1":
      $('.addressgroup').slideUp();
    break;
  }
}

function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']").offset().top;
    $('html,body').animate({scrollTop: aTag - 65},'slow');
}

function joinprogram(progid, action){
  var buttontext = $('.' + progid + '-joinbutton').html();

  $('.' + progid + '-joinbutton').html('<i class="fa fa-refresh fa-spin"></i> Loading');

  $.post(
    "<?php echo $siteurl; ?>account/enrol_ajax.php",
    { progid: progid, action: action },
    function(data) {
      var parsedata = JSON.parse(data);

      if(parsedata.error == 1) {
        alert(parsedata.errortext);
        $('.' + progid + '-joinbutton').html(buttontext);
      } else {
        if(action == 'leave') {
          $('.' + progid + '-joinbutton').html('<i class="fa fa-check"></i> Left');
        } else {
          $('.' + progid + '-joinbutton').html('<i class="fa fa-check"></i> Joined');
        }
      }
    }

  );
}
