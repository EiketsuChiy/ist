<?php /* Smarty version 2.6.18, created on 2017-03-15 13:04:00
         compiled from index/details.tpl */ ?>
<!DOCTYPE html>
<html lang="Zh-cn">
<head>
	<title>Details</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h2>Details</h2>

		<table style="width: 800px;margin-top: 20px" border="1px">
			<tr>
				<th>ID</th>
				<td><?php echo $this->_tpl_vars['id']; ?>
</td>
			</tr>
			<tr>
				<th>Title</th>
				<td><?php echo $this->_tpl_vars['title']; ?>
</td>
			</tr>
			<tr>
				<th>Date</th>
				<td><?php echo $this->_tpl_vars['date']; ?>
</td>
			</tr>
			<tr>
				<th colspan="2">Content</th>
			</tr>
			<tr>
				<td colspan="2">
					<p style="text-align: left;"><?php echo $this->_tpl_vars['content']; ?>
</p>
				</td>
			</tr>

			<tr>
			<td colspan="2">&nbsp</td>
			</tr>

			<tr>
				<th>Control</th>
				<td align="center">
					<a href="<?php echo $this->_tpl_vars['url']; ?>
/index">Back to list</a>&nbsp&nbsp&nbsp&nbsp
					<a href="<?php echo $this->_tpl_vars['url']; ?>
/edit/id/<?php echo $this->_tpl_vars['id']; ?>
">Edit</a>&nbsp&nbsp&nbsp&nbsp
					<a href="<?php echo $this->_tpl_vars['url']; ?>
/delete/id/<?php echo $this->_tpl_vars['id']; ?>
" style="color: red">Delete</a>
				</td>
			</tr>
		</table>

	</center>
</body>
</html>