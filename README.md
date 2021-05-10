## お伝えすべき設計面でのこと

- Sass は Live Sass Compiler でコンパイル(.vscode 内で設定済み)
  - コンパイルしたファイルは同階層に出力
  - 自分の環境では LiveSassCompiler の include と exclude がうまく動作しなかったのでコンパイル後の不要なファイルは削除する/監視状態を切ることで対応しました
    - 上の現象補足ですが、Watch Sass ボタンをクリック後はきちんと動作している（includeList で指定したフォルダ内ファイルのみコンパイル）のですが、『Watching...』状態で個別にファイルを上書き保存すると includeList で指定していないファイルもコンパイルされてしまうといった具合です
- 第二階層、MOLD〜NEW FIELD は Category ページ（カテゴリ登録の必要ありです）
  - 第二階層、トップページはカテゴリのスラッグを使用して出力される(category.php line:7)ので管理画面から設定の必要あり
  - カテゴリのスラッグはファイル名に合わせる必要あり
- ニュース/商品に関してはカスタム投稿です
  - ニュース/商品のカテゴリはカスタムタクソノミーです(新規追加の必要あり)

## スラッグ

- 型製品(/mold)
- 砂型鋳造(/sand-casting)
- 精密鋳造(/investment-casting)
- ジュエリー(/juwerly)
- 新たな取り組み(/new-field)
- 会社概要(/company)

## プラグインについて

### Custom Post Type Permalinks

カスタム投稿(商品/ニュース)でタブ分け表示をするに当たってカスタム投稿の URL にカテゴリを追加するために使用

- news => /%news_category%/%postname%/
- product => /%product_category%/%postname%/

### WP-PageNavi

- 総ページ数用テキスト => 未入力
- pagenavi-css.css を使用 => いいえ
- 表示するページ数 => 9 (WordPress 表示設定も 9 にする)

### Custom Taxonomy Order

カスタムタクソノミーのソート用
