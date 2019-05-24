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
define( 'DB_NAME', 'ClientPortfolio' );

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
define( 'AUTH_KEY',         ']+_K_z`H2,Z>aezq!wL/W <hLIEtUoUqn41~aR9Ye3FjNmow,FG!~P2#|K.HHpNV' );
define( 'SECURE_AUTH_KEY',  'gt4]OgdGqe|3fuj}PC7`~L0_,TVtLE|CsiIN(e}nyJm&>O(f?AJIhrLR#8[sh%t+' );
define( 'LOGGED_IN_KEY',    '~;}#t,?Q*JCX<[G#~<Nf7Wpu(#)qi(6G?T6l$nhrw4m{ILmv3Lc5>E+8b]IzPpV ' );
define( 'NONCE_KEY',        'c:t!;%i2<_+t t:WMQ+T?eF/*>kc[,>o|sq6|Ym)KtuZ6*@FG`HX}Pl@MQ1=jS-!' );
define( 'AUTH_SALT',        'fsN>$u-m[|`v,jQpcW_Ya88#f@_6p$5]/ol1uaZ$H@U~nnavWd!DI2JUQSK/dQ(o' );
define( 'SECURE_AUTH_SALT', '?EBCX}.)4?KH(Dwj+RUY}<m[<g9(L}WFrYOd|.:SI;m$_%ud5Rh7JBpk/YmHBGm;' );
define( 'LOGGED_IN_SALT',   'p h lSc&N]hzj.wbn#)hxGc.:nCE1kfu7]X4,O;D2A[xJ` 6jEr]$|pu(<_mI9;B' );
define( 'NONCE_SALT',       'jxI(+GjJ<cUPyhT.l,TZ`;^YEUKX@&D~V{y>O.BE4tE2n},i}|Wm=8e!^<iZ}wGF' );

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
