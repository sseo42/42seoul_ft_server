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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'z(ZZCFBP^W^&]kauua/yaK/gz$8m,nhjYB+rd|pageoQ]qzmBwwS <LebNReza}F' );
define( 'SECURE_AUTH_KEY',  '{P<C#~7COB9t;lo_vefV1!8cAXIt=b^L3dUbBU:s.,&Zi>B%tj0Us 6/J}ud20M=' );
define( 'LOGGED_IN_KEY',    'uWKU&+ZuK0zm/hil:=h=kIYL,qLV&X+N?im#W| k=Bb W1f[fEgjjkTy[Xtn<G)N' );
define( 'NONCE_KEY',        'YuN&V;Ss:E(LBqD<H!Y&7D@`F|qBsv^,M,mahC6K[lwRbz[0E1s20;Z]#``*8}i4' );
define( 'AUTH_SALT',        'TCmV*2Q+bTDBh0UaYIvrr=|Gyq8ukJF$l4zl~=,=puPy+CWw?=coV-1yo&=c!aE1' );
define( 'SECURE_AUTH_SALT', 'C2_Qox-uSq$5v.M&I+gO &x[v<wy=X*<^8Jc A`TB#qxvqz=?L08H`h+s-<{Dg;8' );
define( 'LOGGED_IN_SALT',   'qCyu7BdABF!-Zm30X##qY-}V1v8:SZzJz_(0L`2UANp/bgMdW:$Mtj k^6z8tG/c' );
define( 'NONCE_SALT',       '=,$b{G2dAp)A0&j{WH:)t/+x9In#m0W<9=V;qgR-oiu(9YS]],qj}*l[<#Z$D{01' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
