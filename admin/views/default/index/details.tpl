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
				<td><{$id}></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><{$title}></td>
			</tr>
			<tr>
				<th>Date</th>
				<td><{$date}></td>
			</tr>
			<tr>
				<th colspan="2">Content</th>
			</tr>
			<tr>
				<td colspan="2">
					<p style="text-align: left;"><{$content}></p>
				</td>
			</tr>

			<tr>
			<td colspan="2">&nbsp</td>
			</tr>

			<tr>
				<th>Control</th>
				<td align="center">
					<a href="<{$url}>/index">Back to list</a>&nbsp&nbsp&nbsp&nbsp
					<a href="<{$url}>/edit/id/<{$id}>">Edit</a>&nbsp&nbsp&nbsp&nbsp
					<a href="<{$url}>/delete/id/<{$id}>" style="color: red">Delete</a>
				</td>
			</tr>
		</table>

	</center>
</body>
</html>