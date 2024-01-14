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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' %$&[nq[$+V0GX11*`sPW<U5?VdUj.BVoVB~hD0fvU4wCD`T|Q>%)ei(i+#Y!*%R' );
define( 'SECURE_AUTH_KEY',   'qjtk+hD@*Xd~)o?_g rlG/mj!k&>=dQclIDzml{U.ZUOr=j_nr:42LU zEK6bng]' );
define( 'LOGGED_IN_KEY',     '4Dvqi@YZ8X5YuwIzhT|dzK!o:h6RupN-79?jtFX0ff|9si!%LIFtRddh19e&kyo]' );
define( 'NONCE_KEY',         'K%35QqAz]JD]:1r?P0EeK^#Kvx-@ID =C(E@[>Rq2^84H#N?ggVtOwfqbwShmUX0' );
define( 'AUTH_SALT',         'p|wH_kLC?BGye&[vxT{Kz5^}SN^@0+?PXt$Qe((]l&z}l?}4h^}nwwk)Pv3`ET5e' );
define( 'SECURE_AUTH_SALT',  'aLQP{]8F?84llvfZ.V<7%e~ =N0<Ycf-5FaKoqo)<5sa=9@1HLZ;O]^_(`v?GG?A' );
define( 'LOGGED_IN_SALT',    'vyOF46~p#Gc$6|0N;OY>5d=j^u4qwEV}AHH~(hIzXbYdG;Ll1|CNC*RA]+ER9{FT' );
define( 'NONCE_SALT',        '5]!LOY-*iVL(Y Qr}693B3kLWFK/{br0ILV`uO0w,a`zq/B31LX~M<f5UCnW17PT' );
define( 'WP_CACHE_KEY_SALT', 'W|0j}px!6|]fux![MBl>c+h`7Ra OgUfA*k^UaNZ,1>|]Sir:#[lD<0CQHaEp(*4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
