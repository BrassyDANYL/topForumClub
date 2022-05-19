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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'FS_METHOD', 'direct' );
define( 'DB_NAME', 'topforum' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[sJ>I0 4A/AzdUx1qM.KBhlba ;[&1Hp)XtG>Xh7{W>!,/?SH^#ykQaZ=tGd=W{-' );
define( 'SECURE_AUTH_KEY',   'W0ln:3AQ!>b&(p-TiCS[[$<~{$Od 6Iu8PyG+?QqoBw|xi_1)&+p%h|J$/~!amL?' );
define( 'LOGGED_IN_KEY',     'QM[:mu N,ShdUb-5F#>c#t9pkY,xgLU]`s`F,Ga_gx8#Hd@a[;v.~E5nO@n{X||n' );
define( 'NONCE_KEY',         '@p<`Oh1#xMPly0(H9Cv_n{-#HZX_~TiB4,>xDDmb^+S+=]mflA5:^`zkO4>?FGVE' );
define( 'AUTH_SALT',         'r}OHXU-v7(ezHxbsog6,m0M|Do!wBi&IV6/V4C4vbFc[~|TiZWFXwt?2=s{N39@/' );
define( 'SECURE_AUTH_SALT',  'd/@Lxu$FX>cQlo(:uN!4T#KfR[oL41x} g*y8c3lT(^=HwvT3Z4DpBTLZprOUjjg' );
define( 'LOGGED_IN_SALT',    'X}+l6Vg&@oD>:r>zLeK`2FIMk}QF%iYqS3r:e,&F6X8]eEzv5bNX(R#DKmkQ^3CI' );
define( 'NONCE_SALT',        '|y99LUMXO9`KhQT~LuL:{XlV/D[lj[oXuVb7@9QwTdUpHoc&24!]T@_ZDmMqS/Y>' );
define( 'WP_CACHE_KEY_SALT', 't:]H <a0/a?HvWy&aX9V(yHh*V,C5KI>w,KZG[[Kvm$WRJ! 0FjWYeh46>SEe&*g' );


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
