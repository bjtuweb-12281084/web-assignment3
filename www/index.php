<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="index.css">

<body>
  <?php
    if (!$_REQUEST["hidden_token"]) {
      ?>
  <form  action="login.php" method="post" >
<table width="330" border="0"align="center"cellpadding="3"bgcolor="#eeeeee" >
<tr>
<td width="40%">用户名:</td>
<td><input name="name"type="text"id="username"></td>
</tr>
<tr>
<td>密码:</td>
<td><input name="password"type="password"id="password"></td>
</tr>
<tr>
<td class="td" colspan="2"align="center">
<input type="submit"name="Submit"value="登录">
<input type="reset"name="reset"value="重置">
</td>
</tr>
<tr>
<td  class="td"colspan="2"align="center">
<a class="a" href="register.php">注册</a>&nbsp;
<a class="a" href="insert.php">查看用户注册记录</a>
</td></tr>
</table>
</form>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>

<?php } ?>

</body>
</html>
