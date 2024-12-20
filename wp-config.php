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
define( 'DB_NAME', 'cms_db' );

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
define( 'AUTH_KEY',         'A;>DhJv8_28PMTfi}4[i%Qx+]a7Z(EK{&RsXkEL&B/@o9zT+mJQ(kI~@H%y{@,^Q' );
define( 'SECURE_AUTH_KEY',  'np%H#:&PKaf][@}FJ-4s.QorL!di6VLT,B:h1)%c~?GR09i _U-U#I:?Xf~#crG.' );
define( 'LOGGED_IN_KEY',    'GUX~tdh[I<w?I17K@lPypWzK>rZ&/eS8@gF?M=@$a@FOa^:&4Nm^_C7w9v7ztP@0' );
define( 'NONCE_KEY',        'JJ0D}*}A`HaWiww!Y63jZ{MFYYpk$SQehHGz3MCw5Q~,gtXzvufyz[kIM~0]ySa!' );
define( 'AUTH_SALT',        'XXOz]~4qday 4y?X|R7p,:+&o+D,0~b&Ho#1ejo}MegQD^I=^8[9*@q@5CX=r?NP' );
define( 'SECURE_AUTH_SALT', 'Kg=o_2IsDl<pB%)Vj)R2<|Gk_>M&=lo)F8!1/EPya=(qdd IYi7_g%KPD@5#/#>+' );
define( 'LOGGED_IN_SALT',   '.ux~f;5`tp#5.;q{5<e&>U8=uz.|@*+Nda/pAx),+lQCDW^wfK}]9vQCJY Z9-*|' );
define( 'NONCE_SALT',       '|iV^~79@t.Fv)On$Dem2a&dG1Ow#CcZw67Y|#O~SvGJ|N3$>G>5O7]wsZdKaW?!a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
