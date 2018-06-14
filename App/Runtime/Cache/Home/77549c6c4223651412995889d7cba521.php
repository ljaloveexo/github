<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

	<head>
		<title>管理员操作页面</title>

		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="This is my page">

		<link rel="stylesheet" href="/classroomorder_ThinkPHP/Public/css/style.css" media="screen" type="text/css" />

	</head>

	<body>

		<span class='bckg'></span>
		<header>
			<h1>教室管理</h1>
			<nav>
				<ul>
					<li><a data-title='Team' href="/classroomorder_ThinkPHP/index.php/Home/Index/classroomFindAll">教室信息</a>				
		</li>
		
		<li><a data-title='Timeline' href="/classroomorder_ThinkPHP/index.php/Home/Index/orderoperationFindAll">预订处理</a>
		</li>
		<li><a data-title='Search1' href="/classroomorder_ThinkPHP/index.php/Home/Index/orderrecordFindAll">预订记录</a>
		</li>
		<li><a data-title='Search1' href="/classroomorder_ThinkPHP/index.php/Home/Index/adminfindAll">管理员管理</a>
		</li>
		<li><a data-title='Exit' href="/classroomorder_ThinkPHP/index.php/Home/Index/adminsterlogin">退出</a></li>
				</ul>
			</nav>
		</header>
		<div style="float:right; width:87% ">
			<div class='title' style="width:100%">
				<h2>state</h2>
				<h2 style="color:black;clear:both;margin-right:197px;">重庆师范大学教室预订管理系统</h2>
				<a href='#' title='Profil' style="margin:0;margin-right:20px">
      Hello administer !
    </a>
			</div>
			<div style="clear:both"></div>

			<div style="width:100%">
				<form action="search.action" name="search" method="post">
					<table border="0" align="center" cellpadding="0" cellspacing="0" class="tab_search" style="margin-top: 27px;margin-left:99px;">
						<tr>
							<td>
								<input type="text" name="keyword" title="Search" class="searchinput" id="searchinput" placeholder="-请输入教室编号-" size="20" />
							</td>
							<td>
								<input type="image" width="21" height="17" class="searchaction" alt="Search" src="/classroomorder_ThinkPHP/Public/images/magglass.gif" border="0" hspace="2" />
							</td>
						</tr>

					</table>

				</form>
				<span style="margin-top: 50px;margin-left: 500px; font-size: 1.2em;font-weight: bold;">教 室 预 订 状 态 表</span>
				<table align="center" border="5" style="border-color: #F0F8FF;/*! font-color: 

white; */color: black;background-color: #EAEAEA;margin-left: 99;margin-top:20px;width: 1000px;margin-right: 328px;">
					<tr>
						<th>编号</th>
						<th>详细地址</th>
						<th>1-2节</th>
						<th>3-4节</th>
						<th>中午</th>
						<th>5-6节</th>
						<th>7-8节</th>
						<th>9-11节</th>
						<th>可容人数</th>
					</tr>
					<tbody class="tableBody">

						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>

						</tr>
						

					</tbody>
				</table>
			</div>

			<footer style="bottom: 0; position: absolute; color: black; padding-left: 330px; font-size: 0.8em;">Copyright © 2017 www.cqnu.com. All Rights Reserved. 重庆师范大学版权所有</footer>

			<script src='/classroomorder_ThinkPHP/Public/js/jquery.js'></script>

			<script src="/classroomorder_ThinkPHP/Public/js/index.js"></script>

	</body>

</html>