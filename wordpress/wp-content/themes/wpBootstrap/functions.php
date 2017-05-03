<?php

//register nav class
require_once('wp-bootstrap-navwalker.php');

    //theme support

    function wpb_theme_setup(){

      add_theme_support('post-thumbnails');
      //nav menus
      register_nav_menus(array(
        'primary' => __('Primary Menu')
      ));
    }

    add_action('after_setup_theme','wpb_theme_setup');


    function set_excerpt_length(){
      return 45;
    }

    add_filter('excerpt_length', 'set_excerpt_length');


    //widgets locations

    function wpb_init_widgets($id){
      register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets');

 ?>
