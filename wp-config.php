<?php
define( 'WP_CACHE', true );
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
define('DB_NAME', 'xaphu_com_2');

/** MySQL database username */
define('DB_USER', 'xaphucom2');

/** MySQL database password */
define('DB_PASSWORD', '9F-9EEsy');

/** MySQL hostname */
define('DB_HOST', 'mysql.xaphu.com');

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
define('AUTH_KEY',         '`u55Q?!DUDm52F1S+shvMd8/@uN(oD`Hx)LmEax;UhJli;NKhEhXVqZkb*5|xot%');
define('SECURE_AUTH_KEY',  'QhCLIY_SPUMJ~@`3vb/Kx|LsaCFia9ru~~b9ux?LmI7p%X&U%yLzS4i*92zuc^!&');
define('LOGGED_IN_KEY',    'pH64K23sI&63!WYPeR8lEdNhl(S3!kFUHd:sNp/g$&?!|"PD?H"tyZQD7^$N~*J#');
define('NONCE_KEY',        'j~#tjsRluuk5h^TQa5:R7HmT5bseY0dQQi:Zy2?YhIuG$I2)b;@#7X1l!D%3?0|F');
define('AUTH_SALT',        '&&MyWka;sih?XEBB_xS"E(Ij&"?jjgLjd(%LI&DzEgl@:`sq(&INP%cetpG*6S^6');
define('SECURE_AUTH_SALT', 'F4@o$Qusa&aR3hvAXhlIuzFQ?GGYUkZPzsnDq2D&w/~~a2Txj8HoGdGrJ|ZGe@fx');
define('LOGGED_IN_SALT',   'oUCd|CsZ`k&CoQMVD?jR#;7e5QxrHOsqV7egrpJ19cR`k;uRSPoa@5Wb/UmBf1oW');
define('NONCE_SALT',       'DpP0M@mK`8Q7J2()vYbR;*S)dQ*dNMIA*tkyOmAdfgev%)$FDcg1AGPZUJ15V|OF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_br3iki_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
