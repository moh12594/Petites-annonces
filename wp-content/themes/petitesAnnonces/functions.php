<?php
function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('main_script', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.1', true);
wp_register_script('boot_script', get_template_directory_uri() . '/js/bootstrap.min.js', true);


// appel du script dans la page
wp_enqueue_script('main_script');
wp_enqueue_script('boot_script');


// enregistrement d'un nouveau style
wp_register_style( 'main_style', get_template_directory_uri() . '/css/main.css' );
wp_register_style( 'boot_style', get_template_directory_uri() . '/css/bootstrap.min.css' );

// appel du style dans la page
wp_enqueue_style( 'main_style' );
wp_enqueue_style( 'boot_style' );


}
add_action( 'after_setup_theme', 'ajout_scripts' );
add_action( 'after_setup_theme', 'thumbnails_theme_support' );

function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

add_action('init', 'create_custom_post_type_annonces');

function create_custom_post_type_annonces() {

$post_type = "model";
$labels = array(
        'name'               => 'Annonces',
        'singular_name'      => 'Annonce',
        'all_items'          => 'Toutes les annonces',
        'add_new'            => 'Ajouter une annonce',
        'add_new_item'       => 'Ajouter une nouvelle annonce',
        'edit_item'          => "Modifier l'annonce",
        'new_item'           => 'Nouvelle annonce',
        'view_item'          => "Voir l'annonce",
        'search_items'       => 'Rechercher une annonce',
        'not_found'          => 'Pas de résultats',
        'not_found_in_trash' => 'Pas de résultats',
        'parent_item_colon'  => 'Annonce parente:',
        'menu_name'          => 'Annonces',
    );
	

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'annonce' ),
        'capabilities' => array(
  		'edit_post'          => 'edit_annonce', 
  		'read_post'          => 'read_annonce', 
  		'delete_post'        => 'delete_annonce', 
  		'edit_posts'         => 'edit_annonces', 
  		'edit_others_posts'  => 'edit_others_annonces', 
  		'publish_posts'      => 'publish_annonces',       
  		'read_private_posts' => 'read_private_annonces', 
  		'create_posts'       => 'edit_annonces', 
	),

    );

    register_post_type('annonce', $args );

} 
	
	add_action('init', 'create_custom_taxonomy');

	function create_custom_taxonomy() {

		$args = array(
          'label' => __( 'Catégorie annonce' ),
          'rewrite' => array( 'slug' => 'categorie-annonce' ),
          'hierarchical' => true,
      );
	register_taxonomy( 'categorie-annonce',
	 array ('annonce'),
	  $args
	  );

		$args2 = array(
          'label' => __( 'Mots-clés annonce' ),
          'rewrite' => array( 'slug' => 'keywords-annonce' ),
          'hierarchical' => false,
      );
	register_taxonomy( 'keywords-annonce',
	 array ('annonce'),
	  $args2
	  );

	}

	add_action('after_switch_theme', 'create_new_role');

	function create_new_role() {
	add_role(
    'internaute',
    'Internaute',
    array(
        'read_annonce'         => true,  // true allows this capability
        'edit_annonce'   => true,
        'edit_annonces'  => true,
    )
	);
	$role = get_role('administrator');
	$role->add_cap('edit_annonce');
	$role->add_cap('edit_annonces');
	$role->add_cap('publish_annonces');

}

add_image_size("thumbnail_annonce", 450, 300, true);
add_image_size("thumbnail_annonce_full", 1450, 800, false);

?>