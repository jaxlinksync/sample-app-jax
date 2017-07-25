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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         'Ld(83/`Rif.E;$R@T`KQ-?|e>CkwaxNT-G@n(SkNAB</(|(:ok/EtkF=7*y&O)kI');
define('SECURE_AUTH_KEY',  '(%BmQw$a--SZ*NQDjvi~S0r&h_HN~m7cyGsF7VeC&.h~l`iO.]qqmHJ(<jGH1UD1');
define('LOGGED_IN_KEY',    '+h D}j1fA0V-z*s]]vGyf0bDg6Vq~MdWQ1[Mfan?f>6R;{5Kn]8_7Jw3O#F{@trk');
define('NONCE_KEY',        'kUV10`>KoHuC7:y4YS3mTb-ueGYC7/s(7/*M{LhnlT0mf@$XB 4dPfU@g)NxIsdJ');
define('AUTH_SALT',        'oWq0~j-(6hu4[E}M46zr7PFR(<%gCFazl}KkggZ) 7w>Qh8pSDJ&hzdt&~! Z(;c');
define('SECURE_AUTH_SALT', 'w4ThSVtnrK@@ZM$-^T%y-EoZJh#2f|m8*<CwC@#M2&b/S%%H):^.C]2ba=j,3OWH');
define('LOGGED_IN_SALT',   '2D/JT.rE@pqli:mYe9Yf@K0qZ1yK;IX.;{SjI6SQ!Zr3X+VwIF_-E=)+hE)5r3V<');
define('NONCE_SALT',       '/m;ox<pMW%ZztxJC%ZzI4>Xoo6DRL<uH;MFCtr4Dg-c/2m%P>Dy3i!W0)K$)GxQU');

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
