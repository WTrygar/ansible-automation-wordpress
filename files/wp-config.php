<?php
define( 'DB_NAME', '{{DB_NAME}}' );
define( 'DB_USER', '{{DB_USER}}' );
define( 'DB_PASSWORD', '{{DB_PW}}' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );


define('AUTH_KEY',         'pE!+R3<1!2M|ag}[)|0Fv<IT.5#uKo+hSY<^%CE+0AW$pS@ijfo9{Sb.9YBvKH9S');
define('SECURE_AUTH_KEY',  'VpEx51.h[F!9ad@>gresgfBfx+v=<cRuK(gKVCTx9d$+cfWfCov*372p[QPNpK&+');
define('LOGGED_IN_KEY',    'DN%] {jQV|o+#Z<4N$W%zV#Ww6-i|;zu&Wtn${hi*C.c+?-LT=&bL92NP5aM>0F6');
define('NONCE_KEY',        'qf@lg!>r.qn!8=W)P=+!iBpN-]^`, .ooAKD|0T{-T:+-JT}QG$mOd3@;HL|)9Tx');
define('AUTH_SALT',        '52^HEh43h8Up|<d}`9+_XcmodGET^b^jd%F;Pa+5P$u7Fw?~.MY2@.}LMiTL-CmZ');
define('SECURE_AUTH_SALT', 'nbAu_z]Xc@jAs80EiXx}+rS?&t!1Gro*5CWZ*^t6xgHVV,[(rRH0j29>x3s,zMy<');
define('LOGGED_IN_SALT',   ')c)@9<{RBRpP>WO$RmxBEUrWU>MFBjI-#E;v= ?E,[FkF%al-L(8QSW/M7FzIy@-');
define('NONCE_SALT',       '/7Kzjr.)C$B0 kMeHu-%V?x|kh9Rk8@C^dZa*AWagyx7x-N.tqeJDiWn@4gW^?(2');

$table_prefix = 'wp_';


define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
