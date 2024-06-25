<?php
  $mysqli = new mysqli("localhost","an","8080","web_mysqli");

  // Check connection
  if ($mysqli->connect_errno) {
    echo "Ket noi mysqli loi" . $mysqli->connect_error;
    exit();
  }
?>
