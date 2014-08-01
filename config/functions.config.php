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


?>
