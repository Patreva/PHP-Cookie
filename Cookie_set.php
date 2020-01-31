<?php
//This time is in seconds time added is in seconds in a day hence this cookie will be for one day
$Expirytime=time()+86400;
echo "Time is".$Expirytime."<br>";
setcookie("Name","Patrick",$Expirytime);
//print_r($_COOKIE);
setcookie("Age", "21", $Expirytime);
echo $_COOKIE["Name"]."<br>";
echo "My name is " .$_COOKIE["Name"]. "and I am ".$_COOKIE["Age"]. "Years of Age";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>

</body>
</html>