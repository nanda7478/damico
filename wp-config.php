<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'trimurty_damico');

/** MySQL database username */
define('DB_USER', 'trimurty_james');

/** MySQL database password */
define('DB_PASSWORD', 'ml8(@v){RzLD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{GwS[7NcJAdu2]mOYuSP;MXMc:h}cz^7~D92oH#$>5&:A:NM(BPv9{Xo$01Pc^a?');
define('SECURE_AUTH_KEY',  'gii(|21)W+AAg:U2]Z=F*HseCJ*i%5hVlkZ%o^vJ@jfm?0Uq;:<xtHU3?Nq7?=rg');
define('LOGGED_IN_KEY',    '4IlpFJ/ohoBEC1CdRgk0uE9F?elTu@_@_0|9r2,e^mW)3`*l_@x4&GE:P5?kkZQy');
define('NONCE_KEY',        '>@BC,FlBm&u<R)46FV^3`shw8FQ{|K:g8&o!l({ {<R[K^J/G]?R*o&|Qzty%6pX');
define('AUTH_SALT',        'x[61t?#k{KLi*GxUjWG(k|w-{13hV]Q]G?wpl ;MX9Fj&kZLx~*Z,/26{,PW{u4n');
define('SECURE_AUTH_SALT', '1q}(tUi ftDA=F)8O(w%9X^l3$a[XYee`?Eo$nj`99gTszB u`c[d3XQco^2k^e!');
define('LOGGED_IN_SALT',   '6o@];p/},~HT|.gcQ+^9V*;};TZ)0i?YtZ<v (K@VG]9C#]ZHe%y8^N&ABcbeHaH');
define('NONCE_SALT',       'RlM;uljoTn`GgMH!r#_9(BPehAOnsJpAcINTU<,!5AW1I6XJ<L)abv23q},U;Las');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdco_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
