<?php

add_filter('parse_query', 'fm_redirect');


/*
WPで自動生成されてしまうがディレクトリマップにないページの削除
********************************************************************/

if (!function_exists('fm_redirect')){
  function fm_redirect($query){
    // タグページと添付ファイルページと日付ページと著者ページ
    if (is_tag() || is_attachment() || is_date() || is_author()){
        $query -> set_404();
        status_header( 404 );
        nocache_headers();
    }
  }
}