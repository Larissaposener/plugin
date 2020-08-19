<?php 
	/* 
	Plugin Name: Top Autores
	Author:Larissa Posener
	Description: Gera uma lista com os autores que mais postam atraves de um sort
	Version:1.0
	Author URI:https://google.com
*/
		 //php o get pega os usuarios pra gente
	define('DIRETORIO_RAIZ_TOP_AUTORES', Plugin_dir_path(__FILE__)); //devolve caminho absoluto do seu arquivo a FILE pela o diretorio raiz de todo plugin

	require_once(DIRETORIO_RAIZ_TOP_AUTORES.'shortcodes/top-author-shortcode.php');
	require_once(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/WidgetTopAutores.php');

	function registrar_widgets_do_plugin_top_autores(){
		register_widget('WidgetTopAutores');

	}

	add_action('init','shortcode_top_autores_register');
	add_action('widgets_init','registrar_widgets_do_plugin_top_autores');
	 ?>