<?php /* Smarty version 2.6.18, created on 2017-03-15 15:03:52
         compiled from login/index.tpl */ ?>
<html>
	<head>
		<title>Login</title>
	</head>
	<center>
		<form action="<?php echo $this->_tpl_vars['url']; ?>
/login" method="post">
			<h2>Login</h2>
			<table border="1" width="300" align="center">
				<tr>
					<th>Username</th>
					<td><input type="text" size="20" name="username"></td>
				</tr>
				<tr>
					<th>Password</th><td><input type="password" size="20" name="password"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</center>
</html>