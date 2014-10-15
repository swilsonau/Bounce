<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

// My Planner

// Make sure the user is logged in
if(!checklogin()) {
  echo '<meta http-equiv="refresh" content="0; url='.$siteurl.'account/?loginnotice=true" />';
  die();
}

$userdetails = fetchuserdetail($_SESSION['bounceuser']);
?>

<script>
$(document).ready(function() {

    $('#calendar').fullCalendar({
       events: '<?php echo $siteurl; ?>account/calendar_ajax.php',
        header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
      defaultView: 'agendaWeek',
      firstDay: 1,
      draggable: true,
      columnFormat: {
        month: 'ddd', week: 'ddd D/M', day: 'dddd D/M'
      },
      windowResize: function(view) {
        if ($(window).width() < 514){
            $('#calendar').fullCalendar( 'changeView', 'basicDay' );
        } else {
            $('#calendar').fullCalendar( 'changeView', 'month' );
        }
}
    })

});
</script>

<div class="page-header">
    <div class="pg-pull-left">
      <h1>My Planner <small>werk it</small></h1>
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
          <br />
          <div id='calendar'></div>
        </div>
  </div>
</div>
