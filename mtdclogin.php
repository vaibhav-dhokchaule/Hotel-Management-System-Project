<?php
session_start();
$usr=$_POST['t1'];
$pwd=$_POST['t2'];
$_SESSION['t']=time();
if(($usr==="vaibhav")&&($pwd==="123"))
{
echo"<form action=mtdc3.php method=POST>";
echo"<center>";
echo"<h2>Registration Form</h2>";
echo"<br><b> Enter name:</b><input type=text name=t3><br><br>";
echo"<br><b> Enter city:</b><input type=text name=t4><br><br>";
echo"<br><b> Enter phone:</b><input type=text name=t5><br><br>";
echo"<br><b> Enter email:</b><input type=text name=t6><br><br>";
echo"<input type=submit value=ok>";
echo"</center>";
echo"</form>";
}
else
{
echo"<a href=login.html>Re-Enter Username and Password<br>";
}
?>

