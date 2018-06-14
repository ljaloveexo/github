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
<link rel="stylesheet" type="text/css" href="/classroomorder_ThinkPHP/Public/css/login.css?v=3.9">
<link rel="stylesheet" type="text/css" href="/classroomorder_ThinkPHP/Public/css/login.css">


</head>
<body background="/classroomorder_ThinkPHP/Public/images/bg.png">
	<div class="logina-logo">
		<h6>欢迎来到重庆师范大学教室预订系统</h6>
	</div>
	<div class="logina-main main clearfix">
		<h1>登  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp录</h1>
		<div class="tab-con" >
		<form id="form-login" method="post" action="/classroomorder_ThinkPHP/index.php/Home/Index/loginUser">
			
				<div id='login-error' class="error-tip"></div>
				<table border="0" cellspacing="0" cellpadding="0" style="padding-top:-10px">
					<tbody style="text-align: center; margin: 0 auto;">
						<tr>
							<th>账户：</th>
							<td width="245"><input id="name" type="text" name="user"></td>
							<td></td>
						</tr>
						<tr>
							<th>密码：</th>
							<td width="245"><input id="password" type="password"
								name="password"></td>
							<td></td>
						</tr>
						<tr class="find">
							<th></th>
							<form id="test">
							<td>
								<input style="height: auto;margin-left:20px" id="user" type="checkbox"
								name="id[]" value="user">学生
								<input style="height: auto; margin-left:90px" id="admin" type="checkbox"
								name="id[]" value="admin">管理员
							</td>
							
							<td></td>
						</tr>						
						<tr>
							<th></th>
							<td width="245"><input class="Login" type="submit"
								value="登  录" /></td>
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