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
define('DB_NAME', 'testsite');

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
define('AUTH_KEY',         'izH>r8C<UH8<)nzncIx/^|kb_%AU=C`1RR`m*!=usC+znSDqr&Si)fWR?<aX n%!');
define('SECURE_AUTH_KEY',  'tnVP!<cUFUg`[?$G#/})!|kPtc:B5d|![AWQs _(f2=Y.v! j9ZSb-)+PNkLRU3Q');
define('LOGGED_IN_KEY',    '14?liG_b)x(7koAd>!0F@|PI 3,&L)E[UiVG*:3=};F@I5jg[#<7pOeU3&VL+H^8');
define('NONCE_KEY',        '+D&3Q}Nd3~WvyU^Y:Pyp{;n)q4is:l@v;J>%_<xXF4?e>R2jKw1FH#cK,nXy+y#F');
define('AUTH_SALT',        '^Ubz5z@dHCZ306|xZtb|]K#+<k:?R?2ooKFHVy`ey>m_#{Uu h]A#o/Eut+8^p0h');
define('SECURE_AUTH_SALT', 'VMikfHSjiE[u`F)?j9%g#1y#8NDchRxAjm*M<}wRM.G-ir7ACLF,.`vokM,A5D(]');
define('LOGGED_IN_SALT',   '%r7EUSo_83sM8P6W!uFDE0*Nn0RODy!P?bY$01wtan#byv,%r?_b6{qM:DJ =Uu!');
define('NONCE_SALT',       '-Pi;wf;wja_,>VOpm?*(}#[2M2DxH@&C=6dI _p/-!T%M M80h.*RgEq^uzH{95g');

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
