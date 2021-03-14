<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'unaux_27190239_970' );

/** MySQL database username */
define( 'DB_USER', '27190239_1' );

/** MySQL database password */
define( 'DB_PASSWORD', '6(QSNp[O34' );

/** MySQL hostname */
define( 'DB_HOST', 'sql310.byetcluster.com' );

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
define( 'AUTH_KEY',         'uejshxdetqlb69dxyqcfo0tsrpa1t0ebmmxfnxhcibnr2su4emmoznggokl6hlim' );
define( 'SECURE_AUTH_KEY',  'ag6ac8fllqlgggomkzv2bvh1brzoksikc2qiqhxnnmqllwnuweoggvrzkiagw3gz' );
define( 'LOGGED_IN_KEY',    'uzgwwcyck9hff2b36krhpwr85x3fxwfjp34awfriqb2bf8aibeec6ruetypoekgl' );
define( 'NONCE_KEY',        'qkbweigp70wnc8ywsnbbwlqiyxmccp051hvcbwyjnmthydohdp7kndozrr2rzxoz' );
define( 'AUTH_SALT',        'khmmgfshnubhg8nvwvupqeexomaatq2yualyi3klpdvpzoent4p1x5qlwvqbfoqa' );
define( 'SECURE_AUTH_SALT', 'kenqrykajvqnr91irqhxrsj0tcarwarjrlqbvr8bzftj3jz9miacjt7wvwuwrnsz' );
define( 'LOGGED_IN_SALT',   'fkypppxeanyfcrk8rxnuggjow0pv1tor2xq3oa3pamv7stnuhq6a7ngapzrvkzj8' );
define( 'NONCE_SALT',       'clbzf9fiyhno15wqyc08w8afxxlkp9eewkpb9coi4alpxo4n1colt10vusfimtdi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqx_';

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
