<html>
	<head>
		<title>Login</title>
	</head>
	<center>
		<form action="<{$url}>/login" method="post">
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