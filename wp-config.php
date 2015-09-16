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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'GU0604*g@-|AMH=7v.yIm*&uy[]1N<mK`!yd^6b(5C1cj0KGVIC1=>jodD {u4pE');
define('SECURE_AUTH_KEY',  'L~Nr[!85#Mc&I)dYnh|c)|0r+).2ih-9Myqvf+>P[+9*MzY^QcT(px0-XTo:98Mj');
define('LOGGED_IN_KEY',    'v+h,|Mz MabB?EEqP+,5l0|x)0z}w}Incg%J|gWq_1&_9.t{?v*v32(d>hC*?upB');
define('NONCE_KEY',        'isifkfcg<:6XU7/ER|&+$7YmCo)24bD1!|_cY;;Np(YFN-6:mm-[CGI2|6,crs_i');
define('AUTH_SALT',        'e [<e-:]To]1_M%C}~y_xZ/E|JEB2XY+.MgTZ},Y2}=.+4~/(${yhFN|;%z63{k6');
define('SECURE_AUTH_SALT', ',9p)FEa0)@~{mry`%`C2)D(#R)__orEB&6i,aq#/@;n!AY^9U65d1947Rq3`gyem');
define('LOGGED_IN_SALT',   '*J&:j5kEK4z-(gAXg=Z-fI1!P|rZ{z*5!LcUDh[^+O5<g:/0Cdf>Yd7$5Meh3iTj');
define('NONCE_SALT',       'lkMG62S,4jso33wFF&_QQ~.D#-ks$q!oR]khJga+=C}$%[d(_J?RuOgfAdQ G|+d');

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

