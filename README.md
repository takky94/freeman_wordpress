## お伝えすべき設計面でのこと

### メモ

- Sass は Live Sass Compiler でコンパイル(.vscode 内で設定済み)
  - コンパイルしたファイルは同階層に出力
  - 自分の環境では LiveSassCompiler の include と exclude がうまく動作しなかったのでコンパイル後の不要なファイルは削除する/監視状態を切ることで対応しました
    - 上の現象補足ですが、Watch Sass ボタンをクリック後はきちんと動作している（includeList で指定したフォルダ内ファイルのみコンパイル）のですが、『Watching...』状態で個別にファイルを上書き保存すると includeList で指定していないファイルもコンパイルされてしまうといった具合です
- 第二階層、MOLD〜NEW FIELD は Category ページ（カテゴリ登録の必要ありです）
  - 第二階層、トップページはカテゴリのスラッグを使用して出力される(category.php line:7)ので管理画面から設定の必要あり
  - カテゴリのスラッグはファイル名に合わせる必要あり
- ニュース/商品に関してはカスタム投稿です
  - ニュース/商品のカテゴリはカスタムタクソノミーです(新規追加の必要あり)
- 自動生成されるタグ一覧、メディア、著者、日付ページはリダイレクト処理済み(ディレクトリマップにないため)
- 画像をアップロードする場合、300px 以上、できれば 600px 以上の画像を投稿していただくと比較的デザイン案通りでの表示が可能です

### 用意していただきたいページ

- カテゴリは functions.php で自動生成していますが、ページを用意しないと各カテゴリページなどが機能しないため、各カテゴリにダミーでもひと記事ずつ入れていただければと思います。
  - カテゴリ第一階層についてはテーマ側で自動生成できるのですが
- 商品やニュースも同様によろしくお願いいたします。

## ディレクトリ構成

### style/js

基本的にどのページで使用するかをファイル名にしています。CSS は SCSS で書いており、/@import のなかにコンポーネント類をまとめており、(ページ名).scss のなかで import しております。ページでは compressed(圧縮)フォルダを読み込んでいますが一応 expanded(非圧縮)も用意しています。

### library

サードパーティの js ライブラリやフォント、functions.php で使用する関数などを格納しています。

### .vscode

一応 VScode で使用できる共通設定ファイルです。

## スラッグ

カスタム投稿(news)も下記に準ずる

- 型製品(/mold)
- 砂型鋳造(/sand_casting)
- 精密鋳造(/investment_casting)
- ジュエリー(/jewelry)
- 新たな取り組み(/new_field)
- 会社概要(/company)
- お問い合わせ(/contact)

上記パーマリンクにするため、

- 「設定」→「パーマリンク設定」→ 共通設定 → カスタム構造「/%category%/%postname%/」
- 「設定」→「パーマリンク設定」→ オプション → カテゴリーベース「.（ドット）」

に設定する

## プラグインについて

### Custom Post Type Permalinks

カスタム投稿(商品/ニュース)でタブ分け表示をするに当たってカスタム投稿の URL にカテゴリを追加するために使用

- news => /%news_category%/%postname%/
- product => /%product_category%/%postname%/

### WP-PageNavi

- 総ページ数用テキスト => 未入力
- pagenavi-css.css を使用 => いいえ
- 表示するページ数 => 9 (WordPress 表示設定も 9 にする)

### MW WP Form

お問い合わせに使用

### TablePress

子カテゴリ TOP でのコンテンツ編集用に使用

### FREEMAN block

Gutenberg の拡張です

## ショートコードについて

### `[product]`

属性は`category`, `count`, `orderby`, `layout`の 4 つ

例: `[product category="mold" count=3 orderby="rand" layout="column" /]` => 型製品の記事をランダムで 3 つ表示

orderby の値は WP Query に基づきます(`rand`を使用すればランダム記事取得可)

count 値は指定しなかった場合、条件一致した全件表示になります

layout の値は `column`(横並び), `square`(横並び枠線付き), `wide`(横長), `slider`(スライダー)から選べます

参考: [順序づけパラメータ](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Query#.E9.A0.86.E5.BA.8F.E3.81.A5.E3.81.91.E3.83.91.E3.83.A9.E3.83.A1.E3.83.BC.E3.82.BF)

## 使用ライブラリについて

### Polyfill

- smooth scroll
- intersection observer

## カテゴリーページ構成

category.php => category のスラッグによってページコンテンツ切り替え

例: /mold => category.php のなかに/parts/category-top/mold.php をインポート

/parts/category-top/hoge.php は第一階層のカテゴリに表示されます

## 多言語対応について

テーマ内ファイルの翻訳については`<?php _e('ここに翻訳対象テキスト', '任意のID'); ?>`と記入することで対応しています

任意の ID はプラグイン画面にて使用されます
