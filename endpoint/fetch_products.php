<?php

$host="127.0.0.1";
$username = "root";
$password = "vex1999";
$database = "generalstore";
$charset = "utf8";

if(empty($_GET['limit'])){
 $limit = "50";
}
else {
	$limit = $_GET['limit'];
}


if(empty($_GET['category'])){
	$category = "products";
}
else {
	$category = $_GET['category'];
}

$connection = new mysqli($host,$username,$password,$database);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
  echo "Looks like we made a big oopsie. Our goblins have been dispatched to solve the issus. Sorry :(";
  http_response_code(500);
}


$sql = "SELECT * FROM products WHERE categories LIKE '".$category."' LIMIT ".$limit;
$result = $connection->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$connection->close();

?>