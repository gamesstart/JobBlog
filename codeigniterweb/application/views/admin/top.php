<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title>
</head>

<body>
<link href="<?= base_url('public/admin/style/style.css');?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('public/script/jquery.min.js');?>"></script>
<!--[if lte IE 6]>
<script type="text/javascript" src="<?php echo base_url('public/script/jquery.pngFix.js');?>"></script>
<!-- [endif] -->
<div class="top">
<div class="toplogo"><img src="<?php echo base_url('public/admin/images/logo.png')?>" alt="" /></div>
<div class="topmenu">
<ul id="top_menu">
<li><span class="current"><a href="<?= base_url($this->config->item('admin_folder').'/right') ?>" target="mainFrame">常规管理</a></span></li>
</ul>
</div>
<div class="nav">
<ul>
<li class="now_time">
现在时间：<?= date('Y年m月d日   H点i 分s 秒')?></li>
<li class="now_out"> <a href="<?=base_url($this->config->item('admin_folder').'/login/logout');?>" target="_top">安全退出</a></li>
<li class="now_home"><a href="<?=site_url();?>"  target="_blank">访问首页</a></li>
</ul>
</div>

</div>


</body>
</html>
