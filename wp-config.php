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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'advanticwealth' );

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
define( 'AUTH_KEY',         '>8rF21khgi06c!FOnyI-m1g&_7zM0~^fw2P9MbVKAu@/r%Y Z!xlnenPE1j%t5YQ' );
define( 'SECURE_AUTH_KEY',  'R[HfV#?luOl2;c,4uku&6hp@Lq.~~tn .poQnGSC%Lb`Lj}fYMjPO93G|cpVdw~:' );
define( 'LOGGED_IN_KEY',    'h7OK)A}c,!w-W$dBO8GNRC !{K+Cx#Lkq9Q[H#LJ%+<IV5EF8T&33Je34%EztZAs' );
define( 'NONCE_KEY',        'q[U=@+H>rf=vu</G16!I8L4?}`)=[S$Mk+Sj|UPK4{`PwTSlK]guonR.AE-%|zMr' );
define( 'AUTH_SALT',        '3R.>>x:ApOS_3l_w!JLM{X>wh[&9G|]aD=}aIqL`gR_]i}MaU#YrYrmb#)[E-QP@' );
define( 'SECURE_AUTH_SALT', 'iYSM*|;]wQ(vp/:7;nLn,tZIgi>opd2!(h!TigM<9pzBE;y,_j&6EMD4Y=F8XmD.' );
define( 'LOGGED_IN_SALT',   '(%HLhj$PyS5iRD$5LU*2jXg^3+&+jVsZ`#G-IrG:?lueq?6DJ~CWLJv7_Aan|@%a' );
define( 'NONCE_SALT',       'q3R*Xvp<D[5qA>i[C]<Bd0kfg]~2mVxRDm0ji{(c-{#q`A`(zQIWl>PZ~6vv^`&Z' );

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
