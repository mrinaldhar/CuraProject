<?php
$uid=$_GET['uid'];
$pwd=$_GET['pwd'];
$checkpwd=md5('login');;
if ($uid=='mrinal.dhar' && $pwd==$checkpwd)
{
	echo '1';
}
else {
	echo '0';
}
?>