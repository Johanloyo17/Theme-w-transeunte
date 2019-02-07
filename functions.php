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

