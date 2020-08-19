<?php 
	// sempre colocar letra maiuscula para toda primeira letra da palavra da funcao
	
	class WidgetTopAutores extends WP_Widget{
		public function __construct(){  //__construct() vai ser sempre o primeiro metodo que a classe vai execultae obs configurar dentro 

			$dado = array("classname"=>"WidgetTopAutores","description"=>"Um Widgte que lista em ordem decrescente os autores que mais postam");

			parent::__construct("widget_top_autores","Top Autores", $dado);


		}

		//public function form(){}

	//public function widget(){require(DIRETORIO_RAIZ_TOP_AUTORES.'widget_top_autores_front_end.php');}


}


 ?>		
