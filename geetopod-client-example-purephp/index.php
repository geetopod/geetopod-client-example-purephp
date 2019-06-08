<?php
global $g_config, $g_uri, $g_host, $g_online, $g_sso_in_use;
require_once(dirname(__FILE__) . '/config.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once(dirname(__FILE__) . '/library/share.php');

$g_uri = $_SERVER['REQUEST_URI'];
$g_host = $_SERVER['SERVER_NAME'];

$g_online = false;
try {
    $client = g_clients()->getClient(null);
    $g_online = $client->online();
    $g_sso_in_use = $client->ssoInUse();
} catch (Exception $e) {
}

$pos = strpos( $g_uri, '?' );
if ( $pos !== false ) {
    $g_uri = substr( $g_uri, 0, $pos );
}

if ( in_array( strtolower( $g_host ), array($g_config['domain']) ) ) {
	if ($g_uri == '/') {
		g_process('index.php');
    } else if ($g_uri == '/s/gallery.html') {
        header('Location: /s/work.html');
    } else if ( in_array( $g_uri, array("/s/work.html", "/s/contact.html", "/s/shop.html", "/s/about.html", "/s/blog.html", "/s/services.html", "/s/work-grid-without-text.html", "/s/work-grid.html") ) ) {
        g_process('index.php');
    } else if ($g_uri == '/login' || $g_uri == '/postlogin' || $g_uri == '/postloginsso') {
        if ($g_online) {
            if ($g_uri == '/postlogin') {
                g_process('login.php');
            } else {
        		header('Location: http://' . $g_config['domain']);
            }
        } else {
            g_process('login.php');
        }
    } else if ($g_uri == '/register') {
        if ($g_online) {
    		header('Location: http://' . $g_config['domain']);
        } else {
            g_process('register.php');
        }
    } else if ($g_uri == '/forgot-password') {
        if ($g_online) {
    		header('Location: http://' . $g_config['domain']);
        } else {
            g_process('forgot-password.php');
        }
    } else if ($g_uri == '/reset-password') {
        if ($g_online) {
    		header('Location: http://' . $g_config['domain']);
        } else {
            g_process('reset-password.php');
        }
    } else if ($g_uri == '/u/profile') {
        if ($g_online) {
            g_process('profile.php');
        } else {
    		header('Location: http://' . $g_config['domain'] . '/login');
        }
    } else if ($g_uri == '/change-password') {
        if ($g_online) {
            g_process('change-password.php');
        } else {
    		header('Location: http://' . $g_config['domain'] . '/login');
        }
    } else if ($g_uri == '/logout' || $g_uri == '/logallout' || $g_uri == '/postlogout') {
        g_process('logout.php');
    } else if (strpos($g_uri, '/social/') === 0) {
        g_process('social.php');
	} else {
		header('Location: http://' . $g_config['domain'] . '/login');
	}
} else {
	header('Location: http://' . $g_config['domain'] . $_SERVER['REQUEST_URI']);
}

?>
