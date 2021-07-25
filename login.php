<?PHP
session_start();
$usr=$_POST['t1'];
$usr=$_POST['t2'];
$_SESSION['t1']=time();
if(($usr==="sai")&&($pwd==="123"))
{
echo"<form action="display.php" method="post">;
echo"enter name:"<input type="text" name=t3><br>";
echo"enter city:"<input type="text" name=t4><br>";
echo"enter phone:"<input type="text" name=t5><br>";
echo<input type="submit" value="ok">
echo"</form>";
}
else
{
echo"<a href=loin.html>Re-enter user name & password<br>";
}
s?>  

