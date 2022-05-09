<?php

$host="127.0.0.1";
$username = "root";
$password = "vex1999";
$database = "generalstore";
$charset = "utf8";

$connection = new mysqli($host,$username,$password,$database);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
  echo "Looks like we made a big oopsie. Our goblins have been dispatched to solve the issus. Sorry :(";
  http_response_code(500);
}

$sql = "SELECT count(*) FROM products";
$result = $connection->query($sql);

print $result->fetch_assoc()['count(*)'];

$connection->close();

?>