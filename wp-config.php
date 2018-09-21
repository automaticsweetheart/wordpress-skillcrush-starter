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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         's$gpdzLh]?;:2ePWc3^+Wz6AH+M3}`h<[#oq0i{ ec{4+/h3b|VJ~J!sn9z;`VP!');
 define('SECURE_AUTH_KEY',  'MyYo|r<5R#LrPO@wMYHTDD.H0/95+o$k.w.?y;s1K)3RP!qVyD|3H|vylx3&(6:t');
 define('LOGGED_IN_KEY',    '{: 5F8Tt,W{K|^Q 3nG9BE+l_K8B|-MW85dt[M.Fp-p<H{`?zbDJoK0 8I|Qmr%|');
 define('NONCE_KEY',        '@BWnA::caJq$j26SOQ96>M+}@GeBP+9+OI+Pj /dHSe*M=Q?)wXNC-14+@CJ<H$H');
 define('AUTH_SALT',        'cIKFO9;)+ QFmvVp?T(wOC0hl&lXXEja9PmXBNxasZ&rO4tOy%wNDVW9$?d(1Q#>');
 define('SECURE_AUTH_SALT', 'g!C&`uV_) c|e6jQ,A`d|-4q+OLA12I*$740,qDPZedRPu$RVd|MLD.w9;U&UEGr');
 define('LOGGED_IN_SALT',   'ju[:cI+41UOPqv1|NsP{tO*hWN4:_ISs |^B|nrf3BCmE0r&n.2ULa3a#jUy$/M;');
 define('NONCE_SALT',       'iB*k(hJOSw]Prb?]D>)z/drim7zfk*>00C7!!5B|T!{_MUOnXYN.{1%_7-M3.8xV');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
