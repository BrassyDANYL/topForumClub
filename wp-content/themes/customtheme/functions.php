<?php
add_action('wp_enqueue_scripts', 'topForumScripts');

error_reporting(E_ALL);
    ini_set("display_errors", 1);

function topForumScripts() {
   wp_enqueue_style('topforum-style', get_stylesheet_uri());
   wp_enqueue_style('addstyle', get_template_directory_uri() . '/addstyle.css');
   wp_deregister_script( 'jquery' );
   wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script ('slickjs', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);
   wp_enqueue_script('myscript', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
   
}
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
   add_theme_support('menus');

   add_action( 'init', 'register_sponsor_post_type');

   function register_sponsor_post_type() {
      register_post_type('sponsor', array(
         'show_in_rest' => true,
         'public'       => true,
         'labels' => array(
            'name' => 'Sponsor',
            'singular_name' => 'sponsor',
            'add_new_item'       => 'Add Sponsor'
         ),
         'supports'         => array(
            'title' => true, 'editor' => true, 'comments' => true, 'revisions' => true, 'trackbacks' => true, 'author' => true, 'page-attributes'=> true
         ),
         'has_archive'      => true,
         'taxonomies'       => array('type_of_sponsor', 'conference'),
         'show_in_menu'     => true,
         'menu_icon'        => 'dashicons-universal-access'
      ));
   }

   add_action( 'init', 'register_event_post_type');

   function register_event_post_type() {
      register_post_type('event', array(
         'show_in_rest' => true,
         'public'       => true,
         'labels' => array(
            'name' => 'Event',
            'singular_name' => 'Event',
            'add_new_item'       => 'Add Event'
         ),
         'has_archive'      => true,
         'taxonomies'       => array('type_of_sponsor', 'conference'),
         'show_in_menu'     => true,
         'menu_icon'        => 'dashicons-format-image',
         'supports'          => array('thumbnail', 'title', 'editor')
      ));
   }

   add_action( 'init', 'register_speaker_post_type');

   function register_speaker_post_type() {
      register_post_type('Speaker', array(
         'show_in_rest' => true,
         'public'       => true,
         'labels' => array(
            'name' => 'Speaker',
            'singular_name' => 'Speaker',
            'add_new_item'       => 'Add Speaker'
         ),
         'supports'         => array(
            'title' => true, 'editor' => true, 'comments' => true, 'revisions' => true, 'trackbacks' => true, 'author' => true, 'page-attributes'=> true
         ),
         'has_archive'      => true,
         'taxonomies'       => array('conference'),
         'show_in_menu'     => true,
         'menu_icon'        => 'dashicons-businessperson'
      ));
   }

   add_action('init', 'taxonomy_sponsor_type');

   function taxonomy_sponsor_type() {
      register_taxonomy('type_of_sponsor', array('sponsor','event'), array(
         'label' => '',
         'labels' => array(
            'name' => 'Sponsor Type',
            'singular_name' => 'Sponsor Type'
         ),
            'manage_terms' => 'manage_categories',
            'edit_terms'   => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts'
            
         ));
   }

   

   add_action('init', 'taxonomy_conference');

   function taxonomy_conference() {
      register_taxonomy('conference', array('sponsor','event', 'speaker'), array(
         'label' => '',
         'labels' => array(
            'name' => 'Conference',
            'singular_name' => 'Conference'
         ),
            'manage_terms' => 'manage_categories',
            'edit_terms'   => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts'
            
         ));
   }
   register_nav_menus(array(
	'Header'    => 'Header menu',    //Название месторасположения меню в шаблоне
	'Footer' => 'Footer menu'      //Название другого месторасположения меню в шаблоне
));
?>