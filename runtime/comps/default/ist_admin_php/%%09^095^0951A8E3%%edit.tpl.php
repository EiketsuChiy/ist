<?php /* Smarty version 2.6.18, created on 2017-03-16 16:14:50
         compiled from index/edit.tpl */ ?>
<center>
<h2>Edit</h2>
<div style="width: 800px">
	<form id="form1" name="form1" method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/update">
	   <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
	  <p>
	    <label for="title">Title</label>
	  </p>
	  <p>
	    <input type="text" name="title" id="title" value="<?php echo $this->_tpl_vars['title']; ?>
" />
	  </p>
	  <p>
	    <label for="date">Date</label>
	  </p>
	  <p>
	    <input type="date" name="date" id="date" value="<?php echo $this->_tpl_vars['date']; ?>
" />
	  </p>
	  <p>
	    <label for="content">Content</label>
	  </p>
	  <p>
	    <textarea name="content" id="content" cols="100" rows="10"><?php echo $this->_tpl_vars['content']; ?>
</textarea> 
	  </p>
	  <p>
	    <input type="submit" name="submit" id="submit" value="submit" />
	  </p>
	</form>
</div>
</center>