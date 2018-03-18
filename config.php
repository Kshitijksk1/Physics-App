<?php
define('DB_HOST','localhost');
define('DB_NAME','physics');
define('DB_USER','root');
define('DB_PASS','');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die("Failed to connect to database:".mysqli_error($con));

$db = mysqli_select_db($con,DB_NAME) or die("Failed to connect to MYSQL:".mysqli_error($con));

?>