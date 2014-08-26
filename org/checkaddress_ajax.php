<?php
include('../config/mysql.config.php');
include('../config/site.config.php');
include('../config/functions.config.php');

// Temboo API
include('../libs/temboo/temboo.php');

// Stuff
$address = $_POST['address'];
$suburb = $_POST['suburb'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];

$session = new Temboo_Session('bounceapp', 'Bounce', 'b3fa425a34b14b1898f8415aa083bedf');

$geocodeByAddress = new Google_Geocoding_GeocodeByAddress($session);
$geocodeByAddressInputs = $geocodeByAddress->newInputs();
$geocodeByAddressInputs->setAddress("$address $suburb $state $postcode");
$geocodeByAddressResults = $geocodeByAddress->execute($geocodeByAddressInputs)->getResults();
//echo $geocodeByAddressResults->getResponse();
$geoxml = new SimpleXMLElement($geocodeByAddressResults->getResponse());

$geo = $geoxml->xpath('/GeocodeResponse/result/geometry');

print_r($geo[0]);

?>
