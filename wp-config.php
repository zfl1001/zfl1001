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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         'i,DCEce~/DYd)%#WD^rpnyU!nO/9VYLv0*!JP#dLol(-,6J4N&F_SX?80Zs^S1w=' );
define( 'SECURE_AUTH_KEY',  'KRYjYe[ 4nL&6R&pnivLn|`1I.poa;{;yfc8V,sPo&5I2w[h#(GK<p8~9|gIdf*r' );
define( 'LOGGED_IN_KEY',    'mEWDJHMk#A>h=s~5pe$,:;%FFzlKkx3cZm#U)6^I.bmD>qn{+FM5(;mhx~Ly?L)c' );
define( 'NONCE_KEY',        'KgAi>Z~gBLE0eGJ>(P7s6D4Fux7(Iw,Bf]NYj+7Vph2M~|(pC5y|}+]ByH-pXP@2' );
define( 'AUTH_SALT',        's(8BRo>h93f5Yu|EU(|[kV!j(AKb@-2G,un)%p1d=5-mxr%JSh`trqz,`[jIQ4>6' );
define( 'SECURE_AUTH_SALT', 'uGpre#;%{`IUVvRLZ[T$g0;1h}(+<`L*nd7L|QizTvak/A$q%lA($%1]YXFCuL}`' );
define( 'LOGGED_IN_SALT',   'Y>IUXBW&ARo@Hc}HsVRs? 58;?ZFJUT2br`J>~KW<:)Up/_g|eyd>1on*M_a}Ej1' );
define( 'NONCE_SALT',       'd{<Eu_Dldo&`D1/TPoT 8g})4EJM,U8l{k~-K9y}GL}*pNe=%.(h(<NG[*0kD$zm' );

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
