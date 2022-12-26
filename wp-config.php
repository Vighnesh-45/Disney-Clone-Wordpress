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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '~A]O2]lFJ^`S[Wk>g4z^OvQb!KVxP#0bmT*pdTSD<52P%=g8e:Xp2{*l(**!vfw^' );
define( 'SECURE_AUTH_KEY',  '0U+[r-L)]Q,~|8^xfz6gwNjAc9s07$_G/QnMz-.^Kmd}/2;vU{LMi$*W}N4M?j?O' );
define( 'LOGGED_IN_KEY',    'Y9gO@$.+MC).guh:+Wh77f$OE12Ifyxnv=^]V{Sh/Nr-_k3wbvUiLF72UXiARopQ' );
define( 'NONCE_KEY',        'eO%W!<Tol(5P7<hr<fPd~P*2YKmc+#k]x];#>22$@O`1|gLg1HINm7aN@ea@FCNG' );
define( 'AUTH_SALT',        'yL$SV;Mz?FijCCp]WA/nUY2xYe2e36lf8a%mG%XKcQ9mDz5v4r.8ZK$JPu?g~ev=' );
define( 'SECURE_AUTH_SALT', 'tozMpm lMeRNBH+i9}b4k?_vB-}Q/-w)1?oa#C+?CtNw).jv5 LuSIO0:>>).&P8' );
define( 'LOGGED_IN_SALT',   'euyNdQYr :Bff,?LEq}#%TlZ~+DSqJMn3]@IhW31gY3<Uvrt7HR(`G<[D@.hV.+W' );
define( 'NONCE_SALT',       'S.|RR@q<+,>R!0bVO .or`BZ76Zz@KYxk=&k%p1F4q-z,Uetu[t07D4:R{vcX-o4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
