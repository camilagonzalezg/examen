<?php

  // REGISTRO DE ESTILOS

  function register_enqueue_style() {
  		$theme_data = wp_get_theme();

  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('/css/bootstrap.css'), null, 'screen');
  	  wp_register_style('simpleartist', get_parent_theme_file_uri('/css/simpleartist.css'), null, 'screen');
      wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', null, '1.0.0', 'screen');
  		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,700');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('simpleartist');
      wp_enqueue_style('fontawesome');
      wp_enqueue_style('googleFonts');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

  // REGISTRO DE SCRIPTS

  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Registrando Scripts */
    wp_register_script('jQuery', get_parent_theme_file_uri('/js/jquery.js'), null, '1.11.1', true);
    wp_register_script('bootstrap', get_parent_theme_file_uri('/js/bootstrap.js'), array('jQuery'), null, true);
    wp_register_script('scripts', get_parent_theme_file_uri('/js/scripts.js'), null, '1.11.1', true);
    wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBY2g-iXPx-vQ8sGD4CPYSGbxZI0XXNsok&callback=initMap', null, '1.11.1', true);

		/* Enqueue Scripts */
    wp_enqueue_script('jQuery');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('scripts');
    wp_enqueue_script('maps');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

  //Logo Personalizado

      function config_custom_logo() {
      add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
      ));
    }

    add_action( 'after_setup_theme', 'config_custom_logo' );

  // Tamaños personalizados

  function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  }
  add_action( 'after_setup_theme', 'thumbnails_setup' );


    // Registro para Exposiciones
    // Register Custom Post Type
    function exposicion_post_type() {

    	$labels = array(
    		'name'                  => _x( 'exposiciones', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'exposicion', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Exposiciones', 'text_domain' ),
    		'name_admin_bar'        => __( 'Exposicion', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'All Items', 'text_domain' ),
    		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    		'add_new'               => __( 'Add New', 'text_domain' ),
    		'new_item'              => __( 'New Item', 'text_domain' ),
    		'edit_item'             => __( 'Edit Item', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'exposicion', 'text_domain' ),
    		'description'           => __( 'Custom Post Type para exposiciones', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-admin-appearance',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'exposicion', $args );

    }
    add_action( 'init', 'exposicion_post_type', 0 );

    // Textos Escritos
    // Register Custom Post Type
function texto_post_type() {

	$labels = array(
		'name'                  => _x( 'textos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'texto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Textos', 'text_domain' ),
		'name_admin_bar'        => __( 'Textos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'texto', 'text_domain' ),
		'description'           => __( 'Post Custom Type para textos escritos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'texto_type', $args );

}
add_action( 'init', 'texto_post_type', 0 );

?>
