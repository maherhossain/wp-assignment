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
define('DB_NAME', 'unite');

/** MySQL database username */
define('DB_USER', 'maherhossain');

/** MySQL database password */
define('DB_PASSWORD', '540530');

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
define('AUTH_KEY',         '(1A$|aup>z`v&nQ$xtu053mGJVA.!vrV@/n%>UZ!|{^Js;i_}=I,)vNYzyi>1jW|');
define('SECURE_AUTH_KEY',  '(Uk&pa?nb318%2,4%cW/SmPn$=VLs&[c-@AJSoS%@#2T#=XF#T=WKe`HmWDjda@Q');
define('LOGGED_IN_KEY',    'cE2U6| l2YG!7R7X{OEJ*Ijh<GUFp!<rUpwd}rPg2tv$l[*yIno{YT;)OR1f1[,p');
define('NONCE_KEY',        'Ji-|8fA5SG_9bAa~3XsyuaCf_9nv6gx^k5/6|1M&q<3)U#Q#@+T0WN>T+;M:47Ir');
define('AUTH_SALT',        '5#9?F6@XG0!YP*%>|1(XHI#:UI$6zlS^kqflh]zMNfR]}vwo[Mg%e3BRNe8W/G9U');
define('SECURE_AUTH_SALT', '10Mt{5{&2ra1nmSB&xNP/dZy=4iE`W2`2$OX~P~OJ}M9%ECVS)qyB:7Z#z%W80hy');
define('LOGGED_IN_SALT',   'tI)IflA2gzArDao-Epm[*w/.},vR#^ulG9>1% [3dN8G(.hnobG<7RQr!/>{E4C|');
define('NONCE_SALT',       '9$.NCXBekoLc`*@QK1_YR?,9b`)W)?h[{j2C[A#oF]kUg/*X)ru:q_e`}2f3Z0a5');

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
