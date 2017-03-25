<{include file="public/header.tpl"}>
<h2>新闻</h2>
<div class="panel panel-default" style="width:80%">
	<div class="panel-heading">News List</div>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Date</th>
			<th>Details</th>
		</tr>
		<{foreach from=$x item=n}>
			<tr>
				<td><{$n.id}></td>
				<td><{$n.title}></td>
				<td><{$n.date}></td>
				<td>
					<button type="button" class="btn btn-default btn-md">
					<a href="<{$url}>/details/id/<{$n.id}>">
						<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>Go
					</a>
					</button>
				</td>
			</tr>
		<{/foreach}>
	</table>
	</div>


<{include file="public/footer.tpl"}>