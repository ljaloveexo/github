<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
</head>
<body>
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
			</body>
			</html>