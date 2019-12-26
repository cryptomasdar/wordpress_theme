<?php 
/*
 * Overide the default search form
 * */
 ?>
<form action="/" method="get" accept-charset="utf-8">
	<label for="search">Search</label>
	<input type="text" value="<?php the_search_query(  ); ?>" name="s" id="search" required/>
	<button type="submit">Search!</button>
</form>
