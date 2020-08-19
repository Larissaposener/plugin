<?php

	function shortcode_top_autores_front_end(){
//php o get pega os usuarios pra gente
$dados = get_users(array("orderby"=>"post_count","order"=>"DESC"));

			echo "<h1>Top Autores</h1>";
			echo "<p>Uma lista de usuario que mais postaram em toda historia desse site</p>";

			foreach ($dados as $dado) {
				echo "<hr>";
				
				echo get_avatar($dado->ID)."<br>"; //imagem para o usuario
				echo "<bold>Nome: ".esc_html($dado->user_nicename)."</bold><br>";
				echo "<bold>Email: ".esc_html($dado->user_email)."</bold><br>";
				

				if(empty($dado->user_url)){ //verifica se a variavel esta vazia
					$dado->user_url = "Esse não tem site";
				}

				echo "<bold>Numero de posts: ".count_user_posts($dado->ID)."</bold><br>";

				echo "<bold>Site: ".$dado->user_url."</bold><br>";
				$link = get_author_posts_url($dado->ID);
				echo "<br><a href='$link'><button type='button' class='btn btn-danger'>Visualizar Posts</button></a>";

			}
		}

		function shortcode_top_autores_register(){
			add_shortcode('top-autores','shortcode_top_autores_front_end');

		}

		add_action('init','shortcode_top_autores_register');
 ?>

