<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'nworksdev_freeman' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'nworksdev_freema' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'kbUoaLwOPF' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8023.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );


/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '> kKULgBf>|eR~.STay#LadGsZ.z<y{.J2ONtSfn?wLo5mbMFU?}BJ%#bsuu+u>1' );
define( 'SECURE_AUTH_KEY',  '3Nbj+U)n-=<G.~ %@+U7sj3iNeGJP;F`vS5I86(e Kz2q}Vw=}!ai6P+StCNPsr+' );
define( 'LOGGED_IN_KEY',    ')2=*!@}r:Cr{HA>ZrJ!&OQsC.s>ns9sM~4|b~$~oKbzkM 6Q[c_6UomTHOMl3PJ@' );
define( 'NONCE_KEY',        'dEE)(#QPsUvP|0h$@14sCH=`L3-+^EZ2p4A=y^eWCpaGVKaqYO,P+2U22pvVY_>_' );
define( 'AUTH_SALT',        'Yu7V@RxV(;d6/,]yS%;,,*T|XrQ#y$n;G>NH0K|1Gu`MW|d+80>{yszlag$SB!3y' );
define( 'SECURE_AUTH_SALT', '/JGSoKCkR $?iVI}yR1p(:>&Jq,shWAYK[`<l-PX:N5vyv?{4C(l(4I]JLNB&]BO' );
define( 'LOGGED_IN_SALT',   '9#]zFBp|eJ>(fd9BL| F#,+,6i$w+%C8HW:u_~QYm{a0;%>I8+!&JP2jH^BM`pI*' );
define( 'NONCE_SALT',       'v3Du5pH0H|;QK^|^7jG6d*B8]l&4I8hMf#OlT%Jy3PBO:Mql~cOf@BZG%|.MDuem' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
// WP_DEBUG モードを有効化
define( 'WP_DEBUG', true );

// /wp-content/debug.log ファイルへのデバッグログの出力を有効化
define( 'WP_DEBUG_LOG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';