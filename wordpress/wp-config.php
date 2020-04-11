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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ostoja11.8.1995.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
define('FS_METHOD', 'direct');
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
define('AUTH_KEY',         'eQD7b/6zH~V:QQ%P|)f|QNjp<k8-+G}G-wh=|O+`W 9l0zgXK0mF)A|A*Wb, n=*');
define('SECURE_AUTH_KEY',  ',a-wPm|7|XN+d|]u6.tWi]U?)Bq5?$Q&Py){wi,_FoJ|Eu_&S5_e1!cyE:3ZLYS+');
define('LOGGED_IN_KEY',    'm|=Oqc/AlogOk+A&7LfyB1J.C6Og$`X:Ob>0x{%&g4x2JaJG<K|75LK26ZjM@$D}');
define('NONCE_KEY',        '}tgN-6soasL=GR*M0?7VJ?vztqL7 dCD.!O62rzjq!]cb#4LWC$H2/QjN<0^|,3,');
define('AUTH_SALT',        '{0lb}S0.143U.{HhD,QR#!s=Ine)lKD(c,y~:5|r*^|j%L:pI1Y`7u<f/zI|SKz:');
define('SECURE_AUTH_SALT', 'FjO=q6UmgmKb%a+bY8bo~J|UKU|Pi+}Hh8h+_y;P^U;|^Vh)ng=A.OX,c+%a&&H ');
define('LOGGED_IN_SALT',   'ly|zGAkQ{( vJa&#c+aX?Sj0irnYFG&_dSpUn3u6xI7mIpQ|jyf5ymeeIpJvVFZ_');
define('NONCE_SALT',       'zo.d+8c<cmgAb|nGL+dY]~;.wd,eT+;/m@KWgJ{2aRDB1PxEP9LKa;Ofx+9iOj>[');


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
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
