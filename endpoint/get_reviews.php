<?php

$host="127.0.0.1";
$username = "root";
$password = "vex1999";
$database = "generalstore";
$charset = "utf8";

if(empty($_GET['product_id'])){
$product_id = 1;
}
else{
 $product_id= $_GET['product_id'];
}



$connection = new mysqli($host,$username,$password,$database);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
  echo "There was a stupid error. Oops.";
  header("HTTP/1.1 500 Internal Server Error");
}

$sql = "SELECT * FROM reviews WHERE product_id = ".$product_id;
$result = $connection->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);

$connection->close();

?>