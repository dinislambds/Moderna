<?php 
function custom_moderna_theme() {

	load_theme_textdomain( 'moderna', get_template_directory().'/languages' );

	/* hard-coded <title> tag in the document head, and expect WordPress to provide it for us.*/
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img', 800, 450, true);

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'moderna' ),
	) );

}
add_action( 'after_setup_theme', 'custom_moderna_theme' );


/**************Register Scripts and CSS****************/
function moderna_theme_scripts() {	
	// Add Moderna, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), ' v3.1.0', 'all' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css', array(), 'v2.1.4', 'all' );
	wp_enqueue_style( 'jcarousel', get_template_directory_uri() . '/css/jcarousel.css', array(), 'r-1.1', 'all' );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), 'v2.0', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), 'r-1.1', 'all' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/skins/default.css', array(), 'r-1.1', 'all' );
	// Theme stylesheet.
	wp_enqueue_style( 'moderna-style', get_stylesheet_uri() );

	//JS  File
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), 'v1.3', true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), 'v3.1.0', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array( 'jquery' ), 'v2.1.4', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array( 'jquery' ), 'r-1.1', true );
	wp_enqueue_script( 'prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', array( 'jquery' ), 'r-1.1', true );
	wp_enqueue_script( 'quicksand', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', array( 'jquery' ), '1.2.2', true );
	wp_enqueue_script( 'setting', get_template_directory_uri() . '/js/portfolio/setting.js', array( 'jquery' ), 'r-1.1', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), 'v2.1', true );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js', array( 'jquery' ), 'r-1.1', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), 'r-1.1', true );
		
}
add_action( 'wp_enqueue_scripts', 'moderna_theme_scripts' );

	/**********widget register************/
	function moderna_widgets_init() {
	/*******footer sidebar***************/
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'moderna' ),
		'id'            => 'footer-sidebar',
		'description'   => __( 'Add widgets here to appear in your footer sidebar.', 'moderna' ),
		'before_widget' => '<div class="col-lg-3"> <div class="widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );


	/*******blog right sidebar***************/
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'moderna' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Add widgets here to appear in your right sidebar.', 'moderna' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'moderna_widgets_init' );


	/*********Moderna Default Menu***************/
	function moderna_default_menu(){ ?>
				<ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="components.html">Components</a></li>
								<li><a href="pricingbox.html">Pricing box</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>

	<?php }


	/*************register Post**************/
	function moderna_setup_post_type() {
   	/*************Slider Post**************/
    register_post_type( 'slider',  array(
        'labels'             => array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add New Slider', 'moderna' ),
        'new_item'              => __( 'New Slider', 'moderna' ),
        'edit_item'             => __( 'Edit Slider', 'moderna' ),
        'view_item'             => __( 'View Slider', 'moderna' ),
        'all_items'             => __( 'All Sliders', 'moderna' ),        
        'not_found'             => __( 'No books found.', 'moderna' ),
    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'comments' ),
    )
    );
    /*************Service Post**************/
    register_post_type( 'home_service',  array(
        'labels'             => array(
        'name'                  => _x( 'Services', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add New Service', 'moderna' ),
        'new_item'              => __( 'New Service', 'moderna' ),
        'edit_item'             => __( 'Edit Service', 'moderna' ),
        'view_item'             => __( 'View Service', 'moderna' ),
        'all_items'             => __( 'All Services', 'moderna' ),        
        'not_found'             => __( 'No books found.', 'moderna' ),
    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'comments' ),
    )
    );

    /*************Portfolio Post**************/
    register_post_type( 'portfolio',  array(
        'labels'             => array(
        'name'                  => _x( 'Portfolios', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add New Portfolio', 'moderna' ),
        'new_item'              => __( 'New Portfolio', 'moderna' ),
        'edit_item'             => __( 'Edit Portfolio', 'moderna' ),
        'view_item'             => __( 'View Portfolio', 'moderna' ),
        'all_items'             => __( 'All Portfolios', 'moderna' ),        
        'not_found'             => __( 'No books found.', 'moderna' ),
    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'comments' ),
    )
    );

    /********register portfolio category*************/
	register_taxonomy( 'portfolio_cate', 'portfolio', array(
		'labels'            => array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'moderna' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'moderna' ),
		'search_items'      => __( 'Search Categories', 'moderna' ),
		'all_items'         => __( 'All Categories', 'moderna' ),
		'parent_item'       => __( 'Parent Category', 'moderna' ),
		'parent_item_colon' => __( 'Parent Category:', 'moderna' ),
		'edit_item'         => __( 'Edit Category', 'moderna' ),
		'update_item'       => __( 'Update Category', 'moderna' ),
		'add_new_item'      => __( 'Add New Category', 'moderna' ),
		'new_item_name'     => __( 'New Category Name', 'moderna' ),
		'menu_name'         => __( 'Category', 'moderna' ),
	),
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	)
	 );



    /*************Pricing Box Post**************/
    register_post_type( 'pricing_box_3_column',  array(
        'labels'             => array(
        'name'                  => _x( 'Pricing Box 3 Columns', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'Pricing Box 3 Column', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'Pricing Box 3 Columns', 'Admin Menu text', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add New Pricing Box 3 Column', 'moderna' ),
        'new_item'              => __( 'New Pricing Box 3 Column', 'moderna' ),
        'edit_item'             => __( 'Edit Pricing Box 3 Column', 'moderna' ),
        'view_item'             => __( 'View Pricing Box 3 Column', 'moderna' ),
        'all_items'             => __( 'All Pricing Box 3 Columns', 'moderna' ),        
        'not_found'             => __( 'No books found.', 'moderna' ),
    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'comments' ),
    )
    );


    /*************Pricing Box Post**************/
    register_post_type( 'pricing_box_4_column',  array(
        'labels'             => array(
        'name'                  => _x( 'Pricing Box 4 Columns', 'Post type general name', 'moderna' ),
        'singular_name'         => _x( 'Pricing Box 4 Column', 'Post type singular name', 'moderna' ),
        'menu_name'             => _x( 'Pricing Box 4 Columns', 'Admin Menu text', 'moderna' ),
        'add_new'               => __( 'Add New', 'moderna' ),
        'add_new_item'          => __( 'Add New Pricing Box 4 Column', 'moderna' ),
        'new_item'              => __( 'New Pricing Box 4 Column', 'moderna' ),
        'edit_item'             => __( 'Edit Pricing Box 4 Column', 'moderna' ),
        'view_item'             => __( 'View Pricing Box 4 Column', 'moderna' ),
        'all_items'             => __( 'All Pricing Box 4 Columns', 'moderna' ),        
        'not_found'             => __( 'No books found.', 'moderna' ),
    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'comments' ),
    )
    );



}
add_action( 'init', 'moderna_setup_post_type' );

	/********Inlude File *****************/
	include_once('inc/class-walker-nav-menu.php');
	include_once('inc/moderna-custom-cmb2.php');

