<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Site Functions File

function fetchuserdetail($id) {
  global $sql;

  $fetch = mysqli_query($sql, "SELECT * FROM `users` WHERE `id` = '$id'") or die();

  return mysqli_fetch_array($fetch);
}

function checklogin() {
  if(isset($_SESSION['bouncesession'])) {
    return true;
  } else {
    return false;
  }
}

function pardate($date) {
  return date('d/m/y h:i A', $date);
}

function sendemail($to, $subject, $body) {
  global $sitename;

  $host = gethostname();

  $session = new Temboo_Session('bounceapp', 'Bounce', 'b3fa425a34b14b1898f8415aa083bedf');
  $sendMail = new SendGrid_WebAPI_Mail_SendMail($session);
  $sendMailInputs = $sendMail->newInputs();
  $sendMailInputs->setCredential('SendGridAccount');
  $sendMailInputs->setHeaders("{\"X-Mailer\": \"$sitename\", \"X-Server\": \"$host\"}")->setSubject($subject)->setHTML($body)->setTo($to)->setFromName($sitename)->setFrom("nobody@bounceapp.net");
  $sendMailResults = $sendMail->execute($sendMailInputs)->getResults();
}


?>
