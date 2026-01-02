<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-demo' );

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
define( 'AUTH_KEY',         ':f==c83>IW?Vfhs)kEd~WgXJZ: +^hQ9;B^:b12L&//&p)&A8ij;<uW;^Hv~BhO&' );
define( 'SECURE_AUTH_KEY',  'IaY(wbUuDqQvUeK5[$CKsobw5M+9f6Bh/R5h.s;S%{FY44o[ic<)Ocv$-[-`-X{R' );
define( 'LOGGED_IN_KEY',    'ftfEJHo^l 8MIAg^x*xQRNVSCL3URrQ3cDU=d~M;u;.zO=:o4/c(#X@&0G?g:b3;' );
define( 'NONCE_KEY',        'nI3*zKXZs*F-i3O.`jICELS[s$*LAk~PCAq]yqM_6J94(N/k?)xu%ZDK|,y!L+@d' );
define( 'AUTH_SALT',        '$V-T/:JW|Bg<#c9,Qy,X;3E[w,&pn*r}GU]>qid1ql<fLimz_v@D6(iY@x5#LeBh' );
define( 'SECURE_AUTH_SALT', 'PJP22txYNe<,*p6Sn{C~gwiD`MR<g2l>} pQ4V{pORz`&n;m6,j?LtKT!9I3)e(>' );
define( 'LOGGED_IN_SALT',   '1Msg+V8&,duJL*gm%$mz%w H<}2J(VRwSE.>r*NpMOoY9N<m9o1j-?)nO_ ^B Y,' );
define( 'NONCE_SALT',       '0bG<>`y2Ux?=OqJ&hY6Ps(Vn9xRcz8ZOw}Dh}:hjm UY.<USlk{}t2|(U01!R~u?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
