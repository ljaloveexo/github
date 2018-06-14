<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

	<head>

		<title>用户操作页面</title>

		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="This is my page">

		<link rel="stylesheet" href="/classroomorder_ThinkPHP/Public/css/style2.css" media="screen" type="text/css" />

	</head>

	<body>

		<span class='bckguser'></span>
		<header>
			<h1><a id="my_4"> 教室预订</a></h1>
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
			</nav>
		</header>
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
			<div class="my_3" style="height:430px;">

				
					<input id="search_r"
						style="margin-left: 20px; position: absolute; display: block; border: none; background-color: #419ff6; color: #fff; border-radius: 3px; width: 136px; height: 30px; text-align: center;"
						value="查询教室" type="button" align="left" onclick="search_user();" />
                    <input id="search_text"
						style="margin-left: 20px;display:none;position: absolute;color: #000;width: 166px; height: 30px;padding-left:10px;"
						placeholder="请按教室编号查找" type="text" align="left" />
						<input id="search_btn" style=
						
						"margin-left: 204px; position: absolute; display:none; border: none; background-color: #419ff6; color: #fff; border-radius: 3px; width: 49px; height: 27px; " value="查询" type="button" align="left" onclick="server_searchUser();">
				
				<span
					style="margin-top: 50px; font-size: 1.2em; font-weight: bold;text-align: center;">预 订 结 果 表</span>
				<div id="server">
				<table id="info" bordercolor="#dadada" border="1" align="center">
					<tr border="1">
						<th>编号</th>
						<th>详细地址</th>
						<th>预订日期</th>
						<th>时间段</th>
						<th>预订人</th>
						<th>预订原因</th>
						<th>预订结果</th>
						<th>操作</th>

					
				
					
					<tbody class="tableBody" border="1" id="info_page">
                       
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$orderrecord): $mod = ($i % 2 );++$i;?><tr> 

							<td id="0">&nbsp;<?php echo ($orderrecord["number"]); ?></td>
							<td id="1">&nbsp;<?php echo ($orderrecord["address"]); ?></td>
							<td id="2">&nbsp;<?php echo ($orderrecord["orderdate"]); ?></td>
							<td id="3">&nbsp;<?php echo ($orderrecord["time"]); ?></td>
							<td id="4">&nbsp;<?php echo ($orderrecord["user"]); ?></td>
							<td id="5">&nbsp;<?php echo ($orderrecord["reason"]); ?></td>
							<td id="6">&nbsp;<?php echo ($orderrecord["result"]); ?></td>
							<td><a href="/classroomorder_ThinkPHP/index.php/Index/deleteorder/id/<?php echo ($orderrecord["id"]); ?>" onclick="deleteUser();"><img
									src="/classroomorder_ThinkPHP/Public/images/delete.png" width="20" height="20"></a></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
					</tbody>
				</table>
					<section id="preview"></section>
				<div id="row-fluid"><?php echo ($data); ?></div>
				 </div>
			</div>
		</div>
		</div>
		
		<footer
			style="bottom: 0; position: absolute; color: black;  font-size: 0.8em;margin-left:514px;">Copyright
		© 2018 www.cqnu.com. All Rights Reserved. 重庆师范大学版权所有</footer>
		
   
		<script src='/classroomorder_ThinkPHP/Public/js/jquery.js'></script>

		<script src="/classroomorder_ThinkPHP/Public/js/index.js"></script>
		<script src="/classroomorder_ThinkPHP/Public/js/server.js"></script>
		<script src="/classroomorder_ThinkPHP/Public/js/modernizr.js"></script>
		<script src="/classroomorder_ThinkPHP/Public/js/spin.js"></script>
		<script src="/classroomorder_ThinkPHP/Public/js/search_user.js"></script>
		<script src="/classroomorder_ThinkPHP/Public/js/server_searchUser.js"></script>
		<script src="/classroomorder_ThinkPHP/Public/js/operate.js"></script>
		<script>
		
		
		$(".bckguser").ready(function(){
			    info_page.style.display="none";
			    new Spinner().spin(document.getElementById('preview'));
			   
			    
			   
			    server();
			 
			

			
		});
		
		
		
			
		
			
			
		
		
		
		</script>
</body>

</html>