<?php
session_start();
$_SESSION['n']=$_POST['t3'];
$_SESSION['c']=$_POST['t4'];
$_SESSION['p']=$_POST['t5'];
if(time()-$_SESSION['t']<=10);
{
echo"user name:".$_SESSION['n'];
echo"<br> user city:".$_SESSION['c'];
echo"<br> user phone:"$_SESSION['p'];
}
else
{
echo"session expire";
session_distroy();
}
?>
