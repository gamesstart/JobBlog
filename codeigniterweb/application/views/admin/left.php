<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<link href="<?php echo base_url('public/admin/style/style.css');?>"	rel="stylesheet" type="text/css" />

<style>
html {
	overflow-x: hidden;
}
</style>

<base target="main" />

</head>

<body>

	<div class="left">
		<ul>
			<li class="libg01"><a href="<?php echo $curl_0; ?>"
				target="mainFrame"><?php echo $cname_0;?></a></li>
			<li class="libg01"><a href="<?php echo $curl_1; ?>"
				target="mainFrame"><?php echo $cname_1;?></a></li>
			<li class="libg02">
				<dl>
					<dt>技术支持</dt>
					<dd>&nbsp;Tel：<?php echo $this->config->item('Team_tel');?></dd>
					<dd>&nbsp;QQ：<?php echo $this->config->item('Team_qq');?></dd>
					<dd>&nbsp;团队：<?php echo $this->config->item('dev_Team');?></dd>
					<dd>
						&nbsp;网站：<?php echo anchor($this->config->item('Team_url'),$this->config->item('dev_Team'),'target="_blank"'); ?>
					</dd>
				</dl>
			</li>
		</ul>
	</div>
	<script language="JavaScript">

<!--

	function refreshMainFrame(url)

	{

		parent.main.document.location = url;

	}

/*	if (document.anchors(0))

	{

		refreshMainFrame(document.anchors(0).href);

	}*/

//-->

</script>

</body>

</html>