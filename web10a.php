<?php
echo"<br>roll no:".$_cookie["roll"];
echo"<br>name:".$_cookie["name"];
echo"<br>class:".$_cookie[class"];
echo"<br>";
echo"<table border=4><tr><th>subject</th><th>marks</th>/<tr>";
echo"<tr>"<td> SYSPRO<td>".$_POST['s1']."</tr>";
echo"<tr>"<td> TCS<td>".$_POST['s2']."</tr>";
echo"<tr>"<td> OOSE<td>".$_POST['s3']."</tr>";
echo"<tr>"<td> NW<td>".$_POST['s4']."</tr>";
echo"<tr>"<td> PHP<td>".$_POST['s5']."</tr>";
echo"<tr>"<td> JAVA<td>".$_POST['s6']."</tr>";
$total=$-POST['S1']+$-POST['S2']+$-POST['S3']+$-POST['S4']+$-POST['S5']+$-POST['S6'];
$P=total/6;
echo"<br>total".$total;
echo"<br>percemntage".$p;
echo"<br>";
?>
