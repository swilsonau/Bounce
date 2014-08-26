<?php
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

function confirmaddress() {
  var address = $('#street').val();
  var suburb = $('#suburb').val();
  var state = $('#state').val();
  var postcode = $('#postcode').val();

  $.post(
    "<?php echo $siteurl; ?>/org/checkaddress_ajax.php",
    { address: address, suburb: suburb, state: state, postcode: postcode },
    function(data) {
      alert(data);
    }

  );
}
