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
define('DB_NAME', 'muahang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/RYWx/u7>e<26v,3!1en(.GLXYo_R7FIeul om1#!*s~sy(BT%Xq_Jo]dVn9rOP_');
define('SECURE_AUTH_KEY',  'Gj-?Bp:T~Vh,i .abd/A57q[TKp)Bf#V)/m%T&w4$)/:!Vg+/B[iUG4aZziy{)(Q');
define('LOGGED_IN_KEY',    'R[8pU0^iTy~*,Gje<S9,hKEFfsR{g0VdwNz?jaO]`7$B<dM2r C:g$F%AzZ)nXgV');
define('NONCE_KEY',        ':{)0bR3_Wue&:^.|EX3ynyPps0Kapws5cnxC=R.yH|wcClNCWqH(xY!:o}Q(;CM^');
define('AUTH_SALT',        'W=(2GBk^H&BiRKw(6)C6h@=]I@A.<qf-E@_Hs>;D!9dA.5oPCj?z9tpKX>DT}3bg');
define('SECURE_AUTH_SALT', 'OrQv5(}u<90~h()03nm9o5(fz]F.{ma><{B KZp0IL=/k%>j2j|YlERAvzdh7L3h');
define('LOGGED_IN_SALT',   '}jdR~3hLz^-~O:gKvIym$i1Dl}/~^g &V9enh@AA5GK!YvBOY]i%9|/80oy|c:5/');
define('NONCE_SALT',       'JU._>3`Bm<p_;F:s?yz^QL*D3IDuFeH87T8DTOPt1{rirui?hKGSbU:pra9GMZO ');

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
