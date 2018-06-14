<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
</head>
<html>
<body>

				    <div id="server">
					<table id="info" bordercolor="#dadada" border="1" align="center">
						<tr>
							<th>id</th>
							<th>编号</th>
							<th>详细地址</th>
							<th>预订日期</th>
							<th>时间段</th>
							<th>预订人</th>
							<th>预订原因</th>
							<th>操作</th>

						</tr>

						<tbody class="tableBody" align="center" id="info_page">
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$orderoperation): $mod = ($i % 2 );++$i;?><tr>
								<td>&nbsp;<?php echo ($orderoperation["id"]); ?></td>
								<td>&nbsp;<?php echo ($orderoperation["number"]); ?></td>
								<td>&nbsp;<?php echo ($orderoperation["address"]); ?></td>
								<td>&nbsp;<?php echo ($orderoperation["orderdate"]); ?></td>
								<td>&nbsp;<?php echo ($orderoperation["time"]); ?></td>
								<td>&nbsp;<?php echo ($orderoperation["user"]); ?></td>
								<td>&nbsp;<?php echo ($orderoperation["reason"]); ?></td>
								<td><input name="id[]" id="id[]" type="checkbox"
									value="<?php echo ($orderoperation["id"]); ?>" /></td>



							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					<section id="preview"></section>
				<div id="row-fluid"><?php echo ($data); ?></div>
				<input type="hidden" id="tb" value="orderoperation" />
				<input type="hidden" id="page" value="Index/operate_page" />
				<div id="check" style="margin-left:900px;position:absolute;margin-top:8px;">
			<input type="radio"  name="check" onclick="selectAll()"/>全选  
			<input type="radio"  name="check" onclick="selectNot()"/>反选
			</div>
				
					</div>
                








</body>
</html>