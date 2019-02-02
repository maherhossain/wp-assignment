<?php


if( file_exists( dirname( __FILE__ ) . '/shortcode/shortcodes.php' ) ) {
	require_once( dirname( __FILE__ ) . '/shortcode/shortcodes.php' );
}

add_action( 'wp_enqueue_scripts', 'unite_child_enqueue_styles' );
function unite_child_enqueue_styles() {
    wp_enqueue_style( 'unite-style', get_template_directory_uri() . '/style.css' );
}



add_action('init', 'unite_child_films_post_type');
function unite_child_films_post_type(){

	register_post_type('films',array(
		'labels' => array(
			'name'               => _x( 'Films', 'unite-child' ),
			'singular_name'      => _x( 'Film', 'unite-child' ),
			'menu_name'          => _x( 'Films', 'unite-child' ),
			'name_admin_bar'     => _x( 'Film',  'unite-child' ),
			'add_new'            => _x( 'Add New ',  'unite-child' ),
			'add_new_item'       => __( 'Add New Films', 'unite-child' ),
			'new_item'           => __( 'New Films', 'unite-child' ),
			'edit_item'          => __( 'Edit Film', 'unite-child' ),
			'view_item'          => __( 'View Film', 'unite-child' ),
			'all_items'          => __( 'All Films', 'unite-child' ),
			'search_items'       => __( 'Search Films', 'unite-child' ),
			'parent_item_colon'  => __( 'Parent Films:', 'unite-child' ),
			'not_found'          => __( 'No Films found.', 'unite-child' ),
			'not_found_in_trash' => __( 'No Films found in Trash.', 'unite-child' )
			),
		'public'		 => true,
		'menu_icon' 	 => 'dashicons-screenoptions',
		'menu_position'	 => 10,
		'supports'       => array( 'title', 'editor', 'thumbnail' )

	));


//custom Taxonomy register for Films
	register_taxonomy('genre','films', array(
		'labels' => array(
			'name'              => _x( 'Genre', 'unite-child' ),
			'singular_name'     => _x( 'Genre', 'unite-child' ),
			'search_items'      => __( 'Search Genre', 'unite-child' ),
			'all_items'         => __( 'All Genre', 'unite-child' ),
			'parent_item'       => __( 'Parent Genre', 'unite-child' ),
			'parent_item_colon' => __( 'Parent Genre:', 'unite-child' ),
			'edit_item'         => __( 'Edit Genre', 'unite-child' ),
			'update_item'       => __( 'Update Genre', 'unite-child' ),
			'add_new_item'      => __( 'Add New Genre', 'unite-child' ),
			'new_item_name'     => __( 'New Genre Name', 'unite-child' ),
			'menu_name'         => __( 'Genre', 'unite-child' ),
			),
		'public' 			=> true,
		'hierarchical'		=> true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	));


//custom Taxonomy register for Films
	register_taxonomy('country','films', array(
		'labels' => array(
			'name'              => _x( 'Country', 'unite-child' ),
			'singular_name'     => _x( 'Country', 'unite-child' ),
			'search_items'      => __( 'Search Country', 'unite-child' ),
			'all_items'         => __( 'All Country', 'unite-child' ),
			'parent_item'       => __( 'Parent Country', 'unite-child' ),
			'parent_item_colon' => __( 'Parent Country:', 'unite-child' ),
			'edit_item'         => __( 'Edit Country', 'unite-child' ),
			'update_item'       => __( 'Update Country', 'unite-child' ),
			'add_new_item'      => __( 'Add New Country', 'unite-child' ),
			'new_item_name'     => __( 'New Country Name', 'unite-child' ),
			'menu_name'         => __( 'Country', 'unite-child' ),
			),
		'public' 			=> true,
		'hierarchical'		=> true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'country' ),
	));


//custom Taxonomy register for Films
	register_taxonomy('actors','films', array(
		'labels' => array(
			'name'              => _x( 'Actors', 'unite-child' ),
			'singular_name'     => _x( 'Actors', 'unite-child' ),
			'search_items'      => __( 'Search Actors', 'unite-child' ),
			'all_items'         => __( 'All Actors', 'unite-child' ),
			'parent_item'       => __( 'Parent Actors', 'unite-child' ),
			'parent_item_colon' => __( 'Parent Actors:', 'unite-child' ),
			'edit_item'         => __( 'Edit Actors', 'unite-child' ),
			'update_item'       => __( 'Update Actors', 'unite-child' ),
			'add_new_item'      => __( 'Add New Actors', 'unite-child' ),
			'new_item_name'     => __( 'New Actors Name', 'unite-child' ),
			'menu_name'         => __( 'Actors', 'unite-child' ),
			),
		'public' 			=> true,
		'hierarchical'		=> true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'actors' ),
	));

//custom Taxonomy register for Films
	register_taxonomy('year','films', array(
		'labels' => array(
			'name'              => _x( 'Year', 'unite-child' ),
			'singular_name'     => _x( 'Year', 'unite-child' ),
			'search_items'      => __( 'Search Year', 'unite-child' ),
			'all_items'         => __( 'All Year', 'unite-child' ),
			'parent_item'       => __( 'Parent Year', 'unite-child' ),
			'parent_item_colon' => __( 'Parent Year:', 'unite-child' ),
			'edit_item'         => __( 'Edit Year', 'unite-child' ),
			'update_item'       => __( 'Update Year', 'unite-child' ),
			'add_new_item'      => __( 'Add New Year', 'unite-child' ),
			'new_item_name'     => __( 'New Year Name', 'unite-child' ),
			'menu_name'         => __( 'Year', 'unite-child' ),
			),
		'public' 			=> true,
		'hierarchical'		=> true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'year' ),
	));
}



// Custom field inside custom post type

add_action('add_meta_boxes','unite_child_films_field');
function unite_child_films_field(){

	add_meta_box( 
        'unite-child-ticket-price-metabox',
        __( 'Please fill up the following fields', 'unite-child'),
        'ticket_price_metabox',
        'films',
        'normal',
        'default'
    );
}

function ticket_price_metabox($post){ ?>
	<p class="text-bold"><label for="ticketPrice">Ticket Price($)</label></p>
	<input type="text" name="ticketPrice" class="regular-text" id="ticketPrice" value="<?php echo get_post_meta($post->ID,'ticketPrice', true); ?>">

	<p class="text-bold"><label for="releaseDate">Release Date</label></p>
    <input type="text" name="releaseDate" class="regular-text" id="releaseDate" placeholder="DD/MM/YY" value="<?php echo get_post_meta($post->ID,'releaseDate', true); ?>">


<?php }


function save_metabox_values($post_id){
		update_post_meta($post_id,'ticketPrice', $_POST['ticketPrice']);
		update_post_meta($post_id,'releaseDate', $_POST['releaseDate']);
}
add_action('save_post','save_metabox_values');


function unite_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'unite_custom_excerpt_length', 999 );





