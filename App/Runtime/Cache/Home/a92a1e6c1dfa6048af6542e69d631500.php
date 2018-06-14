<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html class="login-alone">
<head>


<title>重庆师范大学教室预订系统管理员登录页面</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">
<link href="/classroomorder_ThinkPHP/Public/css/screen.css?v=3.9" media="screen, projection"
	rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/classroomorder_ThinkPHP/Public/css/base.css?v=3.9">

<link rel="stylesheet" type="text/css" href="/classroomorder_ThinkPHP/Public/css/login.css">
<script type="text/javascript" src="/classroomorder_ThinkPHP/Public/js/check.js"></script>
<script type="text/javascript" src="/classroomorder_ThinkPHP/Public/js/check2.js"></script>
</head>


<body background="/classroomorder_ThinkPHP/Public/images/bg.png">
	<div class="logina-logo">
		<h6>欢迎来到重庆师范大学教室预订系统</h6>
	</div>
	<div class="logina-main main clearfix">
		<h1>登  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp录</h1>
		<span style="position：absolute;display:inline-block;/*! margin-left:-38px; */margin-top:193px;/*! position: absolute; */width: 113px;">看不清，请点击</span>
		<div class="tab-con" >
		<span id="s1" style="display:block;width:500px;margin-left:370px;position:absolute;margin-top:43px;color:#ff0000;"></span>
		<form id="form-login" name="form1" method="post" action="/classroomorder_ThinkPHP/index.php/Home/Index/login"  >
			
				<div id='login-error' class="error-tip"></div>
				<table border="0" cellspacing="0" cellpadding="0" style="padding-top:-10px">
					<tbody style="text-align: center; margin: 0 auto;">
					
						<tr >
							<th >账户：</th> 
							
							<td width="245"><input id="name" type="text" name="account" onfocus=
							"check()" onblur="check()">
							</td>
							
							
						</tr>
						<tr>
							<th>密码：</th>
							<td width="245"><input id="password" type="password"
								name="password"></td>
							<td></td>
						</tr>
						<tr>
							<th>验证码：</th>
							<td >
							<input id="checkCode" type="text" name="checkCode" style="width:100px"></td>
							
							
							<img src="http://localhost:8080/classroomorder_ThinkPHP/index.php/Home/Index/createCode?0.4699472511103636?0.19892302593047795?0.3786960395830272" style="width:121px;height:35px;position:absolute;margin-top:132px;margin-left:240px;" onclick="this.src=this.src+'?'+Math.random()">
							
						   
							
							
					
						</tr>
						
						
						
						<tr class="find">
							<th></th>
							<form id="test">
							<td>
							
								<input style="height: auto;margin-left:20px" id="login" type="radio"
								name="login" value="user">学生
								<input style="height: auto; margin-left:90px" id="login" type="radio"
								name="login" value="admin">管理员
								
							</td>
							
							<td></td>
						</tr>						
						<tr>
							<th></th>
							<td width="245"><input class="Login" type="submit"
								value="登  录" onclick=" check2()"/></td>
							
							<td></td>
						</tr>
					</tbody>
				</table>				
			</form>	
				
		</div>
		</div>


		<footer>Copyright © 2017 www.cqnu.com. All Rights Reserved.
		重庆师范大学版权所有</footer>
</body>
</html>