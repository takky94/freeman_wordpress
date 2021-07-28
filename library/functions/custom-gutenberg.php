<?php

add_action('init', 'fm_custom_gutenberg');

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
          white-space: nowrap;
          width: 15%;
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
          white-space: nowrap;
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
        .is-style-fm_table_thick tbody tr{
          border-bottom: 1px solid #707070;
          border-top: 1px solid #707070;
        }
        .is-style-fm_table_thick thead th{
          background: #888;
          border: none;
          color: #fff;
          font-size: 16px;
          text-align: center;
          padding: 1em 1.5em;
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
        .is-style-fm_table_weight tbody tr{
          border-bottom: 1px solid #707070;
          border-top: 1px solid #707070;
        }
        .is-style-fm_table_weight thead th{
          background: #888;
          border: none;
          color: #fff;
          font-size: 16px;
          text-align: center;
          padding: 1em 1.5em;
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
        .is-style-fm_table_weight td:nth-child(2){
          padding: 10px;
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
        .is-style-fm_table_weight td img{
          height: auto;
          margin: auto;
        }
        ',
      )
    );
    register_block_style(
      'core/separator',
      array(
        'name' => 'fm_separator',
        'label' => 'フリーマン/区切り線',
        'inline_style' => '
        .wp-block-separator.is-style-fm_separator:not(.is-style-wide):not(.is-style-dots){
          border-bottom: 1px solid #DEE5EF;
          border-top: none;
          margin: 60px 0;
          max-width: 100%;
          width: 100%;
        }
        ',
      )
    );
    register_block_style(
      'core/button',
      array(
        'name' => 'fm_catalog_button',
        'label' => 'カタログPDFボタン',
        'inline_style' => '
        .is-style-fm_catalog_button{
          text-align: center;
        }
        .is-style-fm_catalog_button .wp-block-button__link{
          background: #eb2936;
          border-radius: 0;
          color: #fff;
          padding: 20px 70px 20px 50px;
          position: relative;
        }
        .is-style-fm_catalog_button .wp-block-button__link::before{
          background: center / contain url('.get_template_directory_uri().'/images/common/pdf.svg) no-repeat;
          bottom: 0;
          content: "";
          display: inline-block;
          height: 21px;
          margin: auto;
          position: absolute;
          right: 28px;
          top: 0;
          width: 18px;
        }
        ',
      )
    );
  }
}