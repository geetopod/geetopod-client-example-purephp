<?php

function g_theme_file( $path ) {
    return file_get_contents(dirname(__FILE__) . '/../theme/' . $path);
}

function g_services() {
    global $g_config;

    g_library('geetopod-client.php');
    $clients = \geetoPod_Client\Clients::instance();
    $services = \geetoPod_Client\Services::instance();
    $services->setGatewayUrl($g_config['gateway.url']);

    return $services;
}

function g_clients() {
    global $g_config;

    g_library('geetopod-client.php');
    $clients = \geetoPod_Client\Clients::instance();
    $services = \geetoPod_Client\Services::instance();
    $services->setGatewayUrl($g_config['gateway.url']);

    return $clients;
}

function g_process( $path ) {
    require_once(dirname(__FILE__) . '/../process/' . $path);
}

function g_theme( $path ) {
    require_once(dirname(__FILE__) . '/../theme/' . $path);
}

function g_library( $path ) {
    require_once(dirname(__FILE__) . '/../library/' . $path);
}

function g_is_post() {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    if ($method == 'post') {
    	return true;
    } else {
	    return false;
    }
}

function g_param( $name ) {
    if ( isset( $_POST[ $name ] ) ) {
	    return $_POST[ $name ];
    }
    if ( isset( $_GET[ $name ] ) ) {
	    return $_GET[ $name ];
    }
    return '';
}

?>
