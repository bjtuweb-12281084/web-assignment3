<?php
$con = mysql_connect("localhost","root","root123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("myd", $con);

$sql="INSERT INTO Persons (Name,Password,Email)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>
<?php
$con = mysql_connect("localhost","root","root123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("myd", $con);
$result = mysql_query("SELECT * FROM Persons");

echo "<table align='center'>
<tr>��������ע����ʷ��������
<th>Name&nbsp;&nbsp;&nbsp; </th>
<th>Email&nbsp;&nbsp;&nbsp;</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
<html>
<link rel="stylesheet" type="text/css" href="index.css">
<body>
<hr>
	ע����ϣ��뷵�ص�¼</br>
	<a href="index.php">��¼</a>
</body>
</html>