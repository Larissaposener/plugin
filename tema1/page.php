<?php get_header();  ?>
<!--<?php //get_header('personalizado'); ?>-->
<div class="container"> <!--São eles que permitem rodar múltiplos sistemas isolados dentro de um sistema operacional real(tipo caixote)-->
	<h1><?php single_post_title();  ?></h1> <!--deixa o titulo do conteudo maior e sobre o que trata, sera mais o post recentes-->
	<div class="row"> <!--criar linha-->
		
		<div class="col-md-9"> <!--criar coluna com espaçamento largo,para nao ficar embaixo-->
			<?php 
				if(have_posts()): the_post();
					the_content();
	            endif;
				
			 ?>
		</div>
		<div class="col-md-3"><!--muda o tamnanho da barra-->
				<?php get_sidebar(); ?>
		</div>

		
	</div>
</div>


<?php get_footer(); ?>
