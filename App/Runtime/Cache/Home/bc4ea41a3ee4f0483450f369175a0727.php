<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE hmtl>
<hmtl>
<head>
</head>
<body>
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
</body>
</hmtl>