<?php
// $mysqli = new mysqli("localhost","root","","esmash");

// // Check connection
// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }

// $id = $_GET['id'];
// // Perform query
// if ($result = $mysqli -> query("SELECT order_status FROM orders WHERE order_id > $id")) {
//   echo "Not empty data";
// }else{
// 	echo "empty data";
// }

// $mysqli -> close();
echo $_GET['url'];
?>
