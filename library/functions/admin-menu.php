<?php

add_action('admin_menu', 'fm_change_post_menu_title');
add_action('admin_menu', 'fm_change_post_menu_label');
add_action('admin_head', 'fm_change_post_menu_icon');

/*
編集画面の「投稿」を「商品」に変更
********************************************************************/

if (!function_exists('fm_change_post_menu_title')){
  function fm_change_post_menu_title() {
    global $menu;
    global $submenu;
    $name = '商品';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
  }
}

if (!function_exists('fm_change_post_menu_label')){
  function fm_change_post_menu_label() {
    global $wp_post_types;
    $name = '商品';
    $labels = &$wp_post_types['post'] -> labels;
    $labels -> name = $name;
    $labels -> singular_name = $name;
    $labels -> add_new = _x('追加', $name);
    $labels -> add_new_item = $name.'の新規追加';
    $labels -> edit_item = $name.'の編集';
    $labels -> new_item = '新規'.$name;
    $labels -> view_item = $name.'を表示';
    $labels -> search_items = $name.'を検索';
    $labels -> not_found = $name.'が見つかりませんでした';
    $labels -> not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
}

if (!function_exists('fm_change_post_menu_icon')){
  function fm_change_post_menu_icon() {
?>
<style>
.dashicons-admin-post::before {
  content: "\f174";
}
</style>
<?php
  }
}