<?php
include 'conn.php';


$date = $_POST['startDate'];
$time = $_POST['time'];
$guest = $_POST['numGuest'];

$sql  ="INSERT INTO reserve(date,time,guest) values ('$date' , '$time' , '$guest');";

mysqli_query($conn, $sql);





?>