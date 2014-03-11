<!doctype html>
<?php
ob_start();
session_start();
require_once ('connectionvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
if (isset($_GET['submit'])) {
	$teamname=$_GET['teamname'];
	$team=$_GET['teammates'];
	$num=$_GET['num'];
	$event=$_GET['eventselector'];
	$query="INSERT INTO regs (event, teamname, teammates, num) VALUES ('$event', '$teamname', '$teammates', '$num')"
	mysqli_query($dbc, $query);
	mysqli_close($dbc);
}
?>
<html>
<head>
	<title>Registrations for teams</title>
	<meta charset="utf-8" />
	<script>
	</script>
	<style>
	</style>
</head>
<body>
	<form action="register.php" method="GET">
		<input type="text" name="teamname" placeholder="Team Name" required></input>
		<br />
		<input type="text" name="num" placeholder="no of teammates" required></input>
		<br />
		<input type="text" name="teammates" placeholder="name of teammates" required></input>
		<br />
		<select id="eventselector" name="eventselector">
			<option>Android App Development</option>
			<option>Web Development</option>
			<option>Cloud Computing</option>
			<option>Gaming</option>	
			<option>Another Event</option>
		</select>
		<br />
		<input type="submit" name="submit"></input>
	</form>
</body>
</html>