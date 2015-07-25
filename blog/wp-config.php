<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'homepage_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'banaan123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Bg!4FXF@+a8y18$7MD G f+cv`qLcwPRdWguR{f$4#2X|c)L~hT`@B8_42-J= mM');
define('SECURE_AUTH_KEY',  '8&2?q90wSaG$+cok^jl5Qy`/trQ *${$q!?by{8hqhpe7]R=JQqX*i|A~>ou!b)^');
define('LOGGED_IN_KEY',    ']V4!d=2Cw5N0aMk|yW;~Fu*|)fxM=7.-NQ=sEhtK{nFP)I?r:?#0dC)jyM#+||6)');
define('NONCE_KEY',        'N6oulx4(g$r-GEnRl$Os1 NvAqz0]hbU>TYjJWJagr9H+JB^W5Hw`WO{y]@X+>Rp');
define('AUTH_SALT',        '$N3CgB&V5vX8Xp`r<,DiAJ{GNH}G1W}uA%=0Ym|v+/t7/<LtAq@M4tT4<x{0~ t$');
define('SECURE_AUTH_SALT', '2p$i&,+yw*%hr,6rJ-r03YM_&mD!jZIgNI;B%=Ww;.d0VtS3KotCOgG4z6$ .JIe');
define('LOGGED_IN_SALT',   '`7ttZu]e6p%v[Y Lr<-q5&y,:Ef/kX@*/N[> s|TZ8>+9o~BdhHpTqSp7V-m6O%[');
define('NONCE_SALT',       '1Vq-1|V(6:fd|5pj#?xMPpGbYn C0oh@ZMG-;i/2:tAs$`yr6FnlE8Ojhl,AqBeT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
