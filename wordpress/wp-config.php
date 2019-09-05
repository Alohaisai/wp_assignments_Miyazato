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
define( 'DB_NAME', 'wp-theme' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ar<b_EsXYf)(n]Yqj,zg3.?$>0(?Ll4!p^u}-)*%Qh%{dP{yiTb?N%^~B@RNfDJw' );
define( 'SECURE_AUTH_KEY',  '};ri?,G;VNpGqrAVI*78sAr!K?8{Ll-`9couBvvduRnAq]MGx(PfCIE(F%|/0$Xv' );
define( 'LOGGED_IN_KEY',    'mJjI#hk4HA3]jOpa|,bS.xgo#0zV.lb4*KPhM~Y3q3FM@4H5HIwhxZmC%Hc5:* H' );
define( 'NONCE_KEY',        'K~jK]]L@&?g~a^C9}drSU/f5bb<`GO^4>*,13pNLp6: 3GNOP*38zF}vC9pNhq?$' );
define( 'AUTH_SALT',        'm!te`:G)Bxw5i]HCy/IbKT.=2sM!{M]atqApq+S^HEHn7T{ >yYJK)w.p^`#;.h@' );
define( 'SECURE_AUTH_SALT', '{|[U7g[,,9N?*V_wxxg(k&W&)BHu/jM]?iR$X-x0tj!Q1$N~Ec@}FX8UxfudDL8F' );
define( 'LOGGED_IN_SALT',   'UE.Lt/*I0C{L@/SiuOjyBPr%y0%w;G)F3dNa/lrMX*/hkE(N|MNg@v>2;5%.=Bqu' );
define( 'NONCE_SALT',       '0U2:-0^7?,RXg.L^.%;k]q8**s+aiK0T~HBxu6yu)Aztxx8uGH,ca04%}YVLrS3u' );

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
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
