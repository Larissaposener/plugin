<h4>Top Autores: </h4>
<table>
	<tr>
		<th>Nome: </th>
		<th>Post: </th>
	</tr>

<?php 
$dados = get_users(array("orderby"=>"post_count","order"=>"DESC"));

	foreach ($dados as $dados): ?>

		<tr>
			<td><a href="<?php echo get_author_posts_url($dado->ID);?>"><?php echo $dados->user_nicename;?></td></a></td>

			<td><?php echo count_user_posts($dado->ID);?></td>

		</tr>

<?php endforeach  ?>

 </table>