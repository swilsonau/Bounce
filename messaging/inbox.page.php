<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// Apps Config Page

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<div class="page-header">
  <div class="content">
    <h1>Inbox (0)</h1>
  </div>
</div>

<div class="content-wrapper accountgrid">
  <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5 settings-nav">
            <?php
                echo dashnav($_GET['action'], $userdetails);

              ?>
        </div>

        <div class="pure-u-1 pure-u-md-3-4 settings-content">
            <aside>
              <p><i class="fa fa-info-circle"></i> This is your message inbox. Any messages from your trainers will be shown here.</p>
            </aside>


            <table class="pure-table" style="width: 100%;">
                <thead>
                    <tr>
                      <th width="25%">Sender</th>
                      <th width="25%">Date</th>
                      <th width="35%">Subject</th>
                      <th width="15%"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                      <td>Stewart</td>
                      <td>27/10/14 1:50PM</td>
                      <td>Tomorrows Program Moved</td>
                      <td><a href="" class="pure-button"><i class="fa fa-eye"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
  </div>
</div>
