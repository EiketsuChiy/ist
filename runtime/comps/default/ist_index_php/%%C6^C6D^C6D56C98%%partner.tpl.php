<?php /* Smarty version 2.6.18, created on 2017-03-13 15:23:51
         compiled from index/partner.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2>合作伙伴</h2>
<div class="panel panel-default" style="width:60%">
	<div class="panel-heading">Cooperative Partner</div>
	<table class="table">
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Website</th>
		</tr>
		<?php $_from = $this->_tpl_vars['x']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['n']['id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['n']['name']; ?>
</td>
				<td><a href="<?php echo $this->_tpl_vars['n']['website']; ?>
">Go</a></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>