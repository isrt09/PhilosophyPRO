<?php 
function philosophy_theme_setup(){
	load_theme_textdomain("philosophy");
	add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-logo');   
    add_theme_support('html5',['search-form','comment-list']);   
    add_theme_support('custom-header'); 
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails'); or add_theme_support('post-thumbnails',['post','page']);
    add_theme_support('title-tag');	
    add_theme_support('post-formats',['video','audio','gallery','link','image','quote']);
}
add_action("after_setup_theme","philosophy_theme_setup");