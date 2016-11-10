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
define('DB_NAME', 'battalio_db');

/** MySQL database username */
define('DB_USER', 'battalio_dbroot');

/** MySQL database password */
define('DB_PASSWORD', 'A%lo9eR-$1LM2)yF');

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
define('AUTH_KEY',         '6%L8f:%%K|-V Pf&H3SNTE>[L[|h%tmpkZqyaAg?;r|%2mK[-jANgXR8s>q7z?+O');
define('SECURE_AUTH_KEY',  '-TUs`P-0@;TX^oy}_lgnTcCwZHnAy-VR]FR+}p|V}v m)fy-L*{,g^X[oZhUdvQi');
define('LOGGED_IN_KEY',    'N+bQpciv*A_xmu837+0g NjB]G%1En|.*m1>l7x-W~IWj&d>`ZhXPy,pT8zAwV1w');
define('NONCE_KEY',        'Anu&*?+xK<4 99hwSO}6Pe^=ir=ADY01e^eXzgq5:yqY,;cqc<c@/TZ**p+`+Q2D');
define('AUTH_SALT',        'CoJnB[jRvLMocspHcK-lDfoSoXS-9t=%e5b|z|U|JN&hUh$8BzLKQKJd|m6bN?Gf');
define('SECURE_AUTH_SALT', '2ZtNug=5i02C!c#.oO=n=0v%`XA0>*Oz()wR~$B76NX#G1::rQ<Cop eqZF[S-]P');
define('LOGGED_IN_SALT',   'Br-KR&!h*g*O3=uKLYkSO*~*l<f2i{p8$6|zJH|yv5KcpW/}y=f)8J<+beHM;4::');
define('NONCE_SALT',       '@V+:cO.{+<?j;},5S,M`+||}!sAv>k9-=g(@|Ofj{z}pc7&/kRT>X@g&P/DzR{,N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'battalion_';
// $table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
// define('SCRIPT_DEBUG', true);

define('DISALLOW_FILE_EDIT',true);

if($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
	define('FS_METHOD', 'direct');
} 


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
