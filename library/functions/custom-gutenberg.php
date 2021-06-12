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
    register_block_style(
      'core/table',
      array(
        'name' => 'fm_table_thick',
        'label' => '厚さ/1箱の枚数',
        'inline_style' => '
        .is-style-fm_table_thick thead th{
          background: #888;
          border: none;
          color: #fff;
          font-size: 20px;
          text-align: center;
          padding: 0.5em 1.5em;
          position: relative;
        }
        .is-style-fm_table_thick td{
          border-left: none;
          border-right: none;
          padding: 2em 3em;
          position: relative;
          text-align: center;
          width: 50%;
        }
        .is-style-fm_table_thick thead th:not(:first-child)::before,
        .is-style-fm_table_thick td:not(:first-child)::before{
          bottom: 0;
          content: "";
          display: inline-block;
          height: 80%;
          left: 0;
          margin: auto;
          top: 0;
          position: absolute;
          width: 1px;
        }
        .is-style-fm_table_thick thead th:not(:first-child)::before{
          background: #707070;
        }
        .is-style-fm_table_thick td:not(:first-child)::before{
          background: #e0e0e0;
        }
        ',
      )
    );
    register_block_style(
      'core/table',
      array(
        'name' => 'fm_table_weight',
        'label' => 'XXkg + XXkg',
        'inline_style' => '
        .is-style-fm_table_weight {
          margin-top: 0;
        }
        .is-style-fm_table_weight thead th{
          background: #888;
          border: none;
          color: #fff;
          font-size: 20px;
          text-align: center;
          padding: 0.5em 1.5em;
          position: relative;
        }
        .is-style-fm_table_weight td{
          border-left: none;
          border-right: none;
          padding: 2em 3em;
          position: relative;
          text-align: center;
          width: 50%;
        }
        .is-style-fm_table_weight thead th:not(:first-child)::before,
        .is-style-fm_table_weight td:not(:first-child)::before{
          bottom: 0;
          content: "";
          display: inline-block;
          height: 80%;
          left: 0;
          margin: auto;
          top: 0;
          position: absolute;
          width: 1px;
        }
        .is-style-fm_table_weight thead th:not(:first-child)::before{
          background: #707070;
        }
        .is-style-fm_table_weight td:not(:first-child)::before{
          background: #e0e0e0;
        }
        ',
      )
    );
  }
}