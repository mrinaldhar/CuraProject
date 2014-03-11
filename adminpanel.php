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
  require_once('connectionvars.php'); 
  // Connect to the database 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
?>
<html>
<head>
<title>Admin Interface</title>
<script src="js/jquerymin.js"></script>
<link rel="stylesheet" href="css/adminpanel.css" /></head>
<body>

	<div class="container">
			<code><div class="menubar">
		<a href="adminpanel.php"><span class="menuitem" id="usersname">Refresh stats</span></a>
		<span class="menuitem" onclick="manageevents()">Post.Update()</span>
		<span class="menuitem" onclick="viewteams()">View.Teams()</span>
		<span class="menuitem" onclick="newadmin()">Add.Admin()</span>
		<a href="adminlogout.php"><span class="menuitem">Logout()</span></a>

	</div></code>
<br />
<?php
	$query = "SELECT * FROM regs ORDER BY id DESC";
	$dataquery = mysqli_query($dbc, $query);
	$numofteams = mysqli_num_rows($dataquery);
	?>
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
	<h1 align="center">Post an update</h1><br /><br />
	<table id="managetable">
		<tr><td><br /><input type="text" name="subject" id="subject" value="Subject" /><textarea id="message" name="message">Message Content goes here.</textarea><br /><br /><button name="sendmsg" id="sendmsg" onclick="sendmsg()">Post this Update</button></td></tr>

	</table>
</div>
<div id="stats" class="pageitem">
	<h1 align="center">General stats regarding events and teams</h1>
	<p align="center"><?php while ($row=mysqli_fetch_array($dataquery)) { echo 'Most recent registration by team: ' . $row['teamname'] . ' for the event ' . $row['event']; break; }?>
	</p>

	<table class="pageitem" id="statstable">
		<tr><td>Number of registered teams</td><td><?php echo $numofteams; ?></td></tr>
		<tr><td>Android App Development teams</td><td>
			<?php 
			$i=0; 
			$dataquery = mysqli_query($dbc, $query);
			while ($row=mysqli_fetch_array($dataquery)) {
			if ($row['event']=='Android App Development')
			{
				$i=$i+1;
			}
		} 
			echo $i; ?></td></tr>
		<tr><td>Cloud Computing teams</td><td><?php $i=0; $dataquery = mysqli_query($dbc, $query); while ($row=mysqli_fetch_array($dataquery)) {
			if ($row['event']=='Cloud Computing')
			{
				$i=$i+1;
			}
			
		} echo $i; ?></td></tr>
		<tr><td>Web Development teams</td><td><?php $i=0; $dataquery = mysqli_query($dbc, $query); while ($row=mysqli_fetch_array($dataquery)) {
			if ($row['event']=='Web Development')
			{
				$i=$i+1;
			}
			
		} echo $i; ?></td></tr>
		<tr><td>Game programming teams</td><td><?php $i=0; $dataquery = mysqli_query($dbc, $query); while ($row=mysqli_fetch_array($dataquery)) {
			if ($row['event']=='Game Programming')
			{
				$i=$i+1;
			}
			
		} echo $i; ?></td></tr>
		<tr><td>Other Event teams</td><td><?php $i=0; $dataquery = mysqli_query($dbc, $query); while ($row=mysqli_fetch_array($dataquery)) {
			if ($row['event']=='Other')
			{
				$i=$i+1;
			}
			
		} echo $i; ?></td></tr>

	</table>
</div>
	</div>
	
	<script src="js/md5.js"></script>
	<script>
	$("#eventselector").change(function(){
		$("#teaminfotable").slideDown();
			var eventname;
		eventname = $("#eventselector").val();
		 $.ajax({
        method:'get',
        url:'teaminfo.php?event='+eventname+'',
        success:function(data){
           	$("#teaminfotable").html(data);
        }
      });
		
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
function sendmsg() {
		var msg;
		var subject;
		subject = $("#subject").val();
		msg = $("#message").val();
		 $.ajax({
        method:'get',
        url:'sendmsg.php?msg='+msg+'&subject='+subject+'',
        success:function(data){
        	if (data=='0')
        	{
           	alert("Message posted successfully.");
           }
           else {
           	alert("An error Occured.");
           }
        }
      });
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