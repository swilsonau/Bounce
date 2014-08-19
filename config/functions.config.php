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

function checkusertype($find, $userdetails) {
  $user = $userdetails['type'];

  if($find == $user) {
    return true;
  } else {
    return false;
  }
}

function getusertype($userdetails, $string = false) {
  if(!$string) {
    return $userdetials['type'];
  } else {
    switch($userdetails['type']) {
      default:
        return "";
      break;

      case "2":
        return "Organisational";
      break;

      case "3":
        return "Administrator";
      break;
    }
  }
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

  if(checkorgownership($userdetails['id'])) {
    $org = "Organisation Account";
    $isorg = true;
  } else {
    $org = "User Account";
  }

  $nav = '
  <div class="userinfo is-center">
  <img src="'.$grav.'" />
  <p>'.$userdetails['firstname'].'<br />
'.$org.'
  </p>
  </div>
  <div class="pure-menu pure-menu-open">
    <ul>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-home"></i> Dashboard Home</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-calendar"></i> My Planner</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-bar-chart-o"></i> My Progress</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-child"></i> My Trainers</a></li>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-rss"></i> My Programs</a></li>';
        if(isset($isorg)) {
          $nav .= '<li class="pure-menu-heading">Organisation Settings</li>
          <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'org/profile"><i class="fa fa-sitemap"></i> Organisation Profile</a></li>
          <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'org/users"><i class="fa fa-users"></i> Organisation Users</a></li>
          <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'org/programs"><i class="fa fa-location-arrow"></i> Organisation Programs</a></li>
          ';
        } else {
          $nav .='<li class="pure-menu-heading">Find Trainers</li>
          <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-search"></i> Find Trainers</a></li>
          <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-search"></i> Find Programs</a></li>';
      }
        $nav .= '<li class="pure-menu-heading">Settings</li>
        <li'; if($selected == 'profile') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/profile"><i class="fa fa-user"></i> My Profile</a></li>
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


// #########################################
// # ORGANISATION RELATED FUNCTIONS        #
// #########################################

function checkorgownership($userid) {
  global $sql;

  $fetch = mysqli_query($sql, "SELECT `users`.`id` AS `userid`, `organise_assign`.`organ_id` AS `orgid`, `organise_assign`.`perms` FROM `users` RIGHT JOIN `organise_assign` ON `users`.`id` = `organise_assign`.`user_id` WHERE `users`.`id` = '$userid'");

  if(!$fetch) {
    return false;
  } else {
    if(mysqli_num_rows($fetch) == 0) {
      return false;
    } else {
      return true;
    }
  }
}

function stringorgperms($perm, $long = false) {
  switch($perm) {
    default:
      if($long) {
        return "No Permission";
      } else {
        return "N/A";
      }
    break;

    case "1":
      if($long) {
        return "Read Only";
      } else {
        return "R";
      }
    break;

    case "2":
      if($long) {
        return "Read/Write";
      } else {
        return "RW";
      }
    break;

    case "3":
      if($long) {
        return "Full Permission";
      } else {
        return "F/P";
      }
    break;
  }
}

?>
