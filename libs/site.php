<?php
header('Content-Type: application/javascript');
include('../config/site.config.php');
?>
function togglemenu() {
  $('.home-menu').find('li').toggle();
}

function changeorg(value){
  window.location='<?php echo $siteurl; ?>org/oprofile/' + value;
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
  var map = new google.maps.Map(document.getElementById("map-canvas"),
      mapOptions);

      var marker = new google.maps.Marker({
          position: local,
          map: map,
          draggable:true
      });

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
    "<?php echo $siteurl; ?>/org/checkaddress_ajax.php",
    { address: address, suburb: suburb, state: state, postcode: postcode },
    function(data) {
      var parsedata = JSON.parse(data);
      google.maps.event.addDomListener(window, 'load', gmaps_ini(parsedata.lat, parsedata.lng));
      $('.address-loading').slideUp();

      $('.address-message').slideDown().delay(5000).slideUp();
    }

  );
}
