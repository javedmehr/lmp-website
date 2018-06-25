<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */
    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'max_execution_time', '300' );

	require_once( 'external/starkers-utilities.php' );
    require_once( 'custom-type.php');




	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
    // register_nav_menus(array('primary' => 'Primary Navigation'));

	function register_my_menus() {
    	register_nav_menus(
        	array(
            	'header-menu' => __( 'Header Menu' ),
	            'extra-menu' => __( 'Extra Menu' )
    	    )
	    );
	}
	add_action( 'init', 'register_my_menus' );

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
========================================================================================================================
	*/

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}



	/* 
========================================================================================================================

	Custom fonts

========================================================================================================================
	*/

	function load_fonts() {
        wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900');
	    wp_enqueue_style( 'googleFonts');
	}
	add_action('wp_print_styles', 'load_fonts');

    // Load Font Awesome
    add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
    function enqueue_font_awesome() {
        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    }

	/* 
========================================================================================================================

	avoid removing <span> tag in wordpress default html editor

========================================================================================================================
	*/
	function override_mce_options($initArray) {
	    $opts = '*[*]';
	    $initArray['valid_elements'] = $opts;
	    $initArray['extended_valid_elements'] = $opts;
    	return $initArray;
    }
	add_filter('tiny_mce_before_init', 'override_mce_options');