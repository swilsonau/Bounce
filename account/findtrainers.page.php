<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Find Trainers

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>Find Trainers</h1>
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
              <p><i class="fa fa-info-circle"></i> You can use this page to find your nearest trainers. Click "Get Introduced" to see the information about a trainer.</p>
            </aside>

            <?php
            if(isset($_GET['process'])) {

            }
            ?>
            <div class="pure-g">
              <div class="pure-u-1 pure-u-md-1-3"><p>Thirds</p></div>
              <div class="pure-u-1 pure-u-md-1-3"><p>Thirds</p></div>
              <div class="pure-u-1 pure-u-md-1-3"><p>Thirds</p></div>
          </div>
        </div>
  </div>
</div>
