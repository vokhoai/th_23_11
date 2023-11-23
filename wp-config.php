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
define( 'DB_NAME', 'th_last' );

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
define( 'AUTH_KEY',         '=a~]<N(Sp+rg4OK}Bw(pgGQr]&t7tJSG4I9sc(r]^sb<sB>&b(l5bHp1$VI&5;hW' );
define( 'SECURE_AUTH_KEY',  'prgy5_SgJ`($K%qW3FuIA~qJg~=D&PVZd?l%^LCFC!MJ1|/JaRr{F*UW<F!i#hqg' );
define( 'LOGGED_IN_KEY',    'A05X~Z |{{J~mE<YOi!:7r)SU7%-g1[MPEker$;|]/1k$O?Xl>G0 4J_n9fIKZ&1' );
define( 'NONCE_KEY',        'pR?{@yi{aT?s^Cm4~FPIWP}k;-8X6e3p31C=EnYDEAAz+BR/0vgV@vb,cWb6Wk_5' );
define( 'AUTH_SALT',        'i.(o]-%U,1HvG~O_s0wq!wa)b.kKY$eti:=/3hDHiY[?!BAnk3JK(u661%871I+m' );
define( 'SECURE_AUTH_SALT', ']%X`dz4wq4u#aJbuidj+-KJDf6O qN,<k-vaB>3dSbbg,eW=(E2Oc{S}sc,.72<}' );
define( 'LOGGED_IN_SALT',   '2[i*!&Jko[jTilH)&K+OM%hP U@ -Eq@.]pz[BD~,>UBK|XSrzKYJ/0So:x@s!)i' );
define( 'NONCE_SALT',       '!*nH4d_GF0oMT.uME=NQ&*oVMo)I{JZ,~ExY:GGjO2x1b(dx&77DA2Qi2W(Y9a:[' );

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


define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress-6.4.1/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
