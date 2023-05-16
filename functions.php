<?php

add_action('wp_enqueue_scripts', 'bauarenda_scripts');
add_action('init', 'ba_regiser_type_technics');
add_action('init', 'ba_regiser_type_reviews');
add_action('init', 'ba_regiser_type_news');

// add styles and scripts
function bauarenda_scripts()
{
  wp_enqueue_style('bauarenda-main-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), 1.0);

  wp_deregister_script('jquery');
  wp_enqueue_script(
    'jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    [],
    null,
    true
  );
  wp_enqueue_script('bauarenda-main-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
  wp_enqueue_script('bauarenda-catalog', get_template_directory_uri() . '/assets/js/catalog.js', array(), null, true);
}

// ====== CATALOG ======

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


add_action('wp_ajax_nopriv_ajax_sort', 'ajax_sort');
add_action('wp_ajax_ajax_sort', 'ajax_sort');
function ajax_sort()
{
  // extract query options from post query
  $selected_cat = $_POST['query_options']['selected_category'];
  $sort_type = $_POST['query_options']['sort_type'];
  $sort_order = $_POST['query_options']['sort_order'];
  $post_offset = $_POST['query_options']['post_offset'];
  $posts_per_page = $_POST['query_options']['posts_per_page'];
  $search_string = $_POST['query_options']['search_string'];


  header('Content-type: application/json');

  $query = new WP_Query([
    'post_type' => 'technics',
    'posts_per_page' => $posts_per_page,
    'meta_key' => $sort_type,
    'orderby' => 'meta_value_num',
    'order' => $sort_order,
    'cat_tech' => $selected_cat,
    'offset' => $post_offset,
    's' => $search_string
  ]);
  // get posts amount
  $len = $query->found_posts;
  $resp = array();

  // get posts data
  $resp[] = array(
    'length' => $len
  );
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

      $resp[] = array(
        'title' => get_the_title(),
        'name1' => get_field('catalog__name1'),
        'value1' => get_field('catalog__value1'),
        'name2' => get_field('catalog__name2'),
        'value2' => get_field('catalog__value2'),
        'name3' => get_field('catalog__name3'),
        'value3' => get_field('catalog__value3'),
        'imgUrl' => get_field('catalog__img'),
        'price' => get_field('catalog__price')
      );
    }
  }
  wp_send_json($resp);


  wp_reset_postdata();
}

// ====== REVIEWS ======

// add custom post type REVIEWS
function ba_regiser_type_reviews()
{
  register_post_type('reviews', [
    'labels' => [
      'name' => 'Отзывы',
      'singular_name' => 'Отзыв',
      'add_new' => 'Добавить новый',
      'add_new_item' => 'Добавить новый отзыв',
      'edit_item' => 'Редактировать отзыв',
      'new_item' => 'Новый отзыв',
      'view_item' => 'Посмотреть отзыв',
      'search_items' => 'Найти отзыв',
      'not_found' => 'Отзывов не найдено',
      'not_found_in_trash' => 'В корзине отзывов не найдено',
      'parent_item_colon' => '',
      'menu_name' => 'Отзывы'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-screenoptions',
    'supports' => ['title']
  ]);

  // register_taxonomy('reviews', ['reviews'], [
  //   'labels' => [
  //     'name' => 'Отзывы'
  //   ],
  //   'public' => true,
  //   'hierarchical' => true,
  // ]);
}

// ====== NEWS ======

// add custom post type NEWS
function ba_regiser_type_news()
{
  register_post_type('news', [
    'labels' => [
      'name' => 'Новости',
      'singular_name' => 'Новость',
      'add_new' => 'Добавить новость',
      'add_new_item' => 'Добавить новость',
      'edit_item' => 'Редактировать новость',
      'new_item' => 'Ещё новость',
      'view_item' => 'Посмотреть новость',
      'search_items' => 'Найти новость',
      'not_found' => 'Новостей не найдено',
      'not_found_in_trash' => 'В корзине новостей не найдено',
      'parent_item_colon' => '',
      'menu_name' => 'Новости'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-screenoptions',
    'supports' => ['title']
  ]);

  // register_taxonomy('reviews', ['reviews'], [
  //   'labels' => [
  //     'name' => 'Отзывы'
  //   ],
  //   'public' => true,
  //   'hierarchical' => true,
  // ]);
}


?>
