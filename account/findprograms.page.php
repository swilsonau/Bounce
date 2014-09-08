<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Find Programs

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>Find Programs</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 settings-nav">
            <?php
                echo dashnav($_GET['action'], $userdetails);
              ?>
        </div>

        <div class="pure-u-1 pure-u-md-3-4">
            <aside>
              <p><i class="fa fa-info-circle"></i> You can use this page to find your nearest programs. If you're already a member of the organisation and there is a spot available, you can join instantly. Otherwise, you'll need to request to join a session.</p>
            </aside>

            <?php
            $distance = mysqli_real_escape_string($sql, (isset($_GET['process']) ? $_GET['process'] : '30'));
            $distances = array("2", "5", "10", "15", "20", "30", "50");

            echo '<aside class="search">
              <p><i class="fa fa-search"></i> Showing the nearest programs within '.$distance.'km of your location.</p>
              <p>Show within <select name="distance" onchange="changedistance(this.value, \'findprograms\')">';

              foreach($distances as $x) {
                echo '<option'; if($x == $distance) { echo ' selected'; } echo '>'.$x.'</option>';
              }

              echo '</select>km</p>
            </aside>';

            $pc_lat = $userdetails['pc_lat'];
            $pc_lng = $userdetails['pc_lng'];

            // Get the programs available
            $findpgsql = mysqli_query($sql, "SELECT *, ( 6371 * acos( cos( radians($pc_lat) ) * cos( radians( `programs`.`lat` ) ) * cos( radians( `programs`.`lng` ) - radians($pc_lng) ) + sin( radians($pc_lat) ) * sin( radians( `programs`.`lat` ) ) ) ) AS distance, (select count(*) from `program_assign` WHERE `progid` = `programs`.`id`) AS count FROM `programs` LEFT JOIN `organisation` ON `programs`.`orgid` = `organisation`.`id` HAVING distance < $distance ORDER BY distance");

            if(!$findpgsql) {
              echo '<aside class="error">There was an error.</aside>';
            } else {
              if(!mysqli_num_rows($findpgsql)) {
                echo '<aside class="error">We cannot find any programs right now.</aside>';
              } else {
                echo '<div class="pure-g">';
                while($prog = mysqli_fetch_array($findpgsql)) {
                  echo '
                  <div class="pure-u-1 pure-u-md-1-3">
                    <div class="program-indv" style="background: url(\'http://maps.googleapis.com/maps/api/staticmap?center='.$prog['lat'].','.$prog['lng'].'&zoom=16&size=600x300&maptype=roadmap&markers=color:blue%7Clabel:%7C'.$prog['lat'].','.$prog['lng'].'\'); ">
                      <div class="program-content">
                        <div style="float: left; width: 75%;">
                          <h1>'.$prog['programname'].'</h1>
                          <h2>'.$prog['name'].'</h2>
                          <span class="program-local"><i class="fa fa-location-arrow"></i> Approx '.round($prog['distance']).'km away</span><br />
                          <span class="program-address"><i class="fa fa-building"></i> '.$prog['street'].', '.$prog['suburb'].' '.$prog['state'].' '.$prog['postcode'].'</span>
                        </div>

                        <div style="float: right; width: 25%;">
                          <table width="100%" style="color: black;">
                            <tr>
                              <td><i class="fa fa-clock-o"></i></td>
                              <td>'.$prog['timestart'].'</td>
                            </tr>

                            <tr>
                              <td><i class="fa fa-bolt"></i></td>
                              <td>'.dateDiff($prog['timestart'], $prog['timeend']).'</td>
                            </tr>

                            <tr>
                              <td><i class="fa fa-users"></i></td>
                              <td>'.$prog['count'].' ('.$prog['maxpax'].' Max)</td>
                            </tr>
                          </table><br />';
                          if($prog['openclass'] == 1) {
                            echo '<a href="" class="pure-button pure-button-primary"><i class="fa fa-circle-o"></i> Join</a>';
                          } else {
                            echo '<a class="pure-button pure-button-error"><i class="fa fa-times"></i> Closed</a>';
                          }

                        echo '</div>
                        <div style="clear: both;"></div>
                      </div>
                    </div>
                  </div>
                  ';
                }
                echo '</div>';
              }
            }
            ?>
        </div>
  </div>
</div>
