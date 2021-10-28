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

define( 'DB_NAME', "gitbaqara_db" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'I/Pe_wS`&;{V^|KZJ$mJw9+^KkW[Qy;YbNi^C2oamu+8gtKt9mo8 RJNA]* $s8*' );

define( 'SECURE_AUTH_KEY',  '0HshuQ-;k$ hVv0mKL6<zT5MP? v@er:R|~$%yWcfe2]O7P-`aN!-l_P(F,0[$/W' );

define( 'LOGGED_IN_KEY',    ',`Zr <_fhHId}1(@e%6pjY64v<0V]~Kr[Hi(X1B!sxL~#h~kr&x=aw)i^?W+uU]t' );

define( 'NONCE_KEY',        'cddWyNIzBUn=>CyNo?CmPZ3Nkh@P48>XS;Kua}1B{`e=d}86kD8~z-~ZR7hyTgb+' );

define( 'AUTH_SALT',        ':eSm,!RFArX_%rFo@1+ IA4>5,=/Ha5bI7|v$l}?%xQ?zmH.m}*<{bq><>YGWL2D' );

define( 'SECURE_AUTH_SALT', '4TmZH}nku],oViu&x-4KRpOm-h)6d^4qq-+6J?ZkvQXW!pz8@E4l3G;0]fA8X Y~' );

define( 'LOGGED_IN_SALT',   'HfJ@R{0DQBKD;=,)EMoLb[ebCM@HQuOxrKW,sE F_hyYp7x1sT$xXbnbXZdUEg#r' );

define( 'NONCE_SALT',       'u[&Y)`C]y0z^`G9&{v,)6zV_GA`Tldvt BwPWQ8v}i(XRA]+Q7o%df7p5$(8g2h|' );


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

