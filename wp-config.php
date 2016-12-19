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
// Check for a local config file
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
   define( 'WP_LOCAL_DEV', true );
   include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
   // ** MySQL settings - You can get this info from your web host ** //
   /** The name of the database for WordPress */
   define('DB_NAME', 'cafe_hangout');

   /** MySQL database username */
   define('DB_USER', 'cafe_hangout');

   /** MySQL database password */
   define('DB_PASSWORD', 'mHgqq4l4VOp5');

   /** MySQL hostname */
   define('DB_HOST', 'localhost');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3Z#ddfIhjBt7cCA U0j!z Nb.`d$|:Fh?O!zCd9$`tXnxOG++WywwW73Zm`Cu~ <');
define('SECURE_AUTH_KEY',  ',4tto RTmU,27!Gwx^!m_/j+u>0ti9$u/A^ `$Rp#EHai12ClQ];`|$B|1{Au>_}');
define('LOGGED_IN_KEY',    'wOmdT%7cf AeI-|z-yRMsvE??.q4J<6A8VFW]aZn(fv[eB@i&kqw&0Qic$9cc1XW');
define('NONCE_KEY',        'A|]c;5B)F3@%@!Dvco4.~<ZQ?d5C_!]/9== e-GmR^!QQ!p&sU3q| 4~0P`)NCp(');
define('AUTH_SALT',        'h6kda.JYjQL*g8t%59SJ=Yi!4HG1VcE7M6mGGU;SH<$cca*0cCu)RTozIRRDe}b]');
define('SECURE_AUTH_SALT', 'YLD 1,ctOD.DXODxp3EQLh~R,xyl>JnPAuy}~2?V?>:?6!;ljfV+({[RUW,Z;$:;');
define('LOGGED_IN_SALT',   'GDyR8N!*46;/z {.ciL I/`Oa4yQ*>@Xyr,#oRuw]39&VR@-i-qh2H$zW~;Ea{!v');
define('NONCE_SALT',       'MI.7co(7k]g-Fc;7bI>lh+~=H +jc}*:)|UKRUDt4fw5|-bbY>-VN_fWMoH(r11g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
