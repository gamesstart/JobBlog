<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="<?php echo base_url('public/admin/style/style.css');?>" rel="stylesheet" type="text/css" />
</head>
<body >

<div class="main" >
<div class="content" >
<div class="title">管理员修改密码</div>

</div>
<div class="list">
<form id="form1" name="form1" method="post"action="adminpassmod.php">
<table cellpadding=0 cellspacing=0 width=100% class="role_table" >

<tr>
	<td class="tRight" width="195">旧密码</td>
	<td width="1217" class="tLeft" > <input type="password" name="Old_Password" size="20"> </td>
</tr>
<tr>
	<td class="tRight" width="195">新密码</td>
	<td width="1217" class="tLeft" > <input type="password" name="Password" size="20"></td>
</tr>
<tr>
	<td class="tRight" width="195">重新输入新密码</td>
	<td width="1217" class="tLeft">  <input type="password" name="rePassword" size="20">  </td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="center" colspan="3">
    <input name="mod" type="hidden" value="1" />
	<input type="submit" value="保 存"  name="submit" class="button small"> </td>
</tr>
</table>

</form>
</div>
</div>
</body>

</html>