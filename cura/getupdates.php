<?php
ob_start();
session_start();
require_once('connectionvars.php'); 
// Connect to the database 
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
$query = "SELECT * FROM posts ORDER BY id DESC";
$data = mysqli_query($dbc, $query);
if (mysqli_num_rows($data)!=0)
{
	while ($row=mysqli_fetch_array($data))
	echo '<li><div class="posthead">' . $row['subject'] . '</div><br /><br />' . $row['post'] . '<br /><br /><br /><div class="posthead">By ' . $row['poster'] . ' | ' . $row['time'] . '</div></li>';
}
else {
	echo '<li>No updates to show.</li>';
}
?>