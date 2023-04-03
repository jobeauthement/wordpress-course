<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n=o(Uws^kYl69iG|Dp&~hBbXK|p05w/k6NbMoXSdrQh|_oTPB0A0kPFVg&SYQYjT' );
define( 'SECURE_AUTH_KEY',  'U]-Q3xGF+#zLZ?q=v6u:-<a30yeU>K+bC}f!^_)*ab#{c3sNe;L<bBP+|kD_-(&*' );
define( 'LOGGED_IN_KEY',    'p/jzo9hyg/NzV2pZGQ*TGyetht*u>!jdt_::s-m2&8xy9]>$g<Y|C QaJj7$q%=f' );
define( 'NONCE_KEY',        '^Y 4#c(9o_9{(U@jUk-64dN^C+(Hjxh+hvj%|OUeVOJ h8K}jb9MD6kCkO[>VA(B' );
define( 'AUTH_SALT',        '%}O6?~YO&7)P `Z+u,uL@]s^t)OOF8;Ep~]-9uS`t@z~}C1yi.;r=oR;-8-v|!^-' );
define( 'SECURE_AUTH_SALT', '4$P&%<n]=+(7me;BN?O;iheJs~,6WfCfjEnP%)-SIOC#l9{yD)d+p7842QAlD`k}' );
define( 'LOGGED_IN_SALT',   '43k6W:O;jgevu u{8{H}&X8z5|XWv?xk8ng%Mt,swsmkv3VdpSN^rJ9]OW Sf7P!' );
define( 'NONCE_SALT',       'A_Qr/]/q?w8J?wT-1)2sKTf!#![5}+?x8{-F/N9oXPkK@,S(njQLzHF25YAx3yme' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
