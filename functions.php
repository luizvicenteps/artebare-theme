<?php 

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'customized', get_template_directory_uri() . '/assets/css/customized.css', array(), '3.3.7', 'all');
	//wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
	// Enfileirando estilos e scripts próprios
	//wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	//wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
	 //wp_enqueue_script('jQuery');
	
	wp_enqueue_script( 'jqueryMin', get_template_directory_uri(). '/assets/js/jquery.min.js', array(), null, true);	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), null, true);	
	wp_enqueue_script( 'wow', get_template_directory_uri(). '/assets/js/wow.min.js', array(), null, true);	
	wp_enqueue_script( 'slick', get_template_directory_uri(). '/assets/js/slick.min.js', array(), null, true);	
	wp_enqueue_script( 'custom', get_template_directory_uri(). '/assets/js/custom.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus
register_nav_menus(
	array(
		'menu_superior' => 'Menu Superior',
		'menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé'
	)
);

// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));

// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Sidebar Single Posts',
			'id'		=> 'sb-singleright',
			'description'	=> 'Barra lateral da Single Posts',
			//'before_widget'	=> '<div class="media wow fadeInDown animated">',
			//'after_widget'	=> '</div>',
			'before_title'	=> '<h2>',
			'after_title'	=> '</h2>',			
		)
	);
}
/**
 *FILTRO PARA TAMANHA MÁXIMO DE PALAVRAS the_except
 * Filter the except length to 10 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/**
 *PERSONALISA O LINK DE LEIA MAIS the_except
 * 
 */
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"> [...]</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




function bloglite_breadcrumb() {
    global $post;
    //echo '<ul id="trilha">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li>');
            if (is_single()) {
               	echo '<li><a href="';
                echo get_permalink();
                echo '">';
        		the_title();
                echo '</a></li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) { single_tag_title();}
    elseif (is_day()) { echo "<li>Arquivo de "; the_time('j \d\e F \d\e Y'); echo'</li>'; }
    elseif (is_month()) { echo "<li>Arquivo de "; the_time('F \d\e Y'); echo'</li>'; }
    elseif (is_year()) { echo "<li>Arquivo de "; the_time('Y'); echo'</li>'; }
    elseif (is_author()) { echo "<li>Arquivo do autor"; echo'</li>'; }
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { echo "<li>Arquivo do blog"; echo'</li>'; }
    elseif (is_search()) { echo "<li>Resultados da pesquisa"; echo'</li>'; }
    //echo '</ul>';
}
//Função para uso do logo do personalizador de tema
add_theme_support( 'custom-logo' );
?>