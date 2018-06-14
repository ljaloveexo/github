<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<body>
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
</body>
</head>
</html>