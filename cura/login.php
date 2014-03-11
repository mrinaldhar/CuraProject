<?php
ob_start();
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['realname']) && isset($_SESSION['username']))
{
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/adminpanel.php'; 
          header('Location: ' . $home_url); 
}
else {
}
?><html>
<head><title>login shell</title>

<style>
body {
	overflow:hidden;
    background: #000000 url('img/lock.png') center no-repeat;
}
#shell {
	height:100%;
	width:100%;
	color:white;
    background: rgba(0,0,0,0.8);

}

input {
	background-color: rgb(0,0,0);
	border: 0px;
	color:white;
	font-family: 'consolas';
}
code {
	font-family: 'consolas';
}
input:focus {
	outline:none;
}
</style>
<script src="js/jquerymin.js"></script>
<script src="js/md5.js"></script>
<script>
function donot() {

return True;
}

function shell() {

var sh=document.getElementById('shell');
sh.innerHTML+=">> Connecting to server...<br />";
setTimeout(function() {
    sh.innerHTML += ">> Response received.<br />";
sh.innerHTML+=">> Welcome to Cura Events Administration access page. ";
sh.innerHTML+="<br />>> Please enter your username: <br />>_ <input type='text' id='userinp' size='100' />";
$('#userinp').focus();
$('#userinp').keypress(function(e) {
    if(e.which == 13) {
        proceed_pwd($('#userinp').val());
    }
});

}, 1500);


}
function proceed_pwd(val) {
var sh=document.getElementById('shell');
sh.innerHTML+="<br />>> Trying to login as "+document.getElementById('userinp').value+"@Cura. <br />>> Please enter your password:<br />>_ <input type='password' id='userpwd' size='100' />";
$('#userpwd').focus();
$('#userpwd').keypress(function(e) {
    if(e.which == 13) {
        submit_it(val, $('#userpwd').val());
    }
});

}

function submit_it(val1, val2) {
	var un = val1;
	var pwd = document.getElementById('userpwd').value;
    var passhash = CryptoJS.MD5(pwd).toString();
    var sh=document.getElementById('shell');

	 $.ajax({
        method:'get',
        url:'verify.php?uid='+un+'&pwd='+passhash+'',
        success:function(data){
           	if (data=='1')
        	{
        		sh.innerHTML+="<br />>> <font color='lightgreen'>Authentication successful. </font>Redirecting to admin interface...<br />";
        	       transfer();
            }
        	else {
        		sh.innerHTML+="<br />>> <font color='red'>Authentication failed. </font>You do not have access.";
                setTimeout(function() {

                sh.innerHTML='';
                return shell();
            }, 2000);
        	}
        }
      });
}
function transfer() {
    setTimeout(function () {
        window.location="adminpanel.php";
    }, 2000);
}
</script>

</head>
<body onload="shell()">
<code>
<div id="shell" class="main">
</div>
</code>
</body>
</html>