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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2022' );

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
define( 'AUTH_KEY',         'Gi5=FWb.CrvtLD@?g^}B:2N5Z3U9TS<ZC^}w/:_/F<NgNq{J.%rUe6E^J,;q|(~a' );
define( 'SECURE_AUTH_KEY',  'V{M;Bbrb|Ra>}(?*5Dm%BddSxpILPpXQ!vBR7%NYUkyx4NnRuGWh3gBAaGr2TN^~' );
define( 'LOGGED_IN_KEY',    'N.B!4mapJOqY<Yz<d:(X*Ts~Sk.=;ox&2p=dMC~qFqi!S)3 3W`AfN/k~b8NDK02' );
define( 'NONCE_KEY',        '[0{RN?{:`&q$#ehE,L8#0I9tf` J|<qy!S+c{;I=[|IrC&gvxMJXtZLTeACPMl|`' );
define( 'AUTH_SALT',        'fF@oP^_t!n]LBu)=FM&bax&C{Bs$4`a%j{?wwuciyunh_:{alngPE-E5{.aVA!EA' );
define( 'SECURE_AUTH_SALT', '`6fCC{R%YL2|D!1qP!#b_Y60iLT1LtNe/_9=E=>vhTb<7->ow]`U82cf8bfIdv|2' );
define( 'LOGGED_IN_SALT',   'JC?Eo?M28D|$PRCG5__wt;?^ZaKB0 %9$Yk+I)6+u*Xt6M[A395iWv~zS0gMvEup' );
define( 'NONCE_SALT',       'a(>+o~9)Z9X x:^,!#REy<E[.86;=+VS=vpirofjU{w/i5rL$uaX?+!QDu!HD(u1' );

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
