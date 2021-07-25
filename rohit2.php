<?php
session_start();
$_SESSION['n']=$_POST['t3'];
$_SESSION['c']=$_POST['t4'];
$_SESSION['p']=$_POST['t5'];
$_SESSION['q']=$_POST['t6'];
if(time()-$_SESSION['t']<=30)
{
echo"<center>";
echo"<h2>User Information</h2>";
echo"<br><b>User name:</b><br>".$_SESSION['n'];
echo"<br><b>User city:</b><br>".$_SESSION['c'];
echo"<br><b>User phone no.:</b><br>".$_SESSION['p'];
echo"<br><b>User email id.:</b><br>".$_SESSION['q'];
echo"</center>";
}
else
{
echo"session expired";
session_destroy();
}
?>
