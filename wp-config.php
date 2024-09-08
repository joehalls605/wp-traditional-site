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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'eAIV6O91H^XL4h%EL#[+~h/z@64CA}D>!Uay!p8v8M} @C`}.Pe]nEc)ulWj5Jk<' );
define( 'SECURE_AUTH_KEY',   'j8rWnY0)$ys+U.*^NPO{GBcL*YqpC+x)U29~l8Y[`=0f5X#2<hS9aPP.&vKg3i~V' );
define( 'LOGGED_IN_KEY',     ')_j}{}hf>1IL)gGQKD:u|Lqfs:N=Bh[-n-k>vdh!f)bq!U)oi$OiV8c0Snh!bX#}' );
define( 'NONCE_KEY',         'ipM|& FX7yJpN,GB?:#D+,ew([f=*I^mhz4[8}O2@dNV.j)|*|:;.dl2,6lFC.<%' );
define( 'AUTH_SALT',         'vo!@NbdB{s[.C)AiFn#{YTd3JbrZvPa%)nHAAH]fZ{QNSc@d+nwPrcn{^AR={*ok' );
define( 'SECURE_AUTH_SALT',  '7MNQXm+o;M=}=?9Szhc0f>2Z&myKX_ q]9FH7wZJiUU{>#&bemA72<)RzG[TGGTe' );
define( 'LOGGED_IN_SALT',    '23N8Bba$0szcT0vprc|3fhTihMQy9!P 9&JH#kDss-oBtt|<WW_.t84IB[<]rhIQ' );
define( 'NONCE_SALT',        '1AP8Jsu ixFUW7a:(nBiVUH3o{B~BB:=)$Dk*gs2+(J;x9t;cZt18UGZ!0,<PESm' );
define( 'WP_CACHE_KEY_SALT', 'uOT`?ZQMN`&$lD8,><O-qfKN_w4#k2_237!bd=)Y@jEDjlFU%$JljdSAnSg[ji)q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
