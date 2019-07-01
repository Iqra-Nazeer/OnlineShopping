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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'YS4&7QYO8Pz$S@zmXKHv,b*).1R;#>iYeXl<m]0C$(V>.Zu`dR:0Z+_2!^~iHg>u' );
define( 'SECURE_AUTH_KEY',  '}uvcGD}/QiS{15R>8&F>:*3He4FFviu,d%0ONnUl3{,UrH^e}7y9RMT`vaG>5LMD' );
define( 'LOGGED_IN_KEY',    'SL8^BP ObEtADuE^kj;E`Rosqht<y+ %TwSU//RuE?3co70mdegTw|J;E=$A!@(6' );
define( 'NONCE_KEY',        'QY%=:v/tS)w(O6FgzpteeyA4>I^j%^ol~2VL73$[w7|A#!Nma[, Z$>[!2x,`n1b' );
define( 'AUTH_SALT',        '+TLxxf}jFrf2V8;a1EyuD@x39XD%]+U*TD25Sw}&HL4}Fqreyj~`OH&/>5;Xo_Hv' );
define( 'SECURE_AUTH_SALT', 'cD9D8;$V>X,,HkjE3nKaPq.R(+|=N$a8(:B[KxJ1]9=;PR/2v&-TN+o3!_M$l^4V' );
define( 'LOGGED_IN_SALT',   '+l1z$^KR>)l9g2VlZ|?}K~EBt^W]wOc{_ydL-3/:$6j#L9$ Lpp%#2A2}1yfpo{(' );
define( 'NONCE_SALT',       'Jt.]`1p3#~]WbsU1nsCZ|ni51sfkTChO(2TE@j3x^3JbX4>}x`KNY=*]Wcdl@D%x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
