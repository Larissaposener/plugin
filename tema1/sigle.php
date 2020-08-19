<?php  

get_header();

$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?>
					<div class="col-md-<?php echo $main_column_size;?> content-area " id="main-column">
						<main id="main" class="site-main" role="main">
					<?php 
					while (have_posts()) {
						the_post();

						get_template_part('content',get_post_format());

						echo "\n\n";

						bootsTrapBasicPagination();

						echo "\n\n";

						if(comments_open() || '0' != get_comments_number()){
							comments_template();
						}

						echo "\n\n";
					}

					 ?>		
					 </main>				
					</div>
<?php get_sidebar('right');  ?>
<?php get_footer(); ?>