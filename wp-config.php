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
define( 'DB_NAME', 'learning-centre' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ']Wk+(:k]E_pXK{vv;0.Udzh#;adw-IY8Lr5xYo.{IhBLOnmA6#>m5A?-MijiD=fc' );
define( 'SECURE_AUTH_KEY',  'cK;bJ!++Z}4Jb=~NDxeoLn-C!|!}c#m%&6Ng(!^ ^3~s*=Gu({[=Idz}=@3oMXtt' );
define( 'LOGGED_IN_KEY',    '/<{hA!UvYvfyD(|C_DS&n:XF:J*5N+W,T12M}Lu_;b70dQVYr8v0hKB`c+z+f9Hy' );
define( 'NONCE_KEY',        'a58CMv/Jxs#13]nv2.-mky4rQQ%`Tt9=T_aOuFh{||C5BD?[*/cXdXp&8@H5&mwT' );
define( 'AUTH_SALT',        '`x[F*$*I~ORA..]BD4z;rp1Tew?XOGJc_>&,:H7!j3G9@@Q>W/n<9}XgLhR!)TaH' );
define( 'SECURE_AUTH_SALT', 'O]ot[xGE%YF]0GycU-w8SVk3CXT)5udCNM^Xs+3)HaDNdrAB*RGw<1MH^d:L!fc]' );
define( 'LOGGED_IN_SALT',   '%mKoE+N8iF]9k y-/b+Ryl{;Fe,~/XHj5|EO|Ep@RNM8Z5_cmw0j=),<*~2/ 8o,' );
define( 'NONCE_SALT',       'I&HEE4/5D5b.+sEOcNf=2i`szZ{ 7of4[E<_5im7ClQ82JV>uRNBGQZsu2|OR]Nw' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
