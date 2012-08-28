<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
</head>

<FRAMESET FRAMEBORDER=10 framespacing=0 border=0 rows="98, *,32">

<FRAME SRC="<?php echo base_url($this->config->item('admin_folder').'/welcome/top') ?>" name="top" FRAMEBORDER=0 NORESIZE SCROLLING='no' marginwidth=0 marginheight=0>

<FRAMESET FRAMEBORDER=0  framespacing=0 border=0 cols="165,7, *" id="frame-body">

	<FRAME SRC="<?php echo base_url($this->config->item('admin_folder').'/left') ?>" FRAMEBORDER=0 id="menu-frame" name="menu">

    <frame src="<?php echo base_url($this->config->item('admin_folder').'/welcome/drag') ?>" name="bar" frameborder="no" scrolling="no">

	<FRAME SRC="<?php echo base_url($this->config->item('admin_folder').'/right') ?>" FRAMEBORDER=0  name="mainFrame">

</FRAMESET>

<FRAME SRC="<?php echo base_url($this->config->item('admin_folder').'/welcome/foot') ?>" name="footer" FRAMEBORDER=0 NORESIZE SCROLLING='no' marginwidth=0 marginheight=0>

</FRAMESET>
 <noframes>
	  <body><p>此网页使用了框架，但您的浏览器不支持框架。</p></body>
  </noframes>

</html>