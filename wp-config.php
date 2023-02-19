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
define('DB_NAME', "u559870473_W84tq");

/** Database username */
define('DB_USER', "u559870473_yK6PM");

/** Database password */
define('DB_PASSWORD', "Akg@admin7");

/** Database hostname */
define('DB_HOST', "localhost");

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'N!!uB#)5AD4edWV;O6)dYZ6-(,yZw%?[OI%Qt9yIzx-Xs^##4=$5M`_fcr*>=&l1');
define('SECURE_AUTH_KEY',  'tEPHYYlUPW>{;z;1|U$I(p3<9U=2*MUh~o8*<dWTl37=u#4-xQ%~xG,i$@Q,{{Z&');
define('LOGGED_IN_KEY',    'GNh^3SV]dS{N~8@+[3+9ES^nZc@N5p3F@jtqV3t[B=JhJlkeerUHB^Ax1&T_|twX');
define('NONCE_KEY',        'H.IqTC~A-VsBF3cj_EJGPRWaVF0<Cr<7$^U>|,.>Zva{IH5L+t;x=PW4*fcnx+E?');
define('AUTH_SALT',        'G%Q(4E}|`M(~EifMe3w ZU{KCx3vD1SFnbMxt<KO]~A0zV+q)D} ~><,HWfRI-Ru');
define('SECURE_AUTH_SALT', 'F|I?fE?m.3D+]7J$tf6mMj(bXXK@,O59wD]G3xkWQqrpO:ruNQ)66[a*gy6j I2Q');
define('LOGGED_IN_SALT',   'Fuc>UE[Tu@[wnShP<=|[>$LgY!oiJjA_~v=W)8yzpLA%ex28Dvr_-;,a}>>)X&Rg');
define('NONCE_SALT',       'l;&% b?Dn5,*xWW?z|yn^Qhlev:SOsO&`(OYelif=e!X^ u~V+l1wdEF28<IDU~E');

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



define( 'WP_SITEURL', 'https://testapp.host/akg/' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
