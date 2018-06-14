<?php if (!defined('THINK_PATH')) exit();?>﻿





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
	<script src="/classroomorder_ThinkPHP/Public/js/serverAdmin.js"></script>
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
				<h2>manage</h2>
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
				<form action="search.action" name="search" method="post">
				<input style="margin-left: 20px;position: absolute;display: block;border: none;background-color: #444;color: #fff;border-radius: 3px;width: 136px;height: 30px;text-align: center;" value="查询教室" type="button" align="left">

				</form>

				<span style="font-size: 1.2em; font-weight: bold;display: block;
				margin-top: 50px;">管 理 员 信 息 表</span>
                <div id="server">
				<table style="color: black;background-color: white;margin-top:20px;width:96%;
border-collapse: collapse;
" align="center" bordercolor="#dadada" border="1">
					<tr style="background-color: #EAEAEA;">
						<th>ID</th>
						<th>用户名</th>
						<th>密码</th>

					</tr>
					<tbody class="tableBody" align="center" id="info_page">

						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$account): $mod = ($i % 2 );++$i;?><tr>
    <td >&nbsp;<?php echo ($account["id"]); ?></td>
    <td >&nbsp;<?php echo ($account["account"]); ?></td>
    <td >&nbsp;<?php echo ($account["password"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						

					</tbody>
				</table>
					<section id="preview"></section>
				<div id="row-fluid"><?php echo ($data); ?></div>
				</div>
			</div>
</div>
			<footer style="bottom: 0; position: absolute; color: black; padding-left: 330px; font-size: 0.8em;">Copyright © 2017 www.cqnu.com. All Rights Reserved. 重庆师范大学版权所有</footer>
<script>
		
		
		$(".bckg").ready(function(){
			    info_page.style.display="none";
			    new Spinner().spin(document.getElementById('preview'));
			   
			    
			   
			    infoAdmin();
			 console.log(1);
			

			
		});
</script>	


	</body>

</html>