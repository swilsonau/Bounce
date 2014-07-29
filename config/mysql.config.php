<?php
// Project Bounce
// ISIT351 Project @ UOW 2014

// Code by Stewart Wilson 4267084

$sql = mysqli_connect("localhost", "root", "") or die (mysql_error());
mysqli_select_db($sql, "bounceapp") or die(mysql_error());
?>
