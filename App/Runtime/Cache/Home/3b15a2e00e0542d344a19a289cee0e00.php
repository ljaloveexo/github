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
        <script src='/classroomorder_ThinkPHP/Public/js/jquery.js'></script>

			<script src="/classroomorder_ThinkPHP/Public/js/index.js"></script>
			<script src="/classroomorder_ThinkPHP/Public/js/modernizr.js"></script>
	    <script src="/classroomorder_ThinkPHP/Public/js/spin.js"></script>
	    <script src="/classroomorder_ThinkPHP/Public/js/search_admin.js"></script>
	</head>
       
	<body>

		<span class='bckg'></span>
		<header>
			<h1>
    教室管理
  </h1>
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
			</nav>
		</header>
		<div style="float:right; width:87% ">
			<div class='title' style="width:100%">
				<h2>record</h2>
				<h2 style="color:black;clear:both;margin-right:197px;">重庆师范大学教室预订管理系统</h2>
				<a href='#' title='Profil' style="margin:0;margin-right:20px">
      Hello administer !
    </a>
			</div>
			<div style="clear: both"></div>
		<div class="my_1">
			<p class="my_2">当前位置：用户操作&gt;个人信息</p>
		</div>
		<div align="center">
			<div class="my_3" style="padding-bottom: 90px;">
				<input style="margin-left: 20px;position: absolute;display: block;border: none;background-color: #444;color: #fff;border-radius: 3px;width: 136px;height: 30px;text-align: center;" value="查询教室" type="button" align="left" onclick="search_admin();" />
                 <input id="search_text"
						style="margin-left: 20px;display:none;position: absolute;color: #000;width: 166px; height: 30px;padding-left:10px;"
						placeholder="请按教室编号查找" type="text" align="left" />
						<input id="search_btn" style=
						
						"margin-left: 204px; position: absolute; display:none; border: none; background-color: #444; color: #fff; border-radius: 3px; width: 49px; height: 27px; " value="查询" type="button" align="left" onclick="roominfo_searchAdmin();">
			

				<span style="font-size: 1.2em; font-weight: bold;display: block;
				margin-top: 50px;">教 室 预 订 记 录 表</span>
                    <div id="server">
                   
					<table id="info" bordercolor="#dadada" border="1" align="center">
					<th>编号</th>
					<th>详细地址</th>
					<th>预订日期</th>
					<th>时间段</th>
					<th>预订人</th>
					<th>预订原因</th>
						<th>预订结果</th>
						
					</tr>
					<tbody align="center" class="tableBody" border="1" id="info_page">
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$orderresult): $mod = ($i % 2 );++$i;?><tr>
							
							<td>&nbsp;<?php echo ($orderresult["number"]); ?></td>
							<td>&nbsp;<?php echo ($orderresult["address"]); ?></td>
							<td>&nbsp;<?php echo ($orderresult["orderdate"]); ?></td>
							<td>&nbsp;<?php echo ($orderresult["time"]); ?></td>
							<td>&nbsp;<?php echo ($orderresult["user"]); ?></td>
							<td>&nbsp;<?php echo ($orderresult["reason"]); ?></td>
							<td>&nbsp;<?php echo ($orderresult["result"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>

					</tbody>
				</table>
				<section id="preview"></section>
				<div id="row-fluid"><?php echo ($data); ?></div>
				<input type="hidden" id="tb" value="orderrecord" />
				<input type="hidden" id="page" value="Index/recordAdmin_page" />
				</div>
			</div>
          </div>
        
			<footer style="bottom: 0; position: absolute; color: black; padding-left: 330px; font-size: 0.8em;">Copyright © 2017 www.cqnu.com. All Rights Reserved. 重庆师范大学版权所有</footer>

			<script>
	    $(".bckg").ready(function(){
	    	   
			    info_page.style.display="none";
			    new Spinner().spin(document.getElementById('preview'));
			   
			    
			   
			    serverRecord();
			   
			

			
		});
</script>	
  <script src="/classroomorder_ThinkPHP/Public/js/serverAdmin.js"></script>
	</body>

</html>