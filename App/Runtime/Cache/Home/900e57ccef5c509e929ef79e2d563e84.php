<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
</head>
<body>
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
</body>
</html>