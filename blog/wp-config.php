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
define('DB_NAME', 'gamecraft');

/** MySQL database username */
define('DB_USER', 'gamecraft');

/** MySQL database password */
define('DB_PASSWORD', 'G39RWCwxpvXPivSwOVRrxpnE');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'eO~3dTYwjFR+C:k;Bsi)p|A7aoin]{Yjdp<O^|$jI-8G%;^c^?`].G}Whw.ES^8V');
define('SECURE_AUTH_KEY',  ';L;EM2|^_dH2s,e2Gyj]z1F&-]wq&SSinkM_lps7<1e~F&V:m)0IU*MIp_r%p zY');
define('LOGGED_IN_KEY',    'j_$t|vm^V&W6Vr~Pmk`}$X<$H^_Q>|HI3qJC*}e*i< b(o^)%25q>W_TO5hZS%;q');
define('NONCE_KEY',        ' 0l SkbWj@;/*<qvFdalT32hu;CU|cb]{-5bwX>UZEp+}0?C):tUc`D/vgQo,oC?');
define('AUTH_SALT',        'OV_P=leXXLJ`Z8eE, ()7XC#=z 7pAXTG./J67BKbXlE`lBUEZd@Ma@W3fMH# pS');
define('SECURE_AUTH_SALT', 'v-(+7pw#|5Tkdl)_|Z6TFBzBdK_G@BJmVmW#&c0A3]$tEiUXC*IIfRHK4{1QOl4+');
define('LOGGED_IN_SALT',   '<&JD/LLisLv_OJEv&<IoVV2q?]EP8y.A89Jg;6B7wYSm yXPGV?53S+kIo}Phpg#');
define('NONCE_SALT',       'g#(%vfIC}<0P$,jSl,wU=%Kmz$NygE#gYU$t>zT{E5~/;fJ ~Q$<j#2Xzu=_*^Ya');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog';

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
