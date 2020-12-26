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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reload' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aAbZ4Rx4%-T/[$Z<Kns.7+*MID&@wP^iGU-GEA0x}a#+sa4Dv4wm5XP3BJ!Xgqd/' );
define( 'SECURE_AUTH_KEY',  '!`BnYJIU&.nQi|!q@SgIYImBES{vZ<R:kn&Z5:uHzT^uU]kENB%XmAYcKo!q/Kk ' );
define( 'LOGGED_IN_KEY',    'LrI(gQ^2H6L 2@`,U__d@+<o;wxF::N?Bs1W|KCvQEwE{Ol,H3MbvP*4uW:dbRiY' );
define( 'NONCE_KEY',        'y*YnX?@-OCdy*Z8T>q[~Ly*oS^Z&I=e`M(qbulOQPNt{p]M(g]j|.#J|xXg}wV~V' );
define( 'AUTH_SALT',        'PyBWJ=9BzIY%wmcMG@xQ#lPkT84]U^GS N-*~,[8L7U+6L!sHkb$;>*th+$H<]YE' );
define( 'SECURE_AUTH_SALT', 'q/0&zQ<1[)MSY|Wgg$ICIQDb<%UbgA~PjpIQ1+RyeRU/T8]axQFgO5M.kZepH#a?' );
define( 'LOGGED_IN_SALT',   '0flYqpv+&C#Y^~Ee4}J$~)_e3.<d.1 (i:h;6z!q`|rtT4+Y}4HCD)<FEsjG>Z8a' );
define( 'NONCE_SALT',       'lV[}n`J?-9alscQr,:JsoCZE4BbnA4BjW:!8H=K|2^i12}+sRqr9V*{`U(k!UK55' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rym_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
