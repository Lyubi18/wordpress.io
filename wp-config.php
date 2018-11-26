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
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress.io_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>_/%.X7!#Je>J1R/G:2VlTt+~n/|}c?,>}w8,vsKo,MMf7t3,3`%iv6NFy}6rB_k');
define('SECURE_AUTH_KEY',  '>O*0s6v_ZkG6B?*%}BR]6];kaqH>ZY8ZV0s sD$Sd6Y91F PSuQ?RE(0GWnLve8k');
define('LOGGED_IN_KEY',    'Vi,nDA=9!UNIHcK$9pan%~t&:|60K6_fKJUDTa%/_)6B2qOpdX%|3{]K_JIOA53.');
define('NONCE_KEY',        '|hbw/ F}(+ZW!VWzwQ#%:03qQ*.!WDfP(r8n-viw1s}!>#Jt6A_[y7,8lvS`T7HZ');
define('AUTH_SALT',        '+15s:)iU1m5r|R[#g.57EQA7xT)Kz<;>onA`#i%@$G{YQ/1xoiCG0J1!b]}BJ~SW');
define('SECURE_AUTH_SALT', 'b0BV}U}~wyS,SA%ejrj.D1duC2(tFw/AeUqgtd$&)rS<mnFPk#LmNJ)t4Ut>4d[5');
define('LOGGED_IN_SALT',   '-n$ncYLE?Pp+!ulcPpsOR[g>!?l|a{Y=31+C>Qm5_Jj&MVX6Fr(g<;K@RjF+H;7#');
define('NONCE_SALT',       ':-_N4h1qVD3W8ra)^r&kiw<pV;z.Ph=s74X*Lj_!7=5^f:>*0-t/m%3>of&==p2W');

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
