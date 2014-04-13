<html>
<link rel="stylesheet" type="text/css" href="index.css">
<body>
<?php
$username = $_POST["name"];
$password = $_POST["password"];
$con = mysql_connect("localhost","root","root123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("myd", $con);

$result = mysql_query("SELECT * FROM Persons
WHERE Name='$username'");
$result1 = mysql_query("SELECT * FROM Persons
WHERE Password='$password'");
if($row = mysql_fetch_array($result))
  {  
  echo "用户： ";
  echo $row['Name'];
  echo "<br />";
  }
else{
	echo "没有注册,请先注册再登录";
}

if($row = mysql_fetch_array($result1))
  {
  echo "您已成功登录本系统";
  echo "<br />";
  }
else{
  echo "您的密码错误";
}

?>
<hr>请选择操作<br>
<a class="a" href="register.php">注册</a>&nbsp;&nbsp;
<a href="logout.php">退出并返回登陆页面</a>
</body>
</html>
