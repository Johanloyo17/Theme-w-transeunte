<?php

function transeunte_files() {
  wp_enqueue_script('transeunte_main_js', get_theme_file_uri('/js/main-bundle.js'), NULL, 1.0);
  wp_enqueue_style('transeunte_main_styles', get_stylesheet_uri(), NULL, 1.0);
}
add_action('wp_enqueue_scripts', 'transeunte_files');

function transeunte_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'transeunte_features');

function transeunte_post_types() {
  // Evento Post Type
  register_post_type('evento', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
    'rewrite' => array(
      'slug' => 'eventos'
    ),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Eventos',
      'add_new' => 'Añadir nuevo',
      'add_new_item' => 'Añadir nuevo',
      'edit_item' => 'Editar evento',
      'all_items' => 'Todos los eventos',
      'singular_name' => 'Evento',
    ),
    'menu_icon' => 'dashicons-calendar',
    'show_in_rest' => true // Gutenberg editor
  ));

  // Contenido Post Type
  register_post_type('contenido', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
    'rewrite' => array(
      'slug' => 'contenidos'
    ),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Contenidos',
      'add_new' => 'Añadir nuevo',
      'add_new_item' => 'Añadir nuevo',
      'edit_item' => 'Editar contenido',
      'all_items' => 'Todos los contenidos',
      'singular_name' => 'Contenido'
    ),
    'menu_icon' => 'dashicons-editor-quote',
    'show_in_rest' => true // Gutenberg editor
  ));
}

add_action('init', 'transeunte_post_types');