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
define( 'DB_NAME', 'restapi' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '-G(cVJ-4{V]#4n_PNv7Oh9QS6tIWIqWX{G@2D2?Eg?yS>mVgZ++qf];#FCD%edt8' );
define( 'SECURE_AUTH_KEY',  'CY).vY$nIJ*6dG(k)e!Q^M|vO]^-m&@UcG{LaW>Yd$|+t(0/6k*xsth)=rdNV [a' );
define( 'LOGGED_IN_KEY',    'DX=|)@)yJfM{CKE&oR0K7JN%^ESC|v0U>Dr7|AwU0H*+:K~y6$k,{GWu& S[5}@m' );
define( 'NONCE_KEY',        'nn|7_$hR}Og!.MC VY^RCTdt4bWNn[ZnpWs66Jwxwn Rnnvz~/l20dQb]Ptk>E16' );
define( 'AUTH_SALT',        '}nFEmn=;J<F:`Btx<A1cRL^<8X92$P:>]?]}I4sbOZexg^h?MD;)D>KK)ZZ o:gR' );
define( 'SECURE_AUTH_SALT', 'Jm .ly!L,.iF|S0Sbv$~/QQ7;wcDQ>5k so29#5q5.nC,c>+5x` Tr8>g)BnRw2`' );
define( 'LOGGED_IN_SALT',   'J?mpk!sY>)Cg-JNU^}|Sz52dpA6^nf,>ui.gQWN|qaQTwaHu]&W~I1NRGrbn@4q=' );
define( 'NONCE_SALT',       '61dV SRns8B{sX@sL}t<$WX$lcuz*`~7o|,e0GB?t5fq@iQe`]M?w/Y6llnm$L24' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
