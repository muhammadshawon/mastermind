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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'muhammad_shawon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'B`FM(0>fx7NqJ:2V*it0!5,P-88XzB|e_xVvxu{d{C&(8tDh/)XS 4N,]a%z0e3*' );
define( 'SECURE_AUTH_KEY',  '*f@01-Z701_KAP9AQ2Hb,PF2V1k5wJiSW<OoRAI]a_nL$(9}#3,QH>4y_O%&|$rs' );
define( 'LOGGED_IN_KEY',    'K(8v~@tgSX>LhJY1@wRL?eYQ-X=59t!-cCyCBxh+#!_+ d~QP~KFbqMTnA!HF3lL' );
define( 'NONCE_KEY',        '!au>2wcpBy$9M;&Mea8<jD;]M7=p5[_Xb=nQEiqEqYgaep<S4nE!Y&>b_4>V0wA$' );
define( 'AUTH_SALT',        '8s*;B.ESq&OaOn`me/Dx[9M9W6M[f2@>S[gX&{|7O{m7Zk7B!Ee4?!/)!rV|O{B=' );
define( 'SECURE_AUTH_SALT', '4c M%NSa2${8(K!hSu{@amNN%UvWv.^O;:J+;j-tR&O/;]7Odl~h:4hD2%%KCqaZ' );
define( 'LOGGED_IN_SALT',   '2w[TwW4@497/4R9HS(0ih$hE>otnf0e}%Dt_ChP2,!q9-6oyvZr?+&MCOXsEw<eQ' );
define( 'NONCE_SALT',       '/~TOOeo G0e|E^[SqS?u3}-?c9R._Tk`&t@uRBHv(3Kov j@UZVi*2TsqJ(?5osL' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
