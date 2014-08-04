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

function dashnav($selected, $userdetails) {
  global $siteurl;

  $select = ' class="pure-menu-selected"';
  $grav = get_gravatar($userdetails['emailaddress']);
  $nav = '
  <div class="userinfo">
  <img src="'.$grav.'" />
  <p>'.$userdetails['firstname'].'<br />
  Bounce Fitness
  </p>
  </div>
  <div class="pure-menu pure-menu-open">
    <ul>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-home"></i> Dashboard Home</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-calendar"></i> My Planner</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-bar-chart-o"></i> My Progress</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-child"></i> My Trainers</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-rss"></i> My Programs</a></li>
        <li class="pure-menu-heading">Find Trainers</li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-search"></i> Find Trainers</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-search"></i> Find Programs</a></li>
        <li class="pure-menu-heading">Settings</li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-user"></i> My Profile</a></li>
        <li'; if($selected == 'apps') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/apps"><i class="fa fa-exchange"></i> Connected Apps</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/logout"><i class="fa fa-power-off"></i> Logout</a></li>
    </ul>
  </div>';

  return $nav;
}

function get_gravatar( $email, $s = 70, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}


?>
