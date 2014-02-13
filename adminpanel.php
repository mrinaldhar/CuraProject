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
<script src="js/jquerymin.js"></script>
<link rel="stylesheet" href="css/adminpanel.css" /></head>
<body>

	<div class="container">
			<code><div class="menubar">
		<span class="menuitem" id="usersname" onclick="showstats()">Realtime stats</span>
		<span class="menuitem" onclick="manageevents()">Manage.Events()</span>
		<span class="menuitem" onclick="viewteams()">View.Teams()</span>
		<span class="menuitem" onclick="newadmin()">Add.Admin()</span>
		<a href="adminlogout.php"><span class="menuitem">Logout()</span></a>

	</div></code>
<br />
<div class="footer">
	<small>Welcome, <?php echo $_SESSION['realname']; ?></small>
</div>
<div id="newadminp" class="pageitem">
	<table>
		<tr>
			<td>Admin's name:</td><td><input type="text" name="realname" id="realname" size="30" /></td>
		</tr>
		<tr>
			<td>Create username:</td><td><input type="text" name="username" id="username" size="30" /></td>
		</tr>
		<tr>
			<td>Enter Password:</td><td><input type="password" name="pwd" id="pwd" size="30" /></td>
		</tr>
		<tr>
			<td>Confirm Password:</td><td><input type="password" name="confirmpwd" id="confirmpwd" size="30" /></td>
		</tr>
		<tr><td colspan="2"><button onclick="addnewadmin()">Submit</button></td></tr>
	</table>
</div>
<div id="viewteamsp" class="pageitem">
	Select an event:
	<br /><br />
	<select id="eventselector">
		<option>Android App Development</option>
		<option>Web Development</option>
		<option>Cloud Computing</option>
		<option>Gaming</option>
		<option>Another Event</option>
	</select>
	<table id="teaminfotable">

	</table>
</div>
<div id="manageeventsp" class="pageitem">
	Manage events
</div>
<div id="stats" class="pageitem">
	<h1>General stats regarding events and teams.</h1>
	<p>Like number of teams registered, time until next event, current event standings.</p>
</div>
	</div>
	<script>
	$("#eventselector").change(function(){
		$("#teaminfotable").slideDown();
		$("#teaminfotable").html('This area will now display team information for '+$("#eventselector").val());

	});
function manageevents() {
	$(".pageitem").slideUp();
	$("#manageeventsp").slideDown();
}
function newadmin() {
	$(".pageitem").slideUp();
	$("#newadminp").slideDown();
}
function viewteams() {
	$(".pageitem").slideUp();
	$("#viewteamsp").slideDown();
}
function showstats() {
	$(".pageitem").slideUp();
	$("#stats").slideDown();
}
function addnewadmin() {
	var un = document.getElementById('username').value;
	var pwd = document.getElementById('pwd').value;
	var realname=document.getElementById('realname').value;
	var confirm = document.getElementById('confirmpwd').value;
    if (pwd==confirm && pwd!='')
{
    var passhash = CryptoJS.MD5(pwd).toString();
	 $.ajax({
        method:'get',
        url:'newadmin.php?username='+un+'&password='+passhash+'&realname='+realname+'',
        success:function(data){
           	if (data=='1')
        	{
        		alert('Administrator added successfully.');

            }
            else if (data=='2')
           	{
           		alert("Admin with that username already exists.");
           		return false;
           	}
        	else {
        		alert('Unknown error occured. Try again.');

        	}
        }
      });

}
else {
alert('The two passwords do not match. Please try again.');
return false;
}
}
	</script>
</body>
</html>