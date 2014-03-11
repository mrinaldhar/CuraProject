<?php
ob_start();
session_start();
  require_once('connectionvars.php'); 
  // Connect to the database 
  if (isset($_SESSION['userid']))
  {
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
  $msg = $_GET['msg'];
  $subject = $_GET['subject'];
  $myname = $_SESSION['realname'];
  $date = date('Y/m/d H:i:s');
  $query = "INSERT INTO posts (subject, post, poster, time) VALUES ('$subject', '$msg', '$myname', '$date')"; 
  mysqli_query($dbc, $query);
  mysqli_close($dbc);
echo '0';
}
else {
echo '1';
}
?>