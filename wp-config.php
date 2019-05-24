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
define( 'DB_NAME', 'acf-sandbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`S3{{kyh >5I-aBkvtW5M_r6{:yV{ty$G.SYs_95yEK=rwAH}.>#fUil@~-t8;jK' );
define( 'SECURE_AUTH_KEY',  'TscJRAWm Wz@1pk+r+^g->x-QRl>ymQ&r|g-.2{E3oxidHoHrLi.nz>J{{k,&emF' );
define( 'LOGGED_IN_KEY',    '8A%pTS1l!ui`B[On5%AZnTdHnt i+oU;#bL[qj5y]p`kSLi@OmBT0@yb2KPA:<p_' );
define( 'NONCE_KEY',        '?$`Nzel)|3=NFU(![->o.EAx~knm>1/E^T(Cfkt]7+>[soI+[O`d# _H)#|j~?+3' );
define( 'AUTH_SALT',        'd1H0>9x+M.aNhfdJmcf(?Sr4dW.j7?]+~4eX$w9p!URQnK--4C`+R?y%J@gCA5rT' );
define( 'SECURE_AUTH_SALT', '=j/;k~b?}r.nhURV8lZ+RDeeuA>rj%z7#@FMAdyq<Q|8!1^P1IpeB%<N`Qd/Y#!d' );
define( 'LOGGED_IN_SALT',   '%{<Jl@YsQR~%&$uK8=4F(y%nL3dQXnoceK-?uM!+9DX?1Cb=rOqE(81@}+W1+1Td' );
define( 'NONCE_SALT',       '2,_~cN?4^.iAyB/=vfAqQCTeY1`uY<_3cpmR{-r:d1<[<BTqzgq:U$_$iu1)G[Y*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
