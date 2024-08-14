<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aryanwp' );

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
define( 'AUTH_KEY',         '#^xFaQ/pS|1DeM$,:8M#[6 mP~U`_q:>cFx?{bz+xK0Y5lW0T3X/BLWR@?:J|Cc`' );
define( 'SECURE_AUTH_KEY',  '@g6b2RhFCJ{ZcbeT}5opH&Z/L8<n>.~4gA ICv?}M 9oidth7{i/dRx^vS(e|OnU' );
define( 'LOGGED_IN_KEY',    '&#FCS*cLg([`bH^)Bp0:,p+ZYp]{m&<W~W~~ 4Em6I>6?0.q5e,}rzCKlv$E1IP_' );
define( 'NONCE_KEY',        'z:D*O<lIRYV!i1XrYY_fYfH`0GO-N:q7%-_YFI)(TK)S>b,!%1t|#23na)=IyUYI' );
define( 'AUTH_SALT',        'sU=,lHxH3WfiNMX!rWzV^b6Z/)&2%R*K0Tl[8IQADbFK6J@*)46&CKgS{:,TcX?s' );
define( 'SECURE_AUTH_SALT', 'vMt0%3vW[o)x&S0T<d~C&0Nb=R0ZUk,6&Ou,=*1+`Qc*K [w3oY xTcTNn/]$mUM' );
define( 'LOGGED_IN_SALT',   '/ws_e2k#PIbxA~OpS4?+%,@A6?.Q(RG/yS<KT.v=E>mg:W_|dVT,)qM8c<c^}G.f' );
define( 'NONCE_SALT',       'y~fE*cz]B}6O]tWY:=%G<IZWWsK!nJ#-|.Q+*XiUi31c+!LTHGx0}pwP~-yIHl<X' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
