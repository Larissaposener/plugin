<?php 
//criar funçao e adicionar as pastas bootstrap
function my_wp_scripts(){
  wp_enqueue_style('bootstrap',
		sprintf('%s/assets/css/bootstrap.min.css', get_template_directory_uri()));

  wp_enqueue_style('style', get_stylesheet_uri());

  wp_enqueue_script('bootstrap',
		sprintf('%s/assets/js/bootstrap.min.js', get_template_directory_uri()),
		['jquery'], null, true);

}
// adiocionando uma açao, ou seja,quando for executar os scripts,vai executar a funcao
add_action('wp_enqueue_scripts', 'my_wp_scripts');


add_theme_support('post-thumbnails');
set_post_thumbnail_size(120,120);




/**
 * --------------------------------------------------------------
 * criaçao de Custom Post Types - Larissa 
 * --------------------------------------------------------------
 */
function bootstrap_son_post_type_filmes(){
    $labels = array(
        'name' => "Filmes",
        'singular_name' => "Filme",
        'add_new' => "Adicionar Novo Filme",
        'add_new_label' => "Adicionar Novo Filme",
        'all_item' => "Todos os Filmes",
        'add_new_item' => "Adicionar Novo Filme",
        'edit_item' => "Editar Filme",
        'new_item' => "Novo Filme",
        'view_item' => "Visualizar Filme",
        'search_item' => "Procurar Filme",
        'not_found' => "Nenhum Filme Encontrado",
        'not_found_in_trash' => "Nenhum Filme Na Lixeira"
        
     );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'supports' => array(
        'title','editor','thumbnail','excerpt'
    ),
    'menu_position' => 5,
    'explude_from_search' =>false

     );
register_post_type('filme',$args);
}

add_action('init','bootstrap_son_post_type_filmes');



function bootstrap_son_taxonomias(){
    // Taxonomia Hierarquica
//esse é visual
    $labels = array(
        'name' => "Gêneros",
        'singular_name' => "Gênero",
         'search_items' => "Procurar Gênero",
        'all_items' => "Todos os Gênero",
        'parent_item' => "Gênero Pai",
         'parent_item_colon' => "Gênero Pai",//a hierarquia
          'edit_item' => "Editar Gênero",
          'update_item' => "Atualizar Gênero",
        'add_new_item' => "Adicionar novo Gênero",
        'new_item_name' => "Novo Gênero",
        'menu_name' => "Gênero"
        
     );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_admin_column' => true,//se quer que seja mostrado na coluna
        'query_var' => true,// questao de acesso
        'rewrite' => array("slug"=>"genero") //link personalizado,resumir
    );


    register_taxonomy('genero','filme', $args);//'nome da taxonomia','onde eu quero que as taxonomia seja aplicada se quiser em varis item fazer Array ('page','filmes','tags'),'a variavel $args sempre,foi definido filme e nao filmes


    // Taxonomia NAO Hierarquica - Diretores

    
    // Taxonomia NAO Hierarquica
   //esse é visual
    $labels = array(
        'name' => "Diretores",
        'singular_name' => "Diretor",
         'search_items' => "Procurar Diretor",
        'all_items' => "Todos os Diretores",
        'parent_item' => "Diretor Pai",
         'parent_item_colon' => "Diretor Pai",//a hierarquia
          'edit_item' => "Editar Diretor",
          'update_item' => "Atualizar Diretor",
        'add_new_item' => "Adicionar novo Diretor",
        'new_item_name' => "Novo Diretor",
        'menu_name' => "Diretor"
        
     );

    $args = array(
        'hierarchical' => false, //false nao vai ser hierarquivo
        'labels' => $labels,
        'show_admin_column' => true,//se quer que seja mostrado na coluna
        'query_var' => true,// questao de acesso
        'rewrite' => array("slug"=>"diretores") //link personalizado,resumir
    );
        register_taxonomy('diretores', 'filme', $args);
    }
     add_action('init','bootstrap_son_taxonomias'); //bootstrap_son_post_type_filmes funcao que resiste a taxonomia


    

 ?>
