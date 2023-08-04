<?php

function secondtheme_support()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'secondtheme_support');

function secondtheme_register_style()
{
  wp_enqueue_style('master-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap', array(), '1.0');
  wp_enqueue_style('tailwind-element-css', 'https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css', array(), '1.0', 'all');
  wp_enqueue_style('swiper-element-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0', 'all');
}

add_action('wp_enqueue_scripts', 'secondtheme_register_style');

function secondtheme_register_scripts(){
  wp_enqueue_script('master-scripts', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.0', true);
  wp_enqueue_script('swiper-init', get_template_directory_uri().'/assets/js/swiper-init.js', array('swiper-js'), '1.0', true);
  
  wp_enqueue_script('tailwind-js', 'https://cdn.tailwindcss.com', array(), '1.0');
  wp_enqueue_script('tailwind-config', get_template_directory_uri().'/assets/js/tailwind-config.js', array('tailwind-js'), '1.0');
  wp_enqueue_script('tailwind-element', 'https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js', array('tailwind-js'), '1.0');
}

add_action('wp_enqueue_scripts', 'secondtheme_register_scripts');