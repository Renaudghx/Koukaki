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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         'ai7d[yfTqPz<.iM;0{L#c0ybOGh(@PI v##l:q~D=7i&l3`ZBK:F$Y&x?{z4^)l5' );
define( 'SECURE_AUTH_KEY',  'R][PVEZ)S}R8O:0:V%&Q+0piJD1U+H1tl-dI m)u/>!EgcS<MH#?QNon=t-`(s@9' );
define( 'LOGGED_IN_KEY',    'KSCK22:]zZv0f^|q3|T7A8`r.mH@``@s%N$-O$0y6/}^;.{Z!hEp2pg=6jlOc4ga' );
define( 'NONCE_KEY',        ',=3uj2_5K7P%N5wY KS~ajKMEmoYxQ|q;DGlG;AS&~ZS{utq=F(Vve=D8kP=VH)o' );
define( 'AUTH_SALT',        'wB7kv%aLDLRm3mS~89(l+9AF(vt/9a;=~$eP[,)g6r_[i2d;9EjcG_W^uc#;SoX,' );
define( 'SECURE_AUTH_SALT', 'QLQ(QQmdXCaGK+9j|:/uMMef=[/)=tfH!4sLK{C8l>3E{x<y/~]ph__Wc|Tt-4n.' );
define( 'LOGGED_IN_SALT',   '#K8xVse<$I<FEE9HrV?tNF2s[>#VO r[o601mq3~^=fy2O%59#_+B(otfdz`%EZ8' );
define( 'NONCE_SALT',       '5SCdq,,qmR?A9cN.iMyI:8RBAsliU9_{=fVm*BE24VW&v84+MBn6OcFii/DDfsL_' );

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
