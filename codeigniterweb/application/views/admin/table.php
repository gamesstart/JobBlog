<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url('images/admin/style/style.css');?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('images/admin/script/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('images/admin/script/table.js');?>"></script>
<div class="main" >
<div class="content" >
<div class="title">报名管理列表</div>
<div class="imgButton">
<form action="" method="post" name="form1" >
<input id="" name="edit" value="编辑" onClick="ask_edit('baoming2_edit.php','edit')" class="edit" type="button">
<input id="" name="delete" value="删除" onclick="ask_delete('baoming2_list.php','del')" class="delete" type="button">
<input type="button" name="edit" value="&nbsp;&nbsp;导出execl" onClick="ask_exec('baoming2_execl.php','exec')"  class="button small">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
搜索：姓名：
<input  type="text" name="realname" id="realname" size="10" value=""/>
或联系方式：
<input  type="text" name="tel" id="tel"  size="10" value=""/>
<input type="submit" name="seach" value="搜索" class="button">
<div class="list">
  <table class="list" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td colspan="12" class="topTd" height="5"></td>
      </tr>
      <tr class="row">
        <th style="vertical-align:middle;" ><input name="checkedAll" id="checkedAll"type="checkbox"></th>
        <th >报名号</th>
        <th>姓名</th>
        <th  align="center">手机</th>
        <th >职业</th>
        <th >报名日期</th>
        <th >状态
          </td>
        <th>处理
          </td>
        <th >操作
          </td>
      </tr>
      <tr >
        <td style="vertical-align:middle;"><input type="checkbox"  name="checkbox_name[]"  value="410"></td>
        <td ><a  href="baoming2_edit.php?act=list&id=410">24121823</a></td>
        <td>1111</td>
        <td >13123123</td>
        <td ></td>
        <td >2012-08-24 00:18:23</td>
        <td ><b style='color:#FF0000'>未处理</b></td>
        <td ><SELECT id=pro_name410 name=pro_name410 onChange="stat('baoming2_list.php',410)">
            <OPTION 
              value="未处理" selected>未处理</OPTION>
            <OPTION value="电话已确认" >电话已确认</OPTION>
            <OPTION value="电话不通" >电话不通</OPTION>
            <OPTION value="作废" >作废</OPTION>
            <OPTION value="处理完成" >处理完成</OPTION>
            <OPTION value="其它原因" >其它原因</OPTION>
          </SELECT></td>
        <td><a  href="ditle.html"><b style='color:#09C'>详情</b></a>&nbsp;<a href="baoming2_list.php?act=list&id=410&del=1" onclick="return confirm('确定要删除吗？');">删除</a>&nbsp;</td>
      </tr>
      <tr >
        <td style="vertical-align:middle;"><input type="checkbox"  name="checkbox_name[]"  value="396"></td>
        <td ><a  href="baoming2_edit.php?act=list&id=396">14115758</a></td>
        <td>32523</td>
        <td >45235</td>
        <td ></td>
        <td >2012-08-14 11:57:58</td>
        <td >电话不通 </td>
        <td ><SELECT id=pro_name396 name=pro_name396 onChange="stat('baoming2_list.php',396)">
            <OPTION 
              value="未处理" >未处理</OPTION>
            <OPTION value="电话已确认" >电话已确认</OPTION>
            <OPTION value="电话不通" selected>电话不通</OPTION>
            <OPTION value="作废" >作废</OPTION>
            <OPTION value="处理完成" >处理完成</OPTION>
            <OPTION value="其它原因" >其它原因</OPTION>
          </SELECT></td>
        <td><a  href="ditle.html"><b style='color:#09C'>详情</b></a>&nbsp;<a href="baoming2_list.php?act=list&id=396&del=1" onclick="return confirm('确定要删除吗？');">删除</a>&nbsp;</td>
      </tr>
      <tr >
        <td style="vertical-align:middle;"><input type="checkbox"  name="checkbox_name[]"  value="395"></td>
        <td ><a  href="baoming2_edit.php?act=list&id=395">14115539</a></td>
        <td>32523</td>
        <td >45235</td>
        <td ></td>
        <td >2012-08-14 11:55:39</td>
        <td ><b style='color:#FF0000'>未处理</b></td>
        <td ><SELECT id=pro_name395 name=pro_name395 onChange="stat('baoming2_list.php',395)">
            <OPTION 
              value="未处理" selected>未处理</OPTION>
            <OPTION value="电话已确认" >电话已确认</OPTION>
            <OPTION value="电话不通" >电话不通</OPTION>
            <OPTION value="作废" >作废</OPTION>
            <OPTION value="处理完成" >处理完成</OPTION>
            <OPTION value="其它原因" >其它原因</OPTION>
          </SELECT></td>
        <td><a  href="ditle.html"><b style='color:#09C'>详情</b></a>&nbsp;<a href="baoming2_list.php?act=list&id=395&del=1" onclick="return confirm('确定要删除吗？');">删除</a>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="12" class="bottomTd" height="5"></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="page"><font color="red">1</font>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=2">[2]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=3">[3]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=4">[4]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=5">[5]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=6">[6]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=7">[7]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=8">[8]</a>&nbsp;<a href="/baoming/dadmin/baoming2_list.php?page=9">[9]</a>&nbsp;<a href=/baoming/dadmin/baoming2_list.php?page=2 title="下一页">>|</a>&nbsp;<a href=/baoming/dadmin/baoming2_list.php?page=11 title="下十页">>>|</a>&nbsp;</div>

