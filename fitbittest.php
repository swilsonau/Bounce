<?php
include('libs/fitbit/fitbitphp.php');

$fitbit = new FitBitPHP('2d9251998e4f4f55bb3ddb144760d939', 'ef11211b30d340118fe3c0b26253cb46');
$fitbit->setOAuthDetails('87a5fbb4938c558b4c57a5c4164a0ac2', '05d9c47abad9943c60d82f7841c6369b');

$xml = $fitbit->addSubscription('', 'activities');

print_r($xml);

?>
