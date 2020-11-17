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
define( 'AUTH_KEY',         '9Aly@3Az7XHC{RmCWD~%oS!f6](&uinjIF/^UI]*r1 w}bL(+Rdt>RY}),5V =;>' );
define( 'SECURE_AUTH_KEY',  'Cpq_hc>S(/YQH3FRu8|P)*[ELlo<J_G[++9]sI([E4(_sl<P1)ieWb3a.m*_tuJU' );
define( 'LOGGED_IN_KEY',    'rO<)UA;7h+zur>Y,JXlzfJzDko(C<$0D$xr[ob&E#FYEWRL6-{0(>w%RwYoT~~W3' );
define( 'NONCE_KEY',        'n}]fL, iN7ZNl=l%v5--|p~QB8_J>EG4x(~5S^Ybz><Qz_JD!pc,$AQ,0bk:#c~c' );
define( 'AUTH_SALT',        'soUVSNf-ml+QR^AsafIQiaAZt:Udxtyzwr^+MTE)>uEy,ipE8VD4j3TX5$8Hz}M|' );
define( 'SECURE_AUTH_SALT', 'b{HPM^gfvZXUx^7io/p0)8K.qL*_LnOzN*~_1{5B.sTHWk /C_Tj{R*Le=Y8U>U4' );
define( 'LOGGED_IN_SALT',   'CA4rar!e!M.!o1EHR4/2}ZSZvhD.3{bw9UU).1<^,%uNz-d*A^]5`eymvzm4[*32' );
define( 'NONCE_SALT',       'Z*U;MSBr8 2KR LIy)b@K?I^h@2,xR&gmS &`>:RX2gsbXU{2OB1!z`%uI|J$tmW' );

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
