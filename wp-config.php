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
define( 'DB_NAME', 'sundance1' );

/** MySQL database username */
define( 'DB_USER', 'sundance1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '>U:p*9O@5YBk@!3<$iBkmBI _L5BhxKeLidY%+<w/4,vctkLJiLi~= A]hZsgf}|' );
define( 'SECURE_AUTH_KEY',  'Q+nwK+8Dru%K(JG5?vr!`ZEJJ9_f;;IqMzA1OC)(rLCHPDroV @Qk]E}73x.AGbf' );
define( 'LOGGED_IN_KEY',    '%,*}_ZLwF/TUAik:b5R!)3BbIBM)$J*S*cuX$_5XvU4ts)k):0#8_5>;IdYQ&-?H' );
define( 'NONCE_KEY',        'XQg9@k}$m6^CQs[-13d$tb&iK<orP~&~hl17n=4iFZ2:>A:LDYqisM+L$`hFasDM' );
define( 'AUTH_SALT',        'bn whnE*Ho^I9JnT&..}/_AMG`-XJ8<v)zv/_s/5^}CMy`>Pi ]@yRL;lCK%PJ1x' );
define( 'SECURE_AUTH_SALT', '+;:9G8f R02R-&7*ym~9+?@>!f;+gDi;=#6J.k2[ddy tI:o,s+wMy09{3Rv8P-%' );
define( 'LOGGED_IN_SALT',   'isS@~&-^.XAz6[zA.UEDV^ZhAa;[xe|l.|l59_,uj+*L#5VO}y=NvpI$T6C<?ed:' );
define( 'NONCE_SALT',       'd9i&bIStO&:@:aX;jXz(`[=UlD8di|LehuMmO_!&~~tsiuw|K0  rI^*9@i&+,l}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

