<?php
function register_stylesheet()
{
  wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',);
  wp_register_style('style', get_template_directory_uri() . '/assets/css/styles.css',);
}
function add_stylesheet()
{
  register_stylesheet();
  wp_enqueue_style('swiper', '', array(), '1.0', false);
  wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');



function register_js()
{
  wp_register_script('my-jquery', 'https://code.jquery.com/jquery-3.5.1.js');
  wp_register_script('main', get_template_directory_uri() . '/assets/js/script.js');
  wp_register_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js');
  wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js');
}
function add_main_js()
{
  register_js();
  wp_enqueue_script('my-jquery', '', array(), false, true);
  wp_enqueue_script('main', '', array(), false, true);
  wp_enqueue_script('swiper-bundle', '', array(), false, true);
  wp_enqueue_script('swiper', '', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_main_js');


// デフォルトjquery削除

function delete_jquery()
{
  if (!is_admin()) {
    wp_deregister_script('jquery');
  }
}
add_action('init', 'delete_jquery');

// タイトル

function insert_title()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'insert_title');

function correct_title($title)
{
  if (is_search()) {
    $title['title'] = '検索結果：' . get_search_query();
  } elseif (is_404()) {
    $title['title'] = 'お探しのページは見つかりません';
  }
  return $title;
}
add_filter('document_title_parts', 'correct_title');

add_filter('document_title_separator', 'my_document_title_separator');
function  my_document_title_separator($separator)
{
  $separator = '|';
  return $separator;
}

// アイキャッチ画像表示
add_action('init', function () {
  add_theme_support('post-thumbnails');
});


function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');


// pタグ削除

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// サムネイルのデフォルトサイズ削除

add_filter('post_thumbnail_html', 'custom_attribute');
function custom_attribute($html)
{
  // width height を削除する
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  return $html;
}