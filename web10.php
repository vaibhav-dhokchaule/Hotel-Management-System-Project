<?php
setcookie('roll',$_POST['t1']);
setcookie('name ',$_POST['t2']);
setcookie('cass',$_POST['t3']);
?>

<html>
<body>
<form action="web10.php" method="post"><br>
enter the marks:<br>
Tcs<input type="text" name="s1"><br>
Oose<input type="text" name="s2"><br>
Ip<input type="text" name="s3"><br>
NW<input type="text" name="s4"><br>
Php<input type="text" name="s5"><br>
Java<input type="text" name="s6"><br>
<input type="submit" value="Result">
</form>
</body>
</html>
