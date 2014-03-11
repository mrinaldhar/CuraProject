<?php
ob_start();
session_start();
  require_once('connectionvars.php'); 
  // Connect to the database 
  if (isset($_SESSION['userid']))
  {
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
  $eventname = $_GET['event'];
$query = "SELECT * FROM regs WHERE event='$eventname' ORDER BY id DESC";
$data = mysqli_query($dbc, $query);
if (mysqli_num_rows($data)!=0)
{
	echo '<tr><td>Team Name</td><td>Number of Participants</td><td>Team Members</td></tr>';
while($row=mysqli_fetch_array($data))
{
echo '<tr><td>' . $row['teamname'] . '</td><td>' . $row['num'] . '</td><td>' . $row['teammates'] . '</td></tr>';
}
}
else {
	echo '<tr><td>No teams for this event have registered yet.</td></tr>';
}
}
else {
	$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/home.php'; 
          header('Location: ' . $home_url); 
}
?>