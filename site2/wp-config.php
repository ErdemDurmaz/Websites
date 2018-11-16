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
define('DB_NAME', 'testsite2');

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
define('AUTH_KEY',         'BL!%tf-&%.|RMdUCXsp3r]:uK/D7}dp);)D5EIx}h2~j(yMc|XDrCM/:Oc|0]n;1');
define('SECURE_AUTH_KEY',  '~Z0(oUAPN^!d&`N;lDaI%`N`)t,%-%Gp];J$-oM8j_|VdQN..#._{79{kTOqN*Q ');
define('LOGGED_IN_KEY',    '*<,A~STi&Y8Q?JZan&A?4ZOEXj628?=C QjYjgx>45=]{7;-ZMs. C-).u;s}7 E');
define('NONCE_KEY',        'j:4Y:m|q^OG*2(_6,xr}g^?)v(>/m{2r%Ad?.56&VF#hu9fA7rM*&_e*6KrYGl[>');
define('AUTH_SALT',        'j)9Df{KMnfCCvWWF0*wMZe.^JtVR?K.E}0?0Y$VvQ}e{q4J#+kRcV@jryGdYU%}1');
define('SECURE_AUTH_SALT', 'a8)ObszsS,:XBa.aQ.pu&#mgDq@c8G0` ,QXUNAoJG$*o@)=>w{|FDc=NigEi<L(');
define('LOGGED_IN_SALT',   'Y^bMk%p*!z<]yC&?6{XcZf+z=W!Ghj~!TwkXMQoa(`k@$w>lU?T0LKeh${o2}l7d');
define('NONCE_SALT',       'LAh|H/V5aOiGVqg!Ub9 I}pm58wmn%ndZ`v+A^: F?O.;!A=XS`,Q@X>9sj@x*(f');

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
