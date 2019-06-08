<?php
global $g_config, $g_uri;

if ($g_uri == '/logout') {
    $clients = g_clients();
    $services = g_services();
    $response = $clients->getClient(null)->logout(false);

    $_SESSION['CCS_SSO_Token'] = '';
    $_SESSION['SSO_IN_USE'] = false;

    header('Location: /');
    exit();
} else if ($g_uri == '/logallout') {
    $clients = g_clients();
    $services = g_services();
    $response = $clients->getClient(null)->logout(false);

    $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
    $requestU->ssoToken = "";
    $requestU->company = $g_config['company'];
    $requestU->redirectUrl = $g_config['web.url'] . "/postlogout";
    $responseU = $services->putSSOTokenUrl($requestU);
    $goUrl = $responseU->url;

    header('Location: ' . $goUrl);
    exit();
} else if ($g_uri == '/postlogout') {
    $_SESSION['CCS_SSO_Token'] = '';
    $_SESSION['SSO_IN_USE'] = false;
}

header('Location: /');
exit();

?>