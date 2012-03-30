<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>
<?php

$str = "湖人";

$db = mysql_connect("localhost", "root","Jason");
mysql_select_db("test",$db);
mysql_query("set names 'gb2312'");
$resultme = mysql_query("insert into employees values('6','$str','$str','$str','$str')",$db);
if($resultme){
	echo("数据库输入成功");
}
$result = mysql_query("SELECT * FROM employees",$db);

printf("First Name: %s<br>\n", mysql_result($result,0,"first"));

printf("Last Name: %s<br>\n", mysql_result($result,0,"last"));

printf("Address: %s<br>\n", mysql_result($result,0,"address"));

printf("Position: %s<br>\n", mysql_result($result,0,"position"));

?>

</body>

</html>