<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录页面</title>
<link href="<?php echo base_url('public/admin/style/style.css');?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('public/script/jquery.min.js');?>"></script>
</head>

<script lanague="javascript">
function ChkLogin(){
	var reg=/^[0-9a-zA-Z]{1,20}$/;
	if(!reg.test(frmLogin.username.value)){
		alert("请正确输入用户名！");
		frmLogin.username.focus();
		return false;
	}
	if(frmLogin.password.value==""){
		alert("请输入密码！");
		frmLogin.password.focus();
		return false;
	}
	return true;
}

</script>

<body style="background-color:#000000;">
<div class="admin_bg">
   <div class="admin_img">

   <form name="frmLogin" method="post" onsubmit="return ChkLogin();" accept-charset="utf-8" action="<?php echo base_url($this->config->item('admin_folder').'/login') ?>">
       <div class="admin_name">
       <div class="admin_tips"> <?= @flash_message(); ?></div>
            <ul> 
              <li>用&nbsp;&nbsp;&nbsp;户：&nbsp;&nbsp;&nbsp;<input class=midline1  id="username" name="username" type="text" style="width:200px;" /></li>
              <li>密&nbsp;&nbsp;&nbsp;码：&nbsp;&nbsp;&nbsp;<input class=midline1 id="password" name="password" type="password" style="width:200px;"></li>
           </ul>
       </div>
       <div class="adminlogin">
       
        <div class="remember">下次直接登录 <input type="checkbox" value="true" name="remember" />
       <input type="hidden" value="<?php echo $redirect; ?>" name="redirect"/>
       <input type="hidden"  name="log" value="1" />
       <input type="hidden" value="1" name="dopost"/></div> 
       <div class="btnmodify">
       <INPUT id=btnmodify type=image src="<?php echo base_url('public/admin/images/login.jpg');?>" value=登录 name=btnmodify /></div>
       </div>
     </form>
   </div>
   <div class="admin_foot">Copyright &copy; 2011-2012 <a href="/">返回首页</a> </div>
</div>

</body>
</html>