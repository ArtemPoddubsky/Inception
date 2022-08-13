<?php

// Database info.
define( 'DB_NAME', getenv('DB_NAME'));
define( 'DB_USER', getenv('DB_USER'));
define( 'DB_PASSWORD', getenv('DB_PASSWORD'));
define( 'DB_HOST', getenv('DB_HOST') );
define( 'DB_CHARSET', 'utf8mb4' );

// The Database Collate type. Don't change this if in doubt.
define( 'DB_COLLATE', '' );
define('WP_REDIS_HOST', 'redis');


// Secret Keys.
define('AUTH_KEY',         'L(WFHm0fH~Xl(U+lrB$|h6f;W &#O(gU*+uT,b^hAO^!JcIF$bzq=P2bXQ<#BN+C');
define('SECURE_AUTH_KEY',  '|G{prFf[n2(Ah&8&tZ,,TcjlT.<fe ;e#+!O|VuoNnX,pb.[FVIo!&>DTVTX{Qla');
define('LOGGED_IN_KEY',    'Ahs[)26_M<h]j7Sz)neu4.Z:ak(Jh+L%Wig;uw!G7n-csv{QRvm0`|J>1jOVAl1~');
define('NONCE_KEY',        'j=C)Zr7pDlE$ (9(Ha&}XfJZ?+[#t}wOT6x;)+5;_+Np-hr/[HH=fA[v^FBD8{g&');
define('AUTH_SALT',        'eNj-G.R#&m h3}A{|WE7Ny3;{(<y^p0U1%^Q&q]7A>`<lH%z.T-pXw0/|j_Xz_3Q');
define('SECURE_AUTH_SALT', '/zOR5XuUDS~TqO4Rz*ZVes=KQGNt ?-~C7b7yP>,Rv|, XVXYDexi5<=KIyjWHM/');
define('LOGGED_IN_SALT',   'Vpdn/$#|Yd>TlSHH.d7`a(3eN?i)4/H?%O)/4B3milCJKAmJADJ4<&DTG,H3Ev-y');
define('NONCE_SALT',       'VC~X-%>9ns[o,<WZ~54# c^H+s`dN`&#^- SG@SfntxnRI.My|*8V^{fZ](*#,Gw');
define( 'WP_CACHE_KEY_SALT', 'lholdo.42.fr:' );
define( 'WP_REDIS_DISABLE_METRICS', true );
define('WP_CACHE', true);


$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', "direct");