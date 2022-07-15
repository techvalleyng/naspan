<?php
define('DB_SERVER','localhost');
define('DB_USER','naspanco_beta');
define('DB_PASS','Computa@12');
define('DB_NAME','naspanco_beta');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>