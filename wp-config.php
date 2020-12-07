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
define( 'DB_NAME', 'ratosurya' );

/** MySQL database username */
define( 'DB_USER', 'aayurt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aayurt@1998' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.aayushshrestha.com' );

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
define( 'AUTH_KEY',         'fVyU`8EtZ)SgsR:w$$z5f)B)/iTrq{bHS&mT{f`xE|jxfla!:5)WUpAG&@IiRfSS' );
define( 'SECURE_AUTH_KEY',  'vPfy;:CC2la&-B<(,|unSDih(|eXaircadR3*XNp$!PUYrtGO:O054GX2f2oBr5X' );
define( 'LOGGED_IN_KEY',    '4EJ^DBdZ&?^5$mV+;HNl_)RjXZ@@3KFhNwMi5!$,BS %pr% #i6.Oe]@f_ a_8fI' );
define( 'NONCE_KEY',        '||!c*poT4s5$v+[Fk#1ywMD>X,tDd@Vsm;yAu5U@@fjs60:D{m;kYKdmKg~MB}Mj' );
define( 'AUTH_SALT',        '7C;ehj1[=IT[z );pdgx@?cqvtC[-Pv/Fv;Z*80;WK*(oK6vbh; W,qvwcn^%`/6' );
define( 'SECURE_AUTH_SALT', '[?wrZ8=aA o3%@N+Awq!<(g$j6-vtRUlk.Bm|=&=)$hhY1Rzf<;2wBv]AkpKdr{u' );
define( 'LOGGED_IN_SALT',   '9R5,=K)bi{$Vn@V$q5|h#zuNHdGRsSC;J4T}w!zgaj.?:QjgY0>[!.k]DmF6FTgq' );
define( 'NONCE_SALT',       '/tx3$-T C_qm2j>v$_U[,FB/tC99R8$(v}SgZ.:2S(lEpQ@?XtlFK3C)#oQ*=2M?' );
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
