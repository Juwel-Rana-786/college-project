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

define( 'DB_NAME', 'college-project' );


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

define( 'AUTH_KEY',         'WG/~vpHLTz}iKhXhUPg`u4,&Q817S?RNSLhW:wb=Q-oG.V.nVYy ~`~z<v^5!~B%' );

define( 'SECURE_AUTH_KEY',  '6o;D0Tz}Elx.}4jBCPeGP,iH;i,)vaf0X9kZ+]*!l@?U`uKL{!D_},24^3@}lazq' );

define( 'LOGGED_IN_KEY',    '6J<-g.[p^3vH:!VHI;}[SnCOs.pU=l9Ig{`1b-v[mY0x%kizoN7}J-Lwth:*Bm`O' );

define( 'NONCE_KEY',        '%`a1e-5 gSB%91!0=yI=ARBIC|!N|r$M*F#5`nM!)d`jI=<+;qCO/xvPLr9)Hy|w' );

define( 'AUTH_SALT',        'Hop}.qUI+7S2=t@BhR66cE0T*=A,30v4$Uv}QQ)n]=z~!)Q]mdAv!G.kCFe]C9NZ' );

define( 'SECURE_AUTH_SALT', 'tfO#A!02p{V}+.E+=eKLK_X{CG&#K@-`6k_K.jd@:pKfW=>n/G,!`LPj|g8JTe5:' );

define( 'LOGGED_IN_SALT',   'vRn[zGV=g%O.)v<iU$#?r%&/qjbQ@z.LAGgg99NUN(:nfn/tFPpQ!DOgt6]c3+g3' );

define( 'NONCE_SALT',       '.I@Vh.bf-!k)M66tWze2vkiP]W8B7/j%Ep.1q7@g!# w^d&b0Th<H0^1+8Wm#)ei' );


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

/* Add any custom values between this line and the "stop editing" line. */




define( 'WP_DEBUG_LOG', true );

define( 'SCRIPT_DEBUG', true );

define( 'SAVEQUERIES', true );

define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

ini_set('display_errors','Off'); 

