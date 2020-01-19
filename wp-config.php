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
define( 'DB_NAME', 'wordpress5' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'mnz}GxM=#*`NG:{4_/VS@Kps[N lK(r^o[d Q]ke;k@FWFUGYI.T=-$-:uQE:Ahb');
define('SECURE_AUTH_KEY',  '.|{j|)r<]b|W&t,c|2oGk10`b)Ny(@ y-9>+_C7$c,bC634-^(!,9ZPd+ B-YHz|');
define('LOGGED_IN_KEY',    '2!,+xH[v&Z`.0H@iiZhA>@iC@^A!CW^0`;fx&%Xe1QNK9YDE2xf`C!^h-U_d=X*.');
define('NONCE_KEY',        '+>&TWv4)R_T1NiY-0,azH&k7-;xrMMpJ)2O<:y9A$W(Y.aAG5_gtH-t_yDjz}.14');
define('AUTH_SALT',        '{.Ngi%O@Vw_f*b*S8GeX/F4dAu2)V7rT-);P<uKM(Vd_A=J-c.CA5;g96c!IvJu5');
define('SECURE_AUTH_SALT', '2+PV_6tz-mQwLjjs~-iZ,$#|Dhti0*WLjW>{!N}6<~=v-Vws=u@Ih3.K[b`h)#3~');
define('LOGGED_IN_SALT',   'azVda-|=b9g?qI:*VN1r_=OLzl^VuXX,/}OSDb4;^Am-X8 !e$2-J*3<5;Hi5##Z');
define('NONCE_SALT',       'fD>$~i8;hWXe m+H<Je-Zgn(_sURZRZTApDAD@s=oa+x_}v-:$,@.j-55q-tv1HN');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
