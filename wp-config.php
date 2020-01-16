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
define( 'DB_NAME', 'lccmanila_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$<lp|Cn!Ku2b-ste-97T(fPN]s8T9#*.$<w%CZS3]L{a|Jy9s(_G%O. MM6yCY.k' );
define( 'SECURE_AUTH_KEY',  'LQ{a%T[xa_V@7d{nx?5(OT8}lHG),R#ngCh;#p8YMvM(H1(7n4UXdkK6w.YxAI7{' );
define( 'LOGGED_IN_KEY',    '6ox.uW1ak0*gb9{Y<fi0`&O@{-U$y(6~~.-HJRsUHTOX|itcn@v|+(ei*3DpSQ%J' );
define( 'NONCE_KEY',        'Rp&bvT&gNfQI~+RlJ4poO>Cd`=?k.TXr,^^op$9/]R_SlYVGi/R9|`coZT-xSY8_' );
define( 'AUTH_SALT',        'aD5i= NYvO--%y(zbt- > LI1 bJMuBs2*x-PM&5J>m+*ri^@Gur.b,};>I`|?43' );
define( 'SECURE_AUTH_SALT', '_up4/f@sS3;!5s%H7(3z|FHMIR&)jjrhYv&oX/RJe3Z{U?w4xrJ=[<=?rV792M h' );
define( 'LOGGED_IN_SALT',   'Euttxae~%Yt5OfX/gUZbuJ1Xbvp,xc.OB>625TB9/a.gGHbh<xdzm1E9#sHsUZ.K' );
define( 'NONCE_SALT',       '@:Ud6P`oG?.Ao(E`78~{2vjUV$jdC$_]~$$@,&zh!1cf5/`T-Q6pc:r~LYHn6xZ[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
