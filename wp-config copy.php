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
define('AUTH_KEY',         '-N](`&UvK,_oGqO(u;2TP}2??GW%sFVt,kU9Ez{5/J4bmzf0rT=w%!DL*f5,$J((');
define('SECURE_AUTH_KEY',  '&hH+~DJB7d ;m&z6-OU6}J Z{EN3w:.o>6!oe@}ih%cR@Fiu#l68b]8:FJwg&(}F');
define('LOGGED_IN_KEY',    'Jxs_3@wr9s_SM6/hBAJ`K0+t)PNY|sS{P{<DYow%a<Y&{%)KVI%teZ~i3L[oJVzS');
define('NONCE_KEY',        'HH.(OH{!f-)mOxQs$D%5PQ#S+!jc5?(<rV)ryt|,H{6~fYog8lg[Ut&8hw[VqWA/');
define('AUTH_SALT',        'rJBfD6gV=F.<IAZqOFHE*Kj:oD`Y;A#%9F&j_x?g4=$<aM{Pp|I7ypj_&[)/@C/y');
define('SECURE_AUTH_SALT', '5DFUvkf&&Q%(1`g{ SB;eZ2t(4+I|Z wJM,U1d1=.*/EONj:OUGOs($so}SZK/mP');
define('LOGGED_IN_SALT',   'Tu|iZUd^Cw|9$l-.?{vpYA*W[cpi;9VZ`GrjmyVE)69!wEdT$<x%sbG*_h6C&bz7');
define('NONCE_SALT',       '#{sGQb&RKXFNGPD{4.B^Y8z/W7B0C[2CQ;vPmct*gkhfRm(!y8X-kfB@=Vk_FMRW');

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
