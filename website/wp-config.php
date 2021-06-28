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
define( 'DB_NAME', 'c5712webshop' );

/** MySQL database username */
define( 'DB_USER', 'c5712Robin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SePZN2rYrek!sE' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '0&2]Qe <Hf#NPoE&{sK:;v>%7XIst@asrq/&Ua$ #nC=7GE1B)2CV*VTnL><WQ5H' );
define( 'SECURE_AUTH_KEY',  'GU@YdBHCxpQWwhx<%>dYZ`xVkaKZ$_$*C$U#,`#>!(dWQE1I+0/GQe2z`,QUClEt' );
define( 'LOGGED_IN_KEY',    'BvOhE5U9&w:*2FL#(!F%Kt4Yt]mvDwF2 Ds?ouI_>S}M6%Z+#0wD(BvwQpKtWHY!' );
define( 'NONCE_KEY',        '}R;8RnQe7k8rZ?GHWzsC~S~on$$&vj!iy$H~RUPq-S?*HZhDKUmRs-lEX}9(P[tV' );
define( 'AUTH_SALT',        '@v:(++XD6_nKxj*6%zB.fOP{!i6qBF6oW9.u7.[8]cnX (@qN7NC/nRbVr*/e/?m' );
define( 'SECURE_AUTH_SALT', ',vt`8a55Sr=-L-IW~5:h<kY-q<_G<3Jj,BtVSmpE,pr3F`<-d#b+`{3gjxj+5%7F' );
define( 'LOGGED_IN_SALT',   ']W:NZ-X[DlF/HW 4MOEj{%y-k.qShsH.PvU6*3F0M=9ZwTB%ob1}/`H8`@`P(4G~' );
define( 'NONCE_SALT',       'LV.&)r9Rf^B^_?{tvN*C5kWX.Ls?G9dg5+z|@i~zj#ab_(mumd$&OB1]d7/..c=*' );

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

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
