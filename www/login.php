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
  echo "�û��� ";
  echo $row['Name'];
  echo "<br />";
  }
else{
	echo "û��ע��,����ע���ٵ�¼";
}

if($row = mysql_fetch_array($result1))
  {
  echo "���ѳɹ���¼��ϵͳ";
  echo "<br />";
  }
else{
  echo "�����������";
}

?>
<hr>��ѡ�����<br>
<a class="a" href="register.php">ע��</a>&nbsp;&nbsp;
<a href="logout.php">�˳������ص�½ҳ��</a>
</body>
</html>
