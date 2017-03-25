<?php /* Smarty version 2.6.18, created on 2017-03-15 10:57:56
         compiled from public/header.tpl */ ?>
<!doctype html>
<html lang="ZH-cn">
	<head>
		<meta charset="utf-8">
		<title>IST</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['public']; ?>
/css/reset.css">
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">
			var initializationTime=(new Date()).getTime();
			function showTime()
			{
			var now=new Date();
			var year=now.getFullYear();
			var month=now.getMonth();
			var day=now.getDate();
			var hours=now.getHours();
			var minutes=now.getMinutes();
			var seconds=now.getSeconds();
			document.all.show.innerHTML=""+year+"-"+month+"-"+day+"  "+hours+":"+minutes+":"+seconds+"";
			var timeID=setTimeout(showTime,1000);
			}
		</script>
	</head>
	
	<body onload="showTime()">
	<center>
		<div class="banner" style="background-color:#F0F0F0">
			<div style="height: 50px">
			</div>
			<div class="logo">
				<img src="<?php echo $this->_tpl_vars['public']; ?>
/images/logo.png"  alt="ist logo">
			</div>
			<div class="page-header" style="border-bottom: 0">
	  			<h1>Information Software Technology</h1>
			</div>
			<h3>
				<label id="show">LocalTime</label>
			</h3>	
		</div>
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
				<ul class="nav nav-tabs">
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index">Index</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/news/index">News</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/profile">Studio Profile</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/main_biz">Main Business</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/product">Product Solutions</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/app_case">Application Case</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/partner">Cooperative Partner</a></li>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/about">About Us</a></li>
				  <p class="navbar-text"></p>
				  <p class="navbar-text"></p>
				  <p class="navbar-text"></p>
				  <p class="navbar-text"></p>
				  <li role="presentation"><a href="<?php echo $this->_tpl_vars['root']; ?>
/admin.php/index">Manage</a></li>
				</ul>
  			</div>
		</nav>
