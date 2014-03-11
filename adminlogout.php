<?
ob_start();
session_start();
if(isset($_SESSION['userid'])){
	  $_SESSION = array();
	  session_destroy();
  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/events.php';
  header('Location: ' . $home_url);
  }
  else {
  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/events.php';
  header('Location: ' . $home_url);
  }

?> 