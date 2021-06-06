<?php

add_action( 'init', 'fm_custom_gutenberg' );

/*
既存Gutenbergブロックのカスタマイズ
********************************************************************/

if (!function_exists('fm_custom_gutenberg')){
  function fm_custom_gutenberg(){
    register_block_style(
        'core/heading',
        array(
            'name'         => 'design01',
            'label'        => 'デザイン01',
            'inline_style' => '.is-style-design01 {
                border-left: solid 8px orange;
                padding-left: 12px;
            }',
        )
    );
    register_block_style(
        'core/table',
        array(
            'name'         => 'fm_table_details',
            'label'        => '標準物性',
            'inline_style' => '
            .is-style-fm_table_details tr td:nth-child(1){
              background: #f5f5f5;
              color: #0e0e0e;
              width: 20%;
            }
            .is-style-fm_table_details td{
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
            'name'         => 'fm_table_physical_property',
            'label'        => '標準物性',
            'inline_style' => '
            .is-style-fm_table_physical_property thead th{
              background: #888;
              color: #fff;
            }',
        )
    );
  }
}