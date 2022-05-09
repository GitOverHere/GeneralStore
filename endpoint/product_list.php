<?php

$host="127.0.0.1";
$username = "root";
$password = "vex1999";
$database = "generalstore";
$charset = "utf8";


if(empty($_GET['start'])){
$start = 1;
}
else{
 $start= $_GET['start'];
}

if(empty($_GET['end'])){
$end = 5;	
}
else {
	$end = $_GET['end'];
}

$connection = new mysqli($host,$username,$password,$database);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
  echo "There was a stupid error. Oops.";
  header("HTTP/1.1 500 Internal Server Error");
}

$sql = "SELECT * FROM products WHERE id BETWEEN ".$start." AND ".$end;
$result = $connection->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$connection->close();

?>