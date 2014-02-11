<?php
ob_start();
session_start();
  require_once('connectionvars.php'); 
  // Connect to the database 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

$uid=mysqli_real_escape_string($dbc, trim($_GET['uid']));
$pwd=mysqli_real_escape_string($dbc, trim($_GET['pwd']));

$query = "SELECT * FROM admin WHERE username = '$uid' LIMIT 1";
$data = mysqli_query($dbc, $query);
if (mysqli_num_rows($data)!=0)
{
$row=mysqli_fetch_array($data);
$storedpwd = $row['password'];
if ($storedpwd==$pwd)
{
	echo '1';
}
else {
	echo '0';
}
}
else {
	echo '0';
}
$_SESSION['realname'] = $row['realname'];
$_SESSION['userid'] = $row['id'];
$_SESSION['username'] = $row['username'];
?>