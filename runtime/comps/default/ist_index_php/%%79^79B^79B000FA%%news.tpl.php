<?php /* Smarty version 2.6.18, created on 2017-03-14 11:23:34
         compiled from index/news.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2>新闻</h2>
<div class="panel panel-default" style="width:80%">
	<div class="panel-heading">News</div>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
		</tr>
		<?php $_from = $this->_tpl_vars['x']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['n']['id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['n']['title']; ?>
</td>
				<td><?php echo $this->_tpl_vars['n']['content']; ?>
</td>
				<td><?php echo $this->_tpl_vars['n']['date']; ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>