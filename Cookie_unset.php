<?php
//This time is in seconds time added is in seconds in a day hence this cookie will be for one day
$Expirytime=time()+86400;
echo "Time is".$Expirytime."<br>";
setcookie("Name","Patrick",$Expirytime);
setcookie("Age","21",$Expirytime);
//Unset cookie using previous day
$Expirytime_Unset=time()-86400;
setcookie("Name","Patrick",$Expirytime_Unset);
//setcookie("Name", null);
//setcookie("Name","",$Expirytime_Unset)
if (isset($_COOKIE["Name"])) {
	echo "Cookie is set with the name of ".$_COOKIE["Name"];
}else{
	echo "Cookie is unset";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>

</body>
</html>