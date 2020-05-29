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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tgdesign_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SuN >$~)&cf![p*L+~A4ff^OFi{J`#X@,quJYx,F;cU`p4qi:_{1)P 82!Y.PH{Y');
	define('SECURE_AUTH_KEY',  'dad;U!#-C^-d%SG|-y&Q;1bOZT.9o8x/,+,sahc205CY1)+{^ZU$3dN` M1aYotz');
	define('LOGGED_IN_KEY',    '[AYe0vhO,8{utl)RM5H|0DFW@d*mhd/m_[w2bV6T{!rl~JL0O:#oIvDZgDRX?(Q6');
	define('NONCE_KEY',        '|q.ujsV=b(G(eOPS^VYd+ML+h.XdAL;^p%W-83phDB|ZtBRg|T96.TB__S^b+ R&');
	define('AUTH_SALT',        '7j# gK.-TOC;pBCkRQDe-yW(/CMtogf+kTnyQ/oFiX[b w4~6C,`q*~y7L}Jkc^?');
	define('SECURE_AUTH_SALT', 'SYlDNl#I=j_.zq!mCZ(|-PX9pa{|*1B@+]VWP?Dv~>Yn25FEuGq%R-`+0L:LGl^Y');
	define('LOGGED_IN_SALT',   'aB]jPWLI*7b:rj5UcH&>^!wJ,jZt,X4+SnhoPI&0RN1Mi2NM-G !UBQN8H[8IAn0');
	define('NONCE_SALT',       'q2#U-m5;-tiYqmVwBaaukg&^Iw8G;|Im?nm|a{q7fL@7Ko=_S2F-.1H7&+~H5/+]');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
