<{include file="public/header.tpl"}>
<h2>合作伙伴</h2>
<div class="panel panel-default" style="width:60%">
	<div class="panel-heading">Cooperative Partner</div>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Website</th>
		</tr>
		<{foreach from=$x item=n}>
			<tr>
				<td><{$n.id}></td>
				<td><{$n.name}></td>
				<td><a href="<{$n.website}>">Go</a></td>
			</tr>
		<{/foreach}>
	</table>
	</div>


<{include file="public/footer.tpl"}>