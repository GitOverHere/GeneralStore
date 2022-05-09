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


$sql = "SELECT * FROM products";
$result = $connection->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$connection->close();

?>