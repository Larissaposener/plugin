<form class="form-horizontal" action="<?php echo home_url('/');?>" method="get">
	<div class="form-group">
		<!--//isso embaixo faz que a busca continue no campo quando clicar s de search-->
		<input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>"> 
	</div>

	<div class="form-group">
		<button class="btn btn-primary" type="submit">ir</button> 
	</div>
</form>

<!--
	<form class="form-horizontal" action="<?php //echo home_url('/');?>" method="get">
	<div class="form-group">
		<input type="search" class="form-control" name="s">
	</div>
</form>
<isso faz a barra de pesquisa, como esta na barra lateral (sidebar), tem que ser chamado logo de inicio
-->