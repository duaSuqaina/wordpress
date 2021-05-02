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
define( 'DB_NAME', 'projectb' );

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
define( 'AUTH_KEY',         'l_+:ca24_d13L~:?[]1F(;vL6m&jZ=d(Z[5cdx2.nV;#_.wl%rTcIi5&X#;bvSWy' );
define( 'SECURE_AUTH_KEY',  'lDzNM1wpUT~+*/%&HVnHd2(jl8DIdk8;r/N;0<2C/C;oDAq^SHZu`51.=nYE5!oq' );
define( 'LOGGED_IN_KEY',    'G,HL%yRa7C%yC&DA*?5Rai{^PL?/aa-Gq5Z+>m01[wBO[laty?R)h?rZuXMy&+OG' );
define( 'NONCE_KEY',        '9hf7LY@$n]N}.sTM,%8gj#];ru}@0;kJ/JW1n@o$j#W}&4VzdYbE}lO-6ll+:B^z' );
define( 'AUTH_SALT',        'Fy1OR;{AnI^/#CO7Q:G~U]A{EO?(7iRM& =G+9w )-^JgGV=/A >nuQG`?Rn+hH!' );
define( 'SECURE_AUTH_SALT', 'vwiS01iO87t[ %eh|^?B38a=on7Jr&[,Jm{1kH84~cWn9t-Uxd beV B<PkxdDY*' );
define( 'LOGGED_IN_SALT',   'py)t~5o]ll2=],)ni;~A`ErK3S8m}OH%wAI;y8`f=uW>7:]*eW@s5F6!6}W*!y;X' );
define( 'NONCE_SALT',       'ZxE,JcoMs6C2x1NxBQvPHVwdg]&wQW@[p8)[qLZ|cWKWsMF/c~ xvt0Mt6WQQ{/q' );

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
