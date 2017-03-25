<?php /* Smarty version 2.6.18, created on 2017-03-15 08:27:01
         compiled from news/details.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<button class="btn btn-default btn-md" type="button" style="margin-bottom: 20px;margin-top: 20px">
	<span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
	<a href="<?php echo $this->_tpl_vars['url']; ?>
">Back to news list</a>
</button>
<div class="panel panel-default" style="width: 800px">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo $this->_tpl_vars['title']; ?>
</h2>
  </div>
  <div class="panel-body">
  	<p style="text-align: left;">
  		<?php echo $this->_tpl_vars['content']; ?>

  	</p>
  </div>
  <div class="panel-footer">
  	<p style="text-align: right;"><?php echo $this->_tpl_vars['date']; ?>
</p>
  </div>
 </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>