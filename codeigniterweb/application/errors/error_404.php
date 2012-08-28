<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>404 Page Not Found</title>
<style type="text/css">
.box {
	width: 600px;
	height: 450px;
	border: 2px solid #e9e9e9;
	margin: 50px auto 0;
	text-align: center;
}

.box h1 {
	background: #f6f6f6;
	border-bottom: 1px solid #e9e9e9;
	padding: 10px;
	margin: 0;
	color: #333;
}

.msg404 {
	font-size: 40px;
	padding-top: 268px;
	background: url(/public/images/404.png) no-repeat center top;
}

.bot {
	height: 20px;
	line-height: 20px;
	color: #787878;
	background: #f6f6f6;
	margin-top: 5px;
	cursor: pointer;
	border-top: 1px solid #e9e9e9;
}
</style>
</head>
<body>
	<div class="box">
		<h1><?php echo $heading; ?></h1>
		<div><?php echo $message; ?></div>
		<div class="msg404">Oops! Page Not Found...</div>
		<div class="bot" onclick="back();">GO BACK TO HOME</div>
	</div>
</body>

<script type="text/javascript">
function back(){
	location.href="/";
}
</script>
</html>
