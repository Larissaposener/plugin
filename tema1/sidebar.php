<?php printf("<h3>Pesquise</h3>"); get_search_form(); ?>
<h3>Categorias da Son</h3>
<ul class="list-group"><!--vai listar as categorias-->
	<?php
	$categories = get_categories();
	foreach ($categories as $category):
		printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',//listar categorias
		 get_category_link ($category->term_id),//as categorias vao se numeradas
		 sprintf("ver post de %s", $category->name),
		  $category->name);
		  
	 	
	endforeach;
	 ?>

</ul>
<br/>
<h3>Tags da Son</h3>
<ul class="list-group">
<?php
	$tags = get_tags();
	foreach ($tags as $tag):
		printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',//listar categorias
		 get_tag_link ($tag->term_id),//as categorias vao se numeradas
		 sprintf("ver post de %s", $tag->name),
		  $tag->name);
		  
	 	
	endforeach;
	 ?>
</ul>