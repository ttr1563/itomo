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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vdn%|?lLGL0&//6x8iT-:n2Mmn>u-yLX{~Yr|q|lFp9G%@c`&FQBe1Ng%HNM%Zvu');
define('SECURE_AUTH_KEY',  'I8gHZ6YN1w%D+eDGG^Yj6=pt3XV>8c8Y(@aiMZwIZOB7|Gz,4qaEB5+!G1i^5amO');
define('LOGGED_IN_KEY',    'k{U4Z$wh|~-{4!smBxrloIcuvpDH:N0_P/}.ju8Twea>E=_Su6xQ#q%&c4#mQEQU');
define('NONCE_KEY',        '%@Cgi53@*C&{a^=^53tn^^PH1TYzo4ZosBTERZBK&wT-Fquci.WF#xFiMJS}]=M4');
define('AUTH_SALT',        '_*;&N%s7(K8c,;V(y4F;zj^(84R3p{%6O,~qhPpJX@.;$`I).q2}DQe$lHh=C52o');
define('SECURE_AUTH_SALT', 'xO3c> >BJ]0KL>rFEHr]BDy@l)uT.DFhvtiLa1IdG<hSq3_fwZvG[9=Q-3_C%y >');
define('LOGGED_IN_SALT',   'c$}Go{A0qsu`!hHz3ZVt0?%X8@j36rEr?I2Y2}bf;N!=#.x*q=ccRuC5#*OTRTl8');
define('NONCE_SALT',       'U@fHO+lH]z=h<(8+k[S`4N%}#r6d9+``TEte>W!Agm]S~#UHk>VHQ.5=,33]#3kt');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
