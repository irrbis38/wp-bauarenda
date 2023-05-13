<?php

add_action('wp_enqueue_scripts', 'bauarenda_scripts');
add_action('init', 'ba_regiser_type_technics');

// add styles and scripts
function bauarenda_scripts()
{
  wp_enqueue_style('bauarenda-main-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), 1.0);

  wp_enqueue_script('bauarenda-main-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
  wp_enqueue_script('bauarenda-requests', get_template_directory_uri() . '/assets/js/requests.js', array(), null, true);
}


// add custom post type
function ba_regiser_type_technics()
{
  register_post_type('technics', [
    'labels' => [
      'name' => 'Спецтехника',
      'singular_name' => 'Техника',
      'add_new' => 'Добавить новую',
      'add_new_item' => 'Добавить новую технику',
      'edit_item' => 'Редактировать описание техники',
      'new_item' => 'Новая техника',
      'view_item' => 'Посмотреть технику',
      'search_items' => 'Найти технику',
      'not_found' => 'Техники не найдено',
      'not_found_in_trash' => 'В корзине техники не найдено',
      'parent_item_colon' => '',
      'menu_name' => 'Каталог техники'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-screenoptions',
    'supports' => ['title']
  ]);

  register_taxonomy('cat_tech', ['technics'], [
    'labels' => [
      'name' => 'Категории'
    ],
    'public' => true,
    'hierarchical' => true,
  ]);
}

?>