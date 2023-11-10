<?php

$detail= (int)$_GET["id"];

var_dump($detail);

include("connection.php");

$sql = "SELECT * FROM page WHERE ID=$detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $sdg = $result->fetch_assoc(); 

  var_dump($sdg);

} else {
  echo "0 results";
}