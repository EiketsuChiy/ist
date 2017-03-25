<center>
<h2>Edit</h2>
<div style="width: 800px">
	<form id="form1" name="form1" method="post" action="<{$url}>/update">
	   <input type="hidden" name="id" value="<{$id}>">
	  <p>
	    <label for="title">Title</label>
	  </p>
	  <p>
	    <input type="text" name="title" id="title" value="<{$title}>" />
	  </p>
	  <p>
	    <label for="date">Date</label>
	  </p>
	  <p>
	    <input type="date" name="date" id="date" value="<{$date}>" />
	  </p>
	  <p>
	    <label for="content">Content</label>
	  </p>
	  <p>
	    <textarea name="content" id="content" cols="100" rows="10"><{$content}></textarea> 
	  </p>
	  <p>
	    <input type="submit" name="submit" id="submit" value="submit" />
	  </p>
	</form>
</div>
</center>