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
define( 'DB_NAME', 'hybridhome' );

/** Database username */
define( 'DB_USER', 'web' );

/** Database password */
define( 'DB_PASSWORD', 'QnMJHN2WRAeFE' );

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
define( 'AUTH_KEY',         '3S@B$im>PkC~=5&pYr`j3We{:&v<E/~Xg>s2m/KNJ|*QBjvUZau!^u8M*4;~a)=|' );
define( 'SECURE_AUTH_KEY',  '*!XTxR>g*17WO@@Yi^I<~>AIi$nGrQ1~xxfQ@E]jHmk-`W;~!b>GZLM@t5q)!~05' );
define( 'LOGGED_IN_KEY',    'jMdTv)$IQEa8JCm{Iyr6pa~]uUnb#VR*o+drhi+ru[eC0d7L.5{>J}ucIf(Dr_6s' );
define( 'NONCE_KEY',        'HIQ.M?#Vcx+I!IBAAq9r(];M)2R)_J.vY$iK4As,NiG[L[2L0o&aqDy}Vh(Q@9MI' );
define( 'AUTH_SALT',        ',lr4pw}nN1fuC/}R<G=V{fs{IEJ@D3_9Q*z(X|5N$U(Qt:RXpi~MoTHTSQaK6<0t' );
define( 'SECURE_AUTH_SALT', 'EI6T,OMw!5|B16L|>uZ<GyAgp0LiX%>m^:uTk6WQ|7@|,oZ@` #Y_3#WsP>Sy~u+' );
define( 'LOGGED_IN_SALT',   ' U 6jH$z:U(RILY`Wb!l:%.xZp#EEyH5r:9zY998vl_>u;`46F/Qj(eG+[Fg&C]K' );
define( 'NONCE_SALT',       '691wEGSE#.mq>phT{Wxy;#?umooQrmLio#}_o>)Dmqid cL|7)2q;F3uvMur;JCp' );

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
