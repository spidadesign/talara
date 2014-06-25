<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'talara');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k#bqMd~ZJI l6 h?+ajy?qQFuYB]Vt)[22F$zzH%s]O|Q_2/}y6QX&;80CnZ4isz');
define('SECURE_AUTH_KEY',  'xU^TR9RnRix}GMCtGV1yt3(_p~s.KZ3U Bz;]F{iko?PC [Wr+&.GB@<`m~bRd,=');
define('LOGGED_IN_KEY',    '_B~PP-XCbabe&oL]> 6l?CO~GHn|#.$C``;k^_75r|YrE$g41>FxAE?vD]zrp]Na');
define('NONCE_KEY',        ';1`jV]^tT:7rQ^e0fi}(f)3jk+ )DY}e]R+H3%^ELoiPK(o)~c]?!.X{:l.r0>+3');
define('AUTH_SALT',        ')+A+<^ygoE=h[}c*$|n|CS.Y$Xv:!6+vmOXgaf+[vV7Y<}Dd1#VG+>bk^FoBluwn');
define('SECURE_AUTH_SALT', 'UxW]:-ATN,9{nI|Z7U`ztn9V65uj*R=Q,4VK.#jMg60BsE3XK9rvO|flqFtrhAxv');
define('LOGGED_IN_SALT',   '{D1cMm(B^Do1u-E;-3~tyhA%MU-gfi]08<3=Ut@lBOT,+fRaJ}LdTtM<{-!3{qNo');
define('NONCE_SALT',       '?,v0]Tqzs|3:M[.e-$=iV!JytEP(cQv5BeC0{N?cg-:;n+S-G@:Fu~5q1xNj,4aH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
