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
  $org = checkorgownership($userdetails['id']);

  if(!$string) {
    return $userdetials['type'];
  } else {
    if($org) {
      return "Organisational";
    } else {
      return "";
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

function checkfbconnect($userdetails) {
  // Check if a user has facebook configured
  if(!empty($userdetails['fb_userid']) && !empty($userdetails['fb_secret'])) {
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
  <!---<div class="userinfo is-center">
  <img src="'.$grav.'" />
  <p>'.$userdetails['firstname'].'<br />
'.$org.'
  </p>
  </div>-->

  <div class="pure-menu pure-menu-open sidemenu-mobile">
    <ul>
      <li class="sidemenushow"><a onclick="sidemenu(\'show\')"><i class="fa fa-bars"></i> Open Menu</a></li>
      <li class="sidemenuhide" style="display: none;"><a onclick="sidemenu(\'hide\')"><i class="fa fa-bars"></i> Close Menu</a></li>
    </ul>
  </div>

  <div class="pure-menu pure-menu-open sidemenu">
    <ul>
        <li'; if($selected == '') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-home fa-fw"></i> Dashboard Home</a></li>
        <li'; if($selected == 'myplanner') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/myplanner"><i class="fa fa-calendar fa-fw"></i> My Planner</a></li>
        <li'; if($selected == 'myprogress') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-bar-chart-o fa-fw"></i> My Progress</a></li>
        <li'; if($selected == 'mytrainer') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/"><i class="fa fa-child fa-fw"></i> My Trainers</a></li>
        <li'; if($selected == 'myprograms') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/myprograms"><i class="fa fa-rss fa-fw"></i> My Programs</a></li>';
        if(isset($isorg)) {
          $nav .= '<li class="pure-menu-heading">Organisation Settings</li>
          <li'; if($selected == 'oprofile') { $nav .= $select; } $nav .='><a href="'.$siteurl.'org/oprofile"><i class="fa fa-sitemap fa-fw"></i> Organisation Profile</a></li>
          <li'; if($selected == 'ousers') { $nav .= $select; } $nav .='><a href="'.$siteurl.'org/ousers"><i class="fa fa-users fa-fw"></i> Organisation Users</a></li>
          <li'; if($selected == 'oprograms') { $nav .= $select; } $nav .='><a href="'.$siteurl.'org/oprograms"><i class="fa fa-location-arrow fa-fw"></i> Organisation Programs</a></li>
          ';
        } else {
          $nav .='<li class="pure-menu-heading">Find Trainers</li>
          <li'; if($selected == 'findtrainers') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/findtrainers"><i class="fa fa-search fa-fw"></i> Find Trainers</a></li>
          <li'; if($selected == 'findprograms') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/findprograms"><i class="fa fa-search fa-fw"></i> Find Programs</a></li>';
      }
        $nav .= '
        <li class="pure-menu-heading">Messages</li>
        <li'; if($selected == 'inbox') { $nav .= $select; } $nav .='><a href="'.$siteurl.'messaging/new"><i class="fa fa-plus-circle fa-fw"></i> New</a></li>
        <li'; if($selected == 'inbox') { $nav .= $select; } $nav .='><a href="'.$siteurl.'messaging/inbox"><i class="fa fa-envelope-o fa-fw"></i> Inbox</a></li>
        <li class="pure-menu-heading">Settings</li>
        <li'; if($selected == 'profile') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/profile"><i class="fa fa-user fa-fw"></i> My Profile</a></li>
        <li'; if($selected == 'apps') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/apps"><i class="fa fa-exchange fa-fw"></i> Connected Apps</a></li>
        <li'; if($selected == 'logout') { $nav .= $select; } $nav .='><a href="'.$siteurl.'account/logout"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
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

function valid_pass($candidate) {
    // valid conditions are: > 8 char, one uppercase, one lower case, one number

    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $candidate))
        return FALSE;
    return TRUE;
}

function countDays($day, $start, $end)
{
    $w = array(date('w', $start), date('w', $end));

    if ($w[0] < $w[1])
    {
        $partialWeekCount = ($day >= $w[0] && $day <= $w[1]);
    }else if ($w[0] == $w[1])
    {
        $partialWeekCount = $w[0] == $day;
    }else
    {
        $partialWeekCount = ($day >= $w[0] || $day <= $w[1]);
    }

    return floor( ( $end-$start )/60/60/24/7) + $partialWeekCount;
}

function base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}


// #########################################
// # ORGANISATION RELATED FUNCTIONS        #
// #########################################

function checkorgownership($userid) {
  global $sql;

  $fetch = mysqli_query($sql, "SELECT `users`.`id` AS `userid`, `organise_assign`.`organ_id` AS `orgid`, `organise_assign`.`perms` FROM `users` RIGHT JOIN `organise_assign` ON `users`.`id` = `organise_assign`.`user_id` WHERE `users`.`id` = '$userid' AND `organise_assign`.`perms` > '1'");

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

function fetchorgdetail($id) {
  global $sql;

  $fetch = mysqli_query($sql, "SELECT * FROM `organisation` WHERE `id` = '$id'") or die();

  return mysqli_fetch_array($fetch);
}

function stringorgperms($perm, $long = false) {
  switch($perm) {
    default:
      if($long) {
        return "NO PERMISSION";
      } else {
        return "N";
      }
    break;

    case "1":
      if($long) {
        return "Client";
      } else {
        return "C";
      }
    break;

    case "2":
      if($long) {
        return "Trainer";
      } else {
        return "T";
      }
    break;

    case "3":
      if($long) {
        return "Administration";
      } else {
        return "A";
      }
    break;
  }
}

function progtype($progtype) {
  switch($progtype) {
    case 1:
      return "<i class='fa fa-refresh'></i> Recurring";
      break;

    case 2:
      return "<i class='fa fa-share'></i> One Off";
      break;
  }
}

function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }

    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }

    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();

    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }

      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }

    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }

    // Return string with times
    return implode(", ", $times);
  }

  function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);

    return $interval->format($differenceFormat);

}

?>
