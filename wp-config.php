<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'takeuni-db' );

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
define( 'AUTH_KEY',         'm33<w3`5tEo2;)vV4t_kfId*ZS?}5QgZ!$Ze$9weEU*Bw1t^h#=Nv7ZS@`20~hQw' );
define( 'SECURE_AUTH_KEY',  'bqzgVCES )G@}X~dy/,Drd&xBz}qd3E-6Q16FNfg[/u?d5uASY7yz:1,TTxPfNpl' );
define( 'LOGGED_IN_KEY',    'B^XF+LiCas!qeZ_JrQptSrvM[_H$4F.J;S/w7sLZ3@)?VW6qpn])]tNP}h1Ah$a^' );
define( 'NONCE_KEY',        '5./k/Y=PQt>G/:*P|e/jn )$Nm$.^jQ/6D#Z4,b%+h_<!frkoBveYHVC4D?T@puW' );
define( 'AUTH_SALT',        't&su5ynz0#e)<JykuU4FQ}rmm[27nf?0_QOAP?Ul|GKU:D.5-|V})h#|amlFY+A,' );
define( 'SECURE_AUTH_SALT', ' 8D2bcCd;&i18aV^zkpYGzl2#01X9m*l=yyf>8|=PjR$|U^cYsD`N;MrRIbKeRe>' );
define( 'LOGGED_IN_SALT',   'eW9~1;+#`m03)ZLi+~=RX]0hvWVf&o1%q[jM_K* lo4ya(/Gs!N=.UQ^~PXvysae' );
define( 'NONCE_SALT',       'Qx:yTQT7};DzlUVVCS/0qn90B5[;&s~y%%etv85H^G:m0%9NzXS:2H_bm-ZKiRL:' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
