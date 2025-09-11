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
define( 'DB_NAME', 'horusdoctors_site' );

/** Database username */
define( 'DB_USER', 'horusdoctors_admin_site' );

/** Database password */
define( 'DB_PASSWORD', '*t~Qy!=)B(&,' );

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
define( 'AUTH_KEY',         'l8.`,uF2ThWD}UUS6D)lRg6wFk+SWed,T/7UA5FIx~H_|f9<, ng-^!~(aG duI`' );
define( 'SECURE_AUTH_KEY',  'AE#GSP=fF>wtLS :s{fno:rK[l@}VN9jC;W-kg[_a{C1SnzVeXEujo.pj%o4j0Ni' );
define( 'LOGGED_IN_KEY',    'nR%u+/|,D !e#!R-gu;UlIPG[ _!%,=Aw:TX{6elAl$7+/G8Pd!>)r(II>ALOj_h' );
define( 'NONCE_KEY',        'PtUKxGXf,_dH8IRU)~Oj?0kJ4$CW~0WLVG/55iZ*VaA.O&m|c(dynPl@DT>@EIz}' );
define( 'AUTH_SALT',        'XI8LImk&pINvUf9H):CY?*(U!8YA/JKcMSa=SsH*C>T8{E1^tTWj5_|27+aUB8U`' );
define( 'SECURE_AUTH_SALT', 'kIy1+r8ab?rKT2Gd~Ae_}V~kxReB(qvyuiQ:I_.=c3]j=V$j3VX:dJu)oI?Z!ToU' );
define( 'LOGGED_IN_SALT',   '&wh=).zygF:_e0Y1YVxr3+_mQ:Lrw@:Zx:Hs/6]lL|18k$Ie_uN|Krj!vXg5{aay' );
define( 'NONCE_SALT',       'W EGW,h~Y6kR$apq*S4l5^ //V~8,U8$,Ip+96QX;;xdmK76NC-uFa3t3i|4Zq&d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jrvboiqurbviojsb';

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
