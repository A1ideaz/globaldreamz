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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'globald4_ss_dbname3cc');

/** MySQL database username */
define('DB_USER', 'globald4_ss_d3cc');

/** MySQL database password */
define('DB_PASSWORD', 'gIvDudILFGoP');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'ndWesy^YM@+b%bgM$LeR[hjUU*COb[N&m>uVv_wE*Kps|;}F<uImsIF&B!}?N|K(VQ>!giGV/}G$ecQhdijWWULc{{f<D[=;/jh{bx?a(w]Y^RA}wnZNN_IZllEgT{^s');
define('SECURE_AUTH_KEY', 'LkCoxX[Dj+oQph{PU/&]FwtdhvIYyiJWaXqNU{F^>HfKDuMOTd})[!avRO[m$-f*o>p_@^CPU@}&!Iny*l&&frc$XjUGl&v(UQ<=vz^P^aO!e{?zqwU^=yg>lkj|=@|J');
define('LOGGED_IN_KEY', '!!VKUZh<AoOAez*Xk*)e>D(Zg>VDj^+r;LsV<Kh[sbC>LoBsE|?KMz<xbcmGVAbQI_wfI(zK!$ELqHAfPDJ{&v_)>kzF(|J|GHi[QeNm%;hV|omsrRytF>W>VT$JBTh^');
define('NONCE_KEY', 'BfvG)XtJZN;[OCdkP[{Bo)b[BO)YMFgIRx&BIA+wvL<bytm{Ea<IO]JSrYjEvqlA=-JkxLbWlRGRlO[n]Gj<NTZilJ=LTpg]SLg<gqNr{qQ*IoxzQ/{?xq>nm>C$Dj<M');
define('AUTH_SALT', 'oX{)^SwaP-oL*kM(j^ltF(Tf^QTdyQ%rl?t_kq?F[rJ^dnQcGItO}e-YC|B)enJiacTQxU)oWZ[kjzm;]fD^QQh^;((_YHKElLu$g&hLC%|JLqWN@H<nJ*OF!Es*ugeU');
define('SECURE_AUTH_SALT', '/xi?yG|lOWN@>eL<St-(!)$_hnIyWLY$O@NhpOfB%m_g$!MPkMzTlK?C-o]NBLe!CQfm)n}AnO%LSw-@m}oRsihRNMWU(u!SNrUlQ]t@h=^xM-|N((M^g;|(P(zQV=IM');
define('LOGGED_IN_SALT', 'fCRbSz@Fy@IpBAX*s_b;TU*NlAfYKhJ-<cl<P]X[&;hMi]EZ/)<IrOrT}KjbsbfXJEwmR_ji(lCK!Q_@BIMFrycQK>_D@|F%/p/sMS[I%NLf;T!S@CJTtCXy&Ij!TJ>l');
define('NONCE_SALT', 'FQUSkj-F[[MkREVo%n$+mv!NxObc;obt/U&KatlgS&JHYuWUr}TZ=_?|V(Dg!e|xZqQ%%STX;P>hxYo%YOm_LN/j[z&GSI^HzLilWsvXSw!o/[;*Es-au*&r{zb]|owS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xssj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
