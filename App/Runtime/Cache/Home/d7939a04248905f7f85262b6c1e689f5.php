<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html><head>

<title>管理员操作页面</title>

<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="This is my page">

<link rel="stylesheet" href="/classroomorder_ThinkPHP/Public/css/style.css" media="screen" type="text/css">
	
<script type="text/javascript" src="/classroomorder_ThinkPHP/Public/js/jquery.js"></script>

	<script type="text/javascript" src="/classroomorder_ThinkPHP/Public/js/index.js"></script>
   
    <script src="/classroomorder_ThinkPHP/Public/js/modernizr.js"></script>
	<script src="/classroomorder_ThinkPHP/Public/js/spin.js"></script>
	<script src="/classroomorder_ThinkPHP/Public/js/serverAdmin.js"></script>
	<script src="/classroomorder_ThinkPHP/Public/js/roominfo_add.js"></script>
	<script src="/classroomorder_ThinkPHP/Public/js/search_admin.js"></script>
</head>

<body>

	<span class="bckg"></span>
	<header>
	<h1>教室管理</h1>
	<nav>
	<ul>
		

		<li><a data-title='Team' href="/classroomorder_ThinkPHP/index.php/Index/classroominfoAdmin.html">教室信息</a>				
		</li>
		
		<li><a data-title='Timeline' href="/classroomorder_ThinkPHP/index.php/Index/orderoperateAdmin.html">预订处理</a>
		</li>
		<li><a data-title='Search1' href="/classroomorder_ThinkPHP/index.php/Index/orderrecordAdmin.html">预订记录</a>
		</li>
		<li><a data-title='Search1' href="/classroomorder_ThinkPHP/index.php/Index/manageAdmin.html">管理员管理</a>
		</li>
		<li><a data-title='Exit' href="/classroomorder_ThinkPHP/index.php/Index/index">退出</a></li>
	</ul>
	</nav> </header>
	<div style="float: right; width: 87%">
		<div class="title" style="width: 100%">
			<h2>info</h2>
			<h2 style="color: black; clear: both; margin-right: 197px;">重庆师范大学教室预订管理系统</h2>
			<a href="#" title="Profil" style="margin: 0; margin-right: 20px">Hello
				administer ! </a>
		</div>
		<div style="clear:both"></div>
              <div class="my_1"><p class="my_2">当前位置：用户操作&gt;个人信息</p></div>
              <div align="center">
			<div class="my_3" style="padding-bottom: 53px;">				

			
				
				<input style="margin-left: 20px;position: absolute;display: block;border: none;background-color: #444;color: #fff;border-radius: 3px;width: 136px;height: 30px;text-align: center;" value="查询教室" type="button" align="left" onclick="search_admin();" />
                 <input id="search_text"
						style="margin-left: 20px;display:none;position: absolute;color: #000;width: 166px; height: 30px;padding-left:10px;"
						placeholder="请按教室编号查找" type="text" align="left" />
						<input id="search_btn" style=
						
						"margin-left: 204px; position: absolute; display:none; border: none; background-color: #444; color: #fff; border-radius: 3px; width: 49px; height: 27px; " value="查询" type="button" align="left" onclick="roominfo_searchAdmin();">
			
			
			<div class="info" style="margin-top: 50px;text-align: left;margin-left: 22px;">

				<input style="height: 25px; width: 180px" id="number" name="number" placeholder="教室编号" type="text" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="height: 25px; width: 460px" id="address" name="address" placeholder="教室地址" type="text" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="height: 25px; width: 200px" id="capacity" name="capacity" placeholder="可容纳人数" type="text" />&nbsp;&nbsp; 
				<input style="border: none; background-color: #444; color: #fff; border-radius: 3px; width: 49px; height: 27px;" class="Login" value="添加" type="button" onclick="roominfoAdd();" />
			</div>
          



			<span style="font-size: 1.2em; font-weight: bold;display: block;">教 室 信 息 详 情 表</span>
			<div id="server">
			<table id="info" bordercolor="#dadada" border="1" align="center">
				<tbody>
				<tr>
				
					<th>编号</th>
					<th>详细地址</th>
					<th>可容人数</th>
					<th>操作</th>
				</tr>
				<tbody align="center" class="tableBody" id="info_page">
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$classroominfo): $mod = ($i % 2 );++$i;?><tr>
					
						<td>&nbsp;<?php echo ($classroominfo["number"]); ?></td>
						<td>&nbsp;<?php echo ($classroominfo["address"]); ?></td>
						<td>&nbsp;<?php echo ($classroominfo["capacity"]); ?></td>
						<td><a href="/classroomorder_ThinkPHP/index.php/Index/deleteclassroom/id/<?php echo ($classroominfo["id"]); ?>"><img src="/classroomorder_ThinkPHP/Public/images/delete.png" width="20" height="20"></a></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
				<section id="preview"></section>
				<div id="row-fluid"><?php echo ($data); ?></div>
				<input type="hidden" id="tb" value="classroominfo" />
				<input type="hidden" id="page" value="Index/roominfo_page" />
			</div>
		
		</div>
	</div>
<footer style="bottom: 0; position: absolute; color: black; padding-left:22%; font-size: 0.8em;">Copyright © 2017 www.cqnu.com. All Rights Reserved. 重庆师范大学版权所有</footer>

<script>
		
		
		$(".bckg").ready(function(){
			    info_page.style.display="none";
			    new Spinner().spin(document.getElementById('preview'));
			   
			    
			   
			    serverAdmin();
			 
			

			
		});
</script>	




</body></html>