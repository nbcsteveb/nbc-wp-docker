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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASS'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'zV(6o>j=)}eX`H:c]+7r&1@5$x>%3nA3[Av}hr7/~EKE:l,J40,~i&|xw!#NRM?v');
define('SECURE_AUTH_KEY',  'A {S^v0;PW@6$wx@g^KZHw:l/]?D%/nsE#*m[+o(h$aRz*k-27F~yx5m}H}Q)$|P');
define('LOGGED_IN_KEY',    ']nbm:y]2edP49/l  dv>)- iCXJE[.f7+qV4S[Z9piSz_>rQj9#?q4L}b(hc(QvB');
define('NONCE_KEY',        'jn1@]@]6g7aXRRWnYzE-|j$z=s%Wd$cv!GmlIiq`2jOn~~||oS45R>7Y[:{i<$!6');
define('AUTH_SALT',        '`w!n||B!~U{JP Ku)T&{G5E[;`@u_R1Mp:`+@PSt7|-Vl?dVnncsqbz~n@[FnYWV');
define('SECURE_AUTH_SALT', '6GpA=)H6b<{[^jin:<a2P*78[zX>@!+`E<HrpNJy43%k2oh-uwczNL/;9O_(VZGy');
define('LOGGED_IN_SALT',   '2yk Qm@)#{4:XDM/KhsJk/+u^:z?ca7o}gS9WPj8>5<}A=]ZB}qx?2^1o`g:bJ&V');
define('NONCE_SALT',       '`$:A8kS#J~fTwWiv*bQk!{ONW;na,X`Kc^_N#:_-~l9ujrShpUqa/zM-.StC@Cw6');

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

if ( file_exists( __DIR__ . '/wp-content/vip-config/vip-config.php' ) ) {
    require_once( __DIR__ . '/wp-content/vip-config/vip-config.php' );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');