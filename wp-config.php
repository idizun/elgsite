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
define('DB_NAME', 'tbl_profile');

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
define('AUTH_KEY',         'wz{mwq qpmbOKTpm_T=J<9>Z2VT9{8O0@_LA@}hvs9gJ`8C:Dkag|:j31}|tl>32');
define('SECURE_AUTH_KEY',  'AZXO,a(HT&5C~avQAb@5#a7B7z`9MxA/3/v-3mpeLl61V@M~%jWM?eN=mw{k;=]R');
define('LOGGED_IN_KEY',    'vM?7uw*@7rEJ1V; sC2O2g8T1%M9h?*x=#X$m -(W&D& Wln#Onm7qwd30X *6MQ');
define('NONCE_KEY',        'Td/<=#O-&HonboO|dBzl.Gf)u|q01L5mM9-6zcRQ-/q]L,c)({1d^Nj$#bQRP!x.');
define('AUTH_SALT',        'J|#u*z&Vc4a{=Lgp0u}[J*x{Is(4WX^>ZzSL&(a9g!__YxQ@))Sw {qZ^zR&p;^|');
define('SECURE_AUTH_SALT', '~cu_q9u*scdK@PY|*SoirKj7rO=1@KkQIve@W]#kmR{ _8ioMZ~p3edPlPW1:8pn');
define('LOGGED_IN_SALT',   '.:[$@fVWla*%}[5:K@yk-#meR:$}(KY(WCAllz[$A,3#KJ >sCYuLCH*2!W`mYW~');
define('NONCE_SALT',       '|A/:VC>[SMhT9}~D0s>/LDcCR0AKHqXS9(7?<3z]$LP+9XwY9$2xHGzDUM]d>_e5');

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
