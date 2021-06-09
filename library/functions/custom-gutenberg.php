<?php

add_action( 'init', 'fm_custom_gutenberg' );

/*
既存Gutenbergブロックのカスタマイズ
********************************************************************/

if (!function_exists('fm_custom_gutenberg')){
  function fm_custom_gutenberg(){
    register_block_style(
      'core/table',
      array(
        'name' => 'fm_table_details',
        'label' => '製品詳細',
        'inline_style' => '
        .is-style-fm_table_details td{
          border-left: none;
          border-right: none;
          padding: 2em;
        }
        .is-style-fm_table_details tr td:nth-child(1){
          background: #f5f5f5;
          color: #0e0e0e;
          text-align: center;
          max-width: 15%;
        }
        .is-style-fm_table_details tr td:nth-child(2){
          font-size: 14px;
        }
        ',
      )
    );
    register_block_style(
      'core/table',
      array(
        'name' => 'fm_table_physical_property',
        'label' => '標準物性',
        'inline_style' => '
        .is-style-fm_table_physical_property thead th{
          background: #888;
          color: #fff;
          font-size: 20px;
          text-align: left;
          padding: 0.5em 1.5em;
        }
        .is-style-fm_table_physical_property tr td:nth-child(1){
          background: #f5f5f5;
          color: #0e0e0e;
          width: 20%;
        }
        .is-style-fm_table_physical_property td{
          border-left: none;
          border-right: none;
          padding: 2em 3em;
        }
        ',
      )
    );
  }
}