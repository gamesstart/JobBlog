<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body >
<div class="main" >
<div class="content" >
<div class="title">查看详细内容</div>

</div>
<div class="list">
<form name="fom" id="fom" method="post" action="baoming2_edit.php">
<table cellpadding=0 cellspacing=0 width=100% class="role_table" >
<tbody>
<tr>
	<td class="tRight" width="150">报名号</td>
	<td class="tLeft" >20120824121823	</td>
    <td class="tRight" width="150"> 编号</td>
	<td class="tLeft" >410&nbsp;</td>
</tr>
<tr>
	<td class="tRight" width="150">报名类别</td>
	<td class="tLeft" colspan="3" >英语</td>
</tr>
</tr>
<tr>
	<td class="tRight" width="150">姓名</td>
	<td class="tLeft" >1111&nbsp;</td>
    <td class="tRight" width="150">手机</td>
	<td class="tLeft" >13123123&nbsp;</td>
</tr>
<tr>
	<td class="tRight" width="150">QQ号码</td>
	<td class="tLeft"  >&nbsp;</td>
     <td class="tRight" width="150">Email</td>
	<td class="tLeft" >&nbsp;</td>
</tr>

<tr>
	<td class="tRight">付款方式</td>
	<td class="tLeft" >货到付款&nbsp;</td>
    <td class="tRight" width="150">下单时间</td>
	<td class="tLeft" >2012-08-24 00:18:23</td>
</tr>
<tr>
	<td class="tRight" width="150">处理</td>
	<td class="tLeft"><select id=stat name=stat >
     <OPTION  value="未处理" selected>未处理</OPTION> 
  <OPTION value="电话已确认" >电话已确认</OPTION>
  <OPTION value="电话不通" >电话不通</OPTION>
  <OPTION value="作废" >作废</OPTION>
  <OPTION value="处理完成" >处理完成</OPTION>
  <OPTION value="其它原因" >其它原因</OPTION>
    </select></td>
    <td class="tRight" width="150">是否在线支付</td>
	<td class="tLeft" >无</td>
</tr>
<tr>
	<td class="tRight">管理员备注</td>
	<td class="tLeft" colspan="3"><textarea name="admininfo" cols="30" rows="3" id="admininfo"></textarea>		</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td class="center" colspan="3">
	<input type="hidden" name="id" value="410">
	<input type="submit" value="保 存"  name="submit" class="button small"> <input type="reset" class="button small" onClick="window.location='/baoming/dadmin/baoming2_list.php?page=1'" value="返 回" ></td>
</tr>
</tbody>
</table>

</form>
</div>
</div>
</body>

</html>