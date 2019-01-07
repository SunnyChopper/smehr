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
define('AUTH_KEY',         '!Jomj6qGNf$VFmqjhO^{/=;ht>rexE mt4h5mX~_L=nR<(xEXQuwJ(F?)rCRCJ:[');
define('SECURE_AUTH_KEY',  '2 Syzy8~[c||&{9Hv)`#0pM!dY&MGtg(2oL!M$$^btT*M*i-i*k[=Xm2II4Tap{(');
define('LOGGED_IN_KEY',    'O< +f.A@F*bG=QTMpk.?H-APA5yM,7[#erw])<!TqZ#,~IC9,cj&&5kzm62-Q!0A');
define('NONCE_KEY',        'qR^3aC@h@Q_2Tzpa{U|_S&s{_pAe^U`]67Zjuz?,Wju81[t0ytgQ ZZ$zSQ]]hh~');
define('AUTH_SALT',        '#U&mK&.H z$a.0~_j{1ari[==bS&<cLW78hclK&U`Wmx?7{Z^>&0Ckr/3EtIP})w');
define('SECURE_AUTH_SALT', '`A`bpVQ0Yz3O,X.5Bh2WyH5#Q/|t*y/Kg[M+o@3wVwQdFog^VAZF~6/NN%VZ+4@O');
define('LOGGED_IN_SALT',   '5M~HW,@1se qadqlo,?3@80Rtz936iM:j]^^N0nqF@cp_>L^a1Ba1 x(&+w|e{W2');
define('NONCE_SALT',       'G@c0_NDf2a:p2CV&Sbzco!nD8>/+|r9wr!hf!rYSeM [jRA]Y>40la?=on%~)!OK');

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
