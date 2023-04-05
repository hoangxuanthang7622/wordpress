<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'new-website-2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cu2?L=UAzYyJNyAJsBRXxY`4$tbr[9|?o@d|^##4,,N^|l0hKgftBsy-[#}jD[Kw' );
define( 'SECURE_AUTH_KEY',  'mlk),Id0KMpbmO^nVg!lp; wt?itw+%YrH<IvyZHU_IhfhN{|)h*ljo3%hk>^V=q' );
define( 'LOGGED_IN_KEY',    'E2@.`Ly6zw3f!N;`JoU/fQdx-=:  Tqs1V);w|o*}_F.vj~+d&XxnqxkBl@y:$PY' );
define( 'NONCE_KEY',        'iq(n-}YAK3Wl4rH#:2LCn0x~iZtgcUyB2:2S6g9$[_iFhSLB:iNb:.%f3B)s?~?7' );
define( 'AUTH_SALT',        ';BG<p+a<bz@pk.+jyN&RwFFu{gQe3l$%Ul(KK[Y2+VP2aS4#SoNV97n#d*g<s/TD' );
define( 'SECURE_AUTH_SALT', '.*B/Z+vwR%DmULp6)k>6IdIObaRjLr`pV1>,cbYpS% <j0+5^F#5?pj&@YVl.^N1' );
define( 'LOGGED_IN_SALT',   'nrL-*eCT^)P4:&QlWjvj|}%=H@8gglttvv=[_(:)%zL$;&$Q_WO1H-gs}G4B`T)%' );
define( 'NONCE_SALT',       '!~u^]]3lJc`-b2o3rz20jV!NIs(kD-Basr!p %=[j&Bgzut<fJc?ob#-S}Nmohz]' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
