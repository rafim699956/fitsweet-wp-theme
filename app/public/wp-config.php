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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sjEG;g4$T%M~y@YRF-cf%w,,gmA5IATdv-/Mh_k{[W,*YFa$ t^/^C,{a6?[{>bx' );
define( 'SECURE_AUTH_KEY',   'J+G;n-zP<#.vfv9)2`,R!ilrWcc#U~[q8k-d93`NWp#QA(wPxu^UYo_h!5F#nqEd' );
define( 'LOGGED_IN_KEY',     'STW)Le!{c$wO*V.Qr=kO2%PDf0!%wT[Mg{=++F;0@X?hSl~(<ZTrwoY[}1-9h5!5' );
define( 'NONCE_KEY',         '`E0:W_!Qrj3B<R*i#420Q%!&41#[N5t%YT)M[`HcE;U-E7]|Gco%f<WNy~ji_S+7' );
define( 'AUTH_SALT',         '_kAuY{u_{7Jhl8Kab2fu(u~I8&^sMU!]ZQu8WONhw<lC9Umuq-?&aM>hgFDEs41Q' );
define( 'SECURE_AUTH_SALT',  '5ypA[Y,F}9aQm([j>wAA-qM/DcVwt_isL.5*@ `OjXz/@lOvU3p1ax}Yc(6y&n,0' );
define( 'LOGGED_IN_SALT',    'sf-p{EG~+q6z(%CCcEi*..GVhF@WmK<|Q~* {y_BSV+7|!!iaIY|+@rHM_kR/=eP' );
define( 'NONCE_SALT',        '$C#qs%Qq0yqgk3@T0D5EMzyt%*7@[BCg-aa^$yJD;.CCV$nH*@=*/ 24M6jo(#p:' );
define( 'WP_CACHE_KEY_SALT', '/?CSIZs1d>rM@Q,d{NJj4q4AL+37L+HGL`fnel;O dQ^@VEBN?qQT0s]v1O(*Z2$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
