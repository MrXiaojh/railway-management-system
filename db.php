<link rel="stylesheet" href="style.css" />
<?php
$servername = "79q62069t1.zicp.fun:22125";
$username = "root";
$password = "123456";
$dbname = "railway";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
