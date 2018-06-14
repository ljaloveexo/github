<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >

<html>

<head>

<title>用户操作页面</title>

<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">

<link rel="stylesheet" href="/classroomorder_ThinkPHP/Public/css/style2.css" media="screen"
	type="text/css" />
<script src="/classroomorder_ThinkPHP/Public/js/fresh.js"></script>
</head>

<body onload="date();">

	<span class='bckguser'></span>
	<header>
	<h1>
		<a id="my_4"> 教室预订</a>
	</h1>
	<nav class="navigation">
	<ul>
		<li>
						<a data-title="Team" href="/classroomorder_ThinkPHP/index.php/Index/orderUser">教室预订</a>
					</li>
					<li>
						<a data-title="Diary" href="orderresultUser.html">预订结果</a>
					</li>
					<li>
						<a data-title="Team" href="/classroomorder_ThinkPHP/index.php/Index/infoUserFind">个人信息</a>
					</li>
					<li>
						<a data-title="Exit" href="/classroomorder_ThinkPHP/index.php/Index/index">退出</a>
					</li>
	</ul>
	</nav> </header>
	<div style="float: right; width: 87%">
		<div class='title' style="width: 100%">
			<h2>order</h2>
			<h2 style="clear: both; margin-right: 197px;">重庆师范大学教室预订系统</h2>
			<a href='#' title='Profil' style="margin: 0; margin-right: 20px">Hello,<?php echo (session('user')); ?>
				! </a>
		</div>
		<div style="clear: both"></div>
		<div class="my_1">
			<p class="my_2">当前位置：用户操作&gt;个人信息</p>
		</div>
		<div align="center">
			<div class="my_3" style="padding-bottom: 20px;">

				
					<table id="order"
						style="text-align: left; color: #000; background-color: #EAEAEA; margin-top: 69px; height: 300px; border: #A9C7DB solid 1px; border-collapse: collapse;"
						align="center">


						<tr>
							<th>日期：</th>
							<td><input type="date" name="date" class="Wdate"
								min='2018-05-28' max='2018-12-31' id="Wdate" /></td>
						</tr>

						<tr style="background-color: white;">
							<th>时间：</th>
							<td><select name="time" id="time"
								style="width: 100px; height: 25px">

									<option value="1-2节">1--2 节</option>
									<option value="3-4节">3--4 节</option>
									<option value="noon">中 午</option>
									<option value="5-6节">5--6 节</option>
									<option value="7-8节">7--8 节</option>
									<option value="9-11节">9--11 节</option>

							</select></td>
						</tr>
						<tr style="background-color: white;">
							<th>编号：</th>

							<td><select name="number" id="selectNumber">
									<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classroomorder): $mod = ($i % 2 );++$i;?><option value="<?php echo ($classroomorder["number"]); ?>"><?php echo ($classroomorder["number"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select> <input class="query" type="button" value="查询"
								onclick="add_engineer_modal_submit()" /></td>

						</tr>


						<tr>
							<div id="capacity">
								<th>可容人数（请依据实情选择）：</th>
								<td><span id="showNum"></span></td>
							</div>
						</tr>
						<tr style="background-color: white;">
							<div id="Conf">
								<th>教室配置：</th>
								<td><span id="showConf"></span></td>
							</div>
						</tr>
						<tr>
							<div id="reason">
								<th>预订原因：</th>
								<td><input type="text" placeholder="例如：社团活动"
									style="width: 300px; height: 25" name="reason" id="reason" /></td>
							</div>
						</tr>
					</table>
					<input class="query" value="预订"
						style="margin-top: 20px; width: 230px; height: 30px;"
						type="button" onclick="order_result();">
			  
			</div>

		</div>
	</div>
	<footer
		style="bottom: 0; position: absolute; color: black; padding-left: 500px; font-size: 0.8em;">Copyright
	© 2017 www.cqnu.com. All Rights Reserved. 重庆师范大学版权所有</footer>
    
	<p style="position:absolute;margin-top: 151px;margin-left: 260px;font-weight: bold;color: red;padding-bottom: 3px;border-bottom: grey dashed 1px;width: 928px;">注：1、学生使用教室预订功能，只能提前两天预订。2、学生不可随意预订，一经查处，将按学生违纪处理。</p>
	<script src='/classroomorder_ThinkPHP/Public/js/jquery.js'></script>

	<script src="/classroomorder_ThinkPHP/Public/js/index.js"></script>
    <script src="/classroomorder_ThinkPHP/Public/js/date.js"></script>
    <script src="/classroomorder_ThinkPHP/Public/js/order_result.js"></script>
</body>

</html>