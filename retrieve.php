<?php
$mysqli = new mysqli("localhost","root","mysql123","demo");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT first_name, last_name, email FROM persons ORDER BY last_name";

if ($result = $mysqli -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    printf ("%s (%s) %s \n", $row[0], $row[1],$row[2]);
  }
  $result -> free_result();
}

$mysqli -> close();
?>