<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Process Login Page

include('config/site.config.php');
include('config/mysql.config.php');

if(isset($_SESSION['bouncesession'])) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

// Get inputs
$emailaddress = mysqli_real_escape_string($sql, $_POST['email']);
$password = mysqli_real_escape_string($sql, $_POST['password']);

// Other things needed
$ipaddress = $_SERVER["REMOTE_ADDR"];
$useragent = $_SERVER['HTTP_USER_AGENT'];

// Check the database
$checkuser = mysqli_query($sql, "SELECT `id`, `emailaddress`, `password` FROM `users` WHERE `emailaddress` = '$emailaddress' AND `status` = '1'") or die(mysql_error());

if(mysqli_num_rows($checkuser) != 0) {
  $userdetails = mysqli_fetch_array($checkuser);

  if(password_verify($password, $userdetails['password'])) {
    // Password is correct

    $_SESSION['bouncesession'] = true;
    $_SESSION['bounceuser'] = $userdetails['id'];

    echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  } else {
    echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?incorrect=true" />';
  }
} else {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?incorrect=true" />';
}

?>
