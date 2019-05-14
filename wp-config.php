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
define('DB_NAME', 'main');

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
define('AUTH_KEY',         '! CVscOC5y7jqUm#h%:L-vzz$fMh;n-sE|r~nSy54.-g9Uz+^x/;VJ@KUJGik+3@');
define('SECURE_AUTH_KEY',  'PCBTS6JQKJ,|8xVDr1+}LDONd|Nh#_[kgq{!xgZ(bEFO>#pN[ScV#+q${D@M3.I ');
define('LOGGED_IN_KEY',    '/Tz/v9,q;/v@#.~{HTZ3;BB(<;8{)rw/t)Il~v3xm5,ORN^aTC1kvE.e}kLj1[qp');
define('NONCE_KEY',        'Y]wDszSV6DMS5Y)>A*,xS?T`$5g#kO#8d{iQSu&r}z_(;PFZ5-ee%:!J`w>fv_}2');
define('AUTH_SALT',        'P,*wOw3](z7uT^=a(X(F1ki[$F pC_y7*(L*V6sL|F}Wze3-f3]M?72Xg*RNW.Ha');
define('SECURE_AUTH_SALT', ';w&+Ck0|^f;%(oToE$#n%eoi`Uu/C%od)(*!}<!mCRkq]KRlSI9V0lSCLoNIA6#S');
define('LOGGED_IN_SALT',   'Nf8wl[KCxxDXUnm@-%H]PSCwqK4.;/N*3$:*wwJ3bAM{=,#LunF]bQY|bY4kxh,0');
define('NONCE_SALT',       'HnV+F+(DzEB#Q]@0m|xSh(CCA*m:8e,Bgm:_PpBu8%W?b9b[@j&dm7n AYocul|j');

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
