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
define( 'DB_NAME', 'ticket_inquiry' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'sulochana123' );

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
define( 'AUTH_KEY',         'iQ6X{;ZW5>,Vo:5?tz emZr2KTh}zK5;Qjb` ]]2[73(h5^eJlKu/s?f%2x*BFI&' );
define( 'SECURE_AUTH_KEY',  'b~_p=l4`GuAZX9a$GgdZbB|P-5;n5Ynxq`7(aUGwd,`yst`jwuxU!5aqomtN#}0?' );
define( 'LOGGED_IN_KEY',    '%mR5Zd<RZsEQegRoRcI:=n$t8jc8drBxjl~DCske7MB@f0y;)w)O^6iO$?/8)EfF' );
define( 'NONCE_KEY',        'f[ 6XDTJe.U!Os8oUSsW<$Iz9CfF)b0JC%b9h#EQ3l-gI~;<nsbUJ*8h,^P/IilG' );
define( 'AUTH_SALT',        'g9Pm@Uic}tzhb?z,SdI0d<%ZA4YnBSSsF$AW6w9-Xv7Y}|b`FHOoD)O$ueCpTrfU' );
define( 'SECURE_AUTH_SALT', 'Dk0lwcW|9&zC*QH}s_HO0 cyS&M 0l0]Wg>4xw.OD9c*EL2zeXi@LGK2M.)H6&]@' );
define( 'LOGGED_IN_SALT',   '[meC|o/UvhlmLX,|b/~92oHrbT:[GG:las%Kr>sM E|E7L 7+/[|#0s^0Bo]FZXL' );
define( 'NONCE_SALT',       '4#<ghj$ZD#6 /[@6mf|nNL!:*,ItL3MU&OCw(*19PhRs*7aG9RABVAw _YTX? ![' );

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
