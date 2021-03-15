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
 * @package WordPress */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ft_db');

/** MySQL database username */
define('DB_USER', 'tblink');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'gUjmlv.-C)r2Eea|3{/:^1Q#(j$w?IO(=hP]ihQ<=bC4+j;In`/z[:S<;a)d,v<n');
define('SECURE_AUTH_KEY',  '>#NOUD@MpU6Q~<E._z)fw>6-Nf<I(X>{R_W-JmVvv}s_0B%WQcu6E >k.n,H#(:K');
define('LOGGED_IN_KEY',    'I^3%z`5/hUKtmimE~Sx[^T]5/9uvlW7rypmXl2q|ocN|n%5bgu+2ySE=}7-3_b+5');
define('NONCE_KEY',        '42>cs.+q|Y/gD}vfW[SFcTW3c]TlPZ.,?h2NcA`pi`DL,0os{+B5Or,UCKiW,0~-');
define('AUTH_SALT',        'Pwr^ b>_KFKA+K||F y--vcKPP_+Y*Mka[/>Sb.]</#!|MWgJTaD:1ekOo(G9:TW');
define('SECURE_AUTH_SALT', 'w7L$`G#-A-=Z+[+GwP 3M}NH_-t&n59]%}PY0O3]tC1ugfv}Zd5~qRtdJ7B^Eq_`');
define('LOGGED_IN_SALT',   ']|O%o0,w[.8@^Wh]0_-3G >kMgR@/0r4^[+,mM[#w$dQR$7SaMu-d.CL0Z+LLe#J');
define('NONCE_SALT',       'R-C|,)4J5-9v0fC55pf%!|%U^l4rI3|W,0Yt^yxj#abO=e!<pj|SSNaDNFLsksi!');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
