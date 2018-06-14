<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html class="login-alone"><head>


<title>重庆师范大学教室预订系统管理员登录页面</title>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">
<link href="/classroomorder_ThinkPHP/Public/css/screen.css?v=3.9" media="screen, projection" rel="stylesheet" type="text/css">
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
		 <h1>登  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</h1>
		 <span style="position：absolute;display:block;margin-left:521px;margin-top:193px;position: absolute;/*! width: 113px; */z-index: 99;">
		 看不清，请点击
		 </span>
		<div class="tab-con">
		    <span id="s1" style="width:500px;margin-left:370px;position:absolute;margin-top:43px;color:#ff0000;"></span>
		    <form id="form-login" name="form1" method="post" action="/classroomorder_ThinkPHP/index.php/Index/login">
			
				<div id="login-error" class="error-tip"></div>
				<img src="http://localhost/classroomorder_ThinkPHP/index.php/Index/createCode?0.8273207383491573?0.25694649585303386?0.5548665998305841?0.7449164656160631?0.2895857652281132?0.7519236226127605?0.9972467349976664?0.7276379990020132?0.9205506223832899?0.006758245067432944?0.7672493276645501?0.5352869728358396?0.6226952955856146?0.6918446366145092?0.4687725721591076?0.267215699501112?0.9533618025598622?0.9417496275483652?0.42412142922193163?0.937588383364484" style="width:81px;height:31px;position:absolute;margin-top:131px;margin-left:256px;border: grey solid 1px;" onclick="this.src=this.src+'?'+Math.random()"><table style="padding-top:-10px" cellspacing="0" cellpadding="0" border="0">
					<tbody style="/*! text-align: center; */ margin: 0 30%;display:block">
					
						<tr>
						    <td><input id="name" name="account" onblur="check()" placeholder="请输入用户名" type="text"></td>							
						</tr>
						<tr>
						    <td><input id="password" name="password" placeholder="请输入密码" type="password"></td>
						</tr>
						<tr>
 							<td><input id="checkcode" name="checkCode" style="width: 140px;" placeholder="请输入验证码" type="text"></td>
							
							
					        
						</tr>					
						<tr class="find">
							
							
							    <td>
        							<input style="height: auto;margin-left:20px" id="login" name="login" value="user" type="radio">学生
								    <input style="height: auto; margin-left:90px" id="login" name="login" value="admin" type="radio">管理员
								</td>
							
							<td></td>
						</tr>						
						<tr>
							
							<td><input class="Login" value="登  录" onclick=" check2()" type="submit"></td>
							
							<td></td>
						</tr>
					</tbody>
				</table>				
				
				
		</form></div>
	</div>


		<footer>Copyright © 2017 www.cqnu.com. All Rights Reserved.
		重庆师范大学版权所有</footer>

</body></html>