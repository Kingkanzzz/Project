<?php

//  obj connect with DB
require('connectdb.php');

// import table dorminatory and run variable sql 
//send connect send sql to connectDB
$sql = "SELECT * FROM dormitory";
$resual = mysqli_query($connect,$sql);

$row = mysqli_fetch_row($resual);

print_r($row);

?>