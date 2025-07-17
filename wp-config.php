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
// Detect if local or production
if (
    isset($_SERVER['HTTP_HOST']) && 
    ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_NAME'] === 'localhost')
) {
    // Local (XAMPP)
    define( 'DB_NAME', 'creative_monk' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', 'localhost' );

    define( 'WP_HOME', 'http://localhost/creativemonk' ); // No trailing slash
    define( 'WP_SITEURL', 'http://localhost/creativemonk' );
} else {
    // Production (Hostinger)
    define( 'DB_NAME', 'u777841430_CuUIa' );
    define( 'DB_USER', 'u777841430_Fam9p' );
    define( 'DB_PASSWORD', 'oY4:6kvAN6' );
    define( 'DB_HOST', 'localhost' );

    define( 'WP_HOME', 'https://antiquewhite-lobster-817950.hostingersite.com' ); // No trailing slash
    define( 'WP_SITEURL', 'https://antiquewhite-lobster-817950.hostingersite.com' );
}


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
define( 'AUTH_KEY',         '7I~COvd@&(Rt|} (@NED^Q#ig1?FA|Bp`X|6rl5h8P$zCAG?`]iKx]|{#5qt#mA ' );
define( 'SECURE_AUTH_KEY',  'kVznq$:o:_<sT9PR92as6_g|&j6A.RY7mFSMe?xN|h{j{GQuLS/?on#y4,=sq_9Z' );
define( 'LOGGED_IN_KEY',    'L%@qG Vk)H}9DWWvrd`EUc|gwrQ)pWTDwd:#O4jicliH@pkJsb^o4+ZM_Ycys :!' );
define( 'NONCE_KEY',        'HFl5Fm6Ew8~kA?XB0#),8:,/nUw0En%5lfGEHwU,V:PIh^.uOv$Xgfd4ugk`.V7.' );
define( 'AUTH_SALT',        'TW[5$~&DK2uI6^DFv}a$DPs`sd7CtM9@^TyAlRW)~YTP6d4KRQFmilcBsHamB,gj' );
define( 'SECURE_AUTH_SALT', 'Gwzi?m!vUlWyPNSDT_e>wCWbhy&KbzWPv6MM1uI-]9MXplXC7@U= -[Md04*4pt%' );
define( 'LOGGED_IN_SALT',   'a7_2H-M&K)8e[4TH&B0!(@H8FyY/u^}>(?1q|5D-vVpH-`1Ab9h7Y)e8u:}@/dZM' );
define( 'NONCE_SALT',       '<0C6<b#Y,GIlq,P2 diLz=/fVMeOfS0KM-m^_+vh<q-M^;WJN_ulm`9d0yL8aY??' );

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
