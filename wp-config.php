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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-blog' );

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
define( 'AUTH_KEY',         'eGCTp&@W/?YAa]OoVE{CT&.#]a(g0my+ox0@2j%-Yd$/5zR~k2R]nbM%>.avAP1!' );
define( 'SECURE_AUTH_KEY',  ':%ZeD+y&,y_bNU:{v36{.<M2enRYyIqn5BRp{,ba9/R#BgieXKMhpPr8u`PH}OZp' );
define( 'LOGGED_IN_KEY',    '8.iHEN_;FM22!LET|=33JSYg8Qnj2HtFC_/ngL1TYt_>#)/fY{@iajge:IT|8t.]' );
define( 'NONCE_KEY',        'cD~?C_OnPXN ?(,s%Abpo Ks].oE6mO%=3E>-aTKZR*G|8kLVr_;4.uD$J>%iFK_' );
define( 'AUTH_SALT',        'Q1GAv[_;mM>T,r*=N7-P={@q8KJd_ps;N6ZCR^.jFSN(y2)7L~!R:qm3}-+07E-z' );
define( 'SECURE_AUTH_SALT', 'GMn{D).Od!fMw@3A(%KrR`^=r5eh`C?J<9%ki/=HNI%i9?19;9p.$g(y2`wvK&)K' );
define( 'LOGGED_IN_SALT',   'NQ-cH%f`tlVlF.p]>,nZl`~,9&l3Y]Xzzgpfnj}{H2>~y&BTH|n/?CYVxI!wp-ba' );
define( 'NONCE_SALT',       '>5QY6#Umv-$d8e&6e#?Q2&Iw`yKf~$L0DQYLM4?t*2l#ahjZ!2l;Xs=/Z^q=h:,L' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
