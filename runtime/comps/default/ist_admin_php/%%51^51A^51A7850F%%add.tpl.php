<?php /* Smarty version 2.6.18, created on 2017-03-15 14:06:13
         compiled from index/add.tpl */ ?>
<!DOCTYPE html>
<html lang="Zh-cn">
<head>
	<title>Add</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h2>Add</h2>
		<form name="add" method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/insert">
			<table border="1" width="800px">
				<tr>
					<th>Title</th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="title" size="100"></td>
				</tr>
				<tr>
					<th>Date(YYYY-MM-DD)</th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="date" ></td>
				</tr>
				<tr>
					<th>Content</th>
				</tr>
				<tr>
					<td>
						<textarea rows="20" cols="120" name="content">
						</textarea>
					</td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Submit"></td>
			</table>
		</form>
	</center>
</body>
</html>