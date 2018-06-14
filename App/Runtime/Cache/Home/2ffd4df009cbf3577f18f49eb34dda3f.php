<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
      <script src='/classroomorder_ThinkPHP/Public/js/jquery.js'></script>

		<script src="/classroomorder_ThinkPHP/Public/js/index.js"></script>
      <script src="/classroomorder_ThinkPHP/Public/js/password_reset.js"></script>
</head>
<body>
<form name="form" method="post" action="javascript:return false;">
<table style="padding-top:-10px" cellspacing="0" cellpadding="0" border="0">
	<tbody style="margin: 0 30%; display: block">
			<tr>
				<td>学号：<input name="account" id="account"></td>

			</tr>
			<tr>
                  
                     <td>姓名：<input  name="name" id="name"></td>
                    
                   
				    </tr>
				    <tr>
                    <td>学院：<input  name="academy" id="academy"></td>
                     
				    </tr>
				    
				    
				     <tr>
				      <td>专业：<input name="major" id="major"></td>
				       </tr>	
				       <tr>
                   <td>电话：<input  name="tel" id="tel"></td>
                     
				    </tr>
                        <tr>
                 <td>邮箱：<input  name="mail" id="name"></td>
				    </tr>
		<tr>
			<td>
			<span id="box">
			<input id="password" name="password" type="password"></span></td>
			
		</tr>
		
	</tbody>
	</table>
	<button onclick="password_reset();">重置</button>
	</form>
	<img id="image" src="/classroomorder_ThinkPHP/Public/images/password_visibility.png" style="opacity:0.4;" onclick="password_show();">
</body>
</html>