<{include file="public/header.tpl"}>
<button class="btn btn-default btn-md" type="button" style="margin-bottom: 20px;margin-top: 20px">
	<span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
	<a href="<{$url}>">Back to news list</a>
</button>
<div class="panel panel-default" style="width: 800px">
  <div class="panel-heading">
    <h2 class="panel-title"><{$title}></h2>
  </div>
  <div class="panel-body">
  	<p style="text-align: left;">
  		<{$content}>
  	</p>
  </div>
  <div class="panel-footer">
  	<p style="text-align: right;"><{$date}></p>
  </div>
 </div>
<{include file="public/footer.tpl"}>