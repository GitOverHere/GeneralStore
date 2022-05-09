<?php

$host="127.0.0.1";
$username = "root";
$password = "vex1999";
$database = "generalstore";
$charset = "utf8";




$connection = new mysqli($host,$username,$password,$database);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
  echo "There was a stupid error. Oops.";
  header("HTTP/1.1 500 Internal Server Error");
}


$sql = "SELECT COUNT(id) AS count FROM products";
$q = $connection->query($sql);
$count = mysqli_fetch_assoc($q)['total'];


for($product_id = 1; $product_id <= $count; $product_id++){
$star_values = array();
$sql = "SELECT stars FROM reviews WHERE product_id=".$count;
$query = $connection->query($sql);
$result = mysql_fetch_array($query);

for($i=0; i<count($result); $i++){
	$star_values.push($result[i]);
}

$a = array_filter($star_values);
$average = array_sum($a)/count($a);

$sql = 'UPDATE products SET stars='.$average.' WHERE id='.$product_id;

$connection->query($sql);
}

echo 'All star values have been successfully edited';


?> 