<?php /* Smarty version 2.6.18, created on 2017-03-15 17:08:33
         compiled from index/index.tpl */ ?>
<!DOCTYPE html>
<html lang="Zh-cn">
<head>
	<meta charset="utf-8">
	<title>Manage Index</title>
</head>
<body>
	<h2 align="center">Manage Index</h2>
	<center>
	<a href="<?php echo $this->_tpl_vars['app']; ?>
/login/logout">Logout</a>

		<table border="1px" width="800px">
			<tr>
				<th>No.</th>
				<th>Title</th>
				<th>Date</th>
				<th>Details</th>
				<th>Control</th>
			</tr>
			<?php $_from = $this->_tpl_vars['x']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['n']['id']; ?>
</td>
					<td><?php echo $this->_tpl_vars['n']['title']; ?>
</td>
					<td><?php echo $this->_tpl_vars['n']['date']; ?>
</td>
					<td>
						<a href="<?php echo $this->_tpl_vars['url']; ?>
/details/id/<?php echo $this->_tpl_vars['n']['id']; ?>
">Go</a>
					</td>
					<td>
						<a href="<?php echo $this->_tpl_vars['url']; ?>
/edit/id/<?php echo $this->_tpl_vars['n']['id']; ?>
">Edit</a>
						<a href="<?php echo $this->_tpl_vars['url']; ?>
/delete/id/<?php echo $this->_tpl_vars['n']['id']; ?>
" style="color: red">Delete</a>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="5" align="center"><a href="<?php echo $this->_tpl_vars['url']; ?>
/add">Add</a></td>
			</tr>
		</table>
	</center>
</body>
</html>