<?php
ob_start();
session_start();
if ($_SESSION['userid'] && $_SESSION['realname'] && $_SESSION['username'])
{
	
}
else {
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/home.php'; 
          header('Location: ' . $home_url); 
}
?>
<html>
<head>
<title>Admin Interface</title>
<link rel="stylesheet" href="css/adminpanel.css" /></head>
<body>

	<div class="container">
			<code><div class="menubar">
		<span class="menuitem" id="usersname"><?php echo $_SESSION['realname']; ?></span>
		<span class="menuitem">Manage.Events()</span>
		<span class="menuitem">View.Teams()</span>
		<span class="menuitem">Add.Admin()</span>
		<a href="adminlogout.php"><span class="menuitem">Logout()</span></a>

	</div></code>
<br /><br />

Our content goes here.
	</div>
</body>
</html>