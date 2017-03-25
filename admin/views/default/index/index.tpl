<!DOCTYPE html>
<html lang="Zh-cn">
<head>
	<meta charset="utf-8">
	<title>Manage Index</title>
</head>
<body>
	<h2 align="center">Manage Index</h2>
	<center>
	<a href="<{$app}>/login/logout">Logout</a>

		<table border="1px" width="800px">
			<tr>
				<th>No.</th>
				<th>Title</th>
				<th>Date</th>
				<th>Details</th>
				<th>Control</th>
			</tr>
			<{foreach from=$x item=n}>
				<tr>
					<td><{$n.id}></td>
					<td><{$n.title}></td>
					<td><{$n.date}></td>
					<td>
						<a href="<{$url}>/details/id/<{$n.id}>">Go</a>
					</td>
					<td>
						<a href="<{$url}>/edit/id/<{$n.id}>">Edit</a>
						<a href="<{$url}>/delete/id/<{$n.id}>" style="color: red">Delete</a>
					</td>
				</tr>
			<{/foreach}>
			<tr>
				<td colspan="5" align="center"><a href="<{$url}>/add">Add</a></td>
			</tr>
		</table>
	</center>
</body>
</html>