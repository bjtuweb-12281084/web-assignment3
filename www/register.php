<?php
$con = mysql_connect("localhost","root","root123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE myd",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
mysql_select_db("myd", $con);
$sql = "CREATE TABLE Persons 
(
	Name varchar(15),
	Password varchar(15),
	Email varchar(50)
)";
mysql_query($sql,$con);
mysql_close($con);
?>

<html>
<head>
	<meta http-equiv="Content-Type"content="text/html;charset=gb2312">
<title>web homework</title>
</head>
<link rel="stylesheet" type="text/css" href="index.css">
<body>
<form action="insert.php" method="post">
	<table width="330"border="0"align="center"cellpadding="5"bgcolor="#eeeeee">
	<tr>
		<td width="40%">用户名：</td>
		<td><input name="name"type="text"id="username"></td>
	</tr>
	<tr>
		<td>密码：</td>
		<td><input name="password"type="password"id="password"></td>
	</tr>
		<td>Email:</td>
		<td><input name="email"type="text"id="email"></td>
	</tr>
	<tr>
		<td colspan="2"align="center">
		<input type="submit"name="Submit"value="注册"></td>
	</tr>
	<tr>
		<td colspan="2"align="center">
		<a  class="a"href="index.php">登录</a>&nbsp;
		<a class="a" href="insert.php">用户注册记录</a>
		</td>
	</tr>
	</table>
</form>

</body>
</html>