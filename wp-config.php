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
define( 'DB_NAME', 'imnoorfahad' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Cc;y%Me>`o{:a?k5|nC<NXL!)-|D,6Lx_hA&Fk,TZU&w1l6%7/{7-ikCOra92,,z' );
define( 'SECURE_AUTH_KEY',  'Qnd<t}Ib%/ia7xN,@>X{i=pZWORy}1=~X~dV|]=-1d3UONyO`#u6Qh%H:b]9-0NB' );
define( 'LOGGED_IN_KEY',    '|~@GJ0JME%^E|cP#NCDk)g(H3+O-X6b&/ v!cHMVo(s@a^t]2H!|Z`j,9Q_wF#AZ' );
define( 'NONCE_KEY',        '=Z0dOwD;W@<C6y0iy:G?/c2Ph?}H1diEz9 -.6[4Bo@C_ss^JvtR~@(Sv25OQIj^' );
define( 'AUTH_SALT',        'dE@7o*P[wuyN@dZ)#o(Wq-y*!Zdu9B+ wzH`%y@UV>Gj$<Rb7m1%j&,G(I3x2.qN' );
define( 'SECURE_AUTH_SALT', '6Im#9m=O4bR pdVEdwhXu<FsEC&{:;r_>8a^Dy|v.&(@-3Q{2x0unEbr!dQENTBq' );
define( 'LOGGED_IN_SALT',   'K|@xr7+Lafe@6G$See#-xO=+4#91o~ZO`R_ okUD`G/4/?}hC63|U%%C:@xb Acf' );
define( 'NONCE_SALT',       '&Z#+HA5rg/:%+P!MJMKXo69wv`VA[Ez>]J`_e Ps4zB(A>0C`;&5)~%B`Jf>n,l9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nf_';

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
