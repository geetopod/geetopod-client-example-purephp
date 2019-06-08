<?php
global $g_config, $g_uri;

if ($g_uri == '/social/login/github') {
    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginUrlRequest();
    $requestV->company = $g_config['company'];
    $requestV->provider = 'github';
    $requestV->redirectUrl = $g_config['web.url'] . '/social/callback/github';
    $responseV = $services->socialLoginUrl($requestV);
    $url = $responseV->url;

    header('Location: ' . $url);
    exit();
} else if ($g_uri == '/social/callback/github') {
    $verifiedToken = g_param('verifiedToken');

    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginProcessRequest();
    $requestV->company = $g_config['company'];
    $requestV->verifiedToken = $verifiedToken;
    $requestV->hasSSO = true;
    $responseV = $clients->getClient(null)->loginSocial($requestV);

    $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
    $requestU->ssoToken = $responseV->ssoToken;
    $requestU->company = $g_config['company'];
    $requestU->redirectUrl = $g_config['web.url'] . "/postlogin";
    $responseU = $services->putSSOTokenUrl($requestU);
    $goUrl = $responseU->url;

    header('Location: ' . $goUrl);
    exit();
} else if ($g_uri == '/social/login/stackoverflow') {
    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginUrlRequest();
    $requestV->company = $g_config['company'];
    $requestV->provider = 'stackoverflow';
    $requestV->redirectUrl = $g_config['web.url'] . '/social/callback/github';
    $responseV = $services->socialLoginUrl($requestV);
    $url = $responseV->url;

    header('Location: ' . $url);
    exit();
} else if ($g_uri == '/social/callback/stackoverflow') {
    $verifiedToken = g_param('verifiedToken');

    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginProcessRequest();
    $requestV->company = $g_config['company'];
    $requestV->verifiedToken = $verifiedToken;
    $requestV->hasSSO = true;
    $responseV = $clients->getClient(null)->loginSocial($requestV);

    $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
    $requestU->ssoToken = $responseV->ssoToken;
    $requestU->company = $g_config['company'];
    $requestU->redirectUrl = $g_config['web.url'] . "/postlogin";
    $responseU = $services->putSSOTokenUrl($requestU);
    $goUrl = $responseU->url;

    header('Location: ' . $goUrl);
    exit();
} else if ($g_uri == '/social/login/microsoft') {
    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginUrlRequest();
    $requestV->company = $g_config['company'];
    $requestV->provider = 'microsoft';
    $requestV->redirectUrl = $g_config['web.url'] . '/social/callback/github';
    $responseV = $services->socialLoginUrl($requestV);
    $url = $responseV->url;

    header('Location: ' . $url);
    exit();
} else if ($g_uri == '/social/callback/microsoft') {
    $verifiedToken = g_param('verifiedToken');

    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginProcessRequest();
    $requestV->company = $g_config['company'];
    $requestV->verifiedToken = $verifiedToken;
    $requestV->hasSSO = true;
    $responseV = $clients->getClient(null)->loginSocial($requestV);

    $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
    $requestU->ssoToken = $responseV->ssoToken;
    $requestU->company = $g_config['company'];
    $requestU->redirectUrl = $g_config['web.url'] . "/postlogin";
    $responseU = $services->putSSOTokenUrl($requestU);
    $goUrl = $responseU->url;

    header('Location: ' . $goUrl);
    exit();
} else if ($g_uri == '/social/login/linkedin') {
    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginUrlRequest();
    $requestV->company = $g_config['company'];
    $requestV->provider = 'linkedin';
    $requestV->redirectUrl = $g_config['web.url'] . '/social/callback/github';
    $responseV = $services->socialLoginUrl($requestV);
    $url = $responseV->url;

    header('Location: ' . $url);
    exit();
} else if ($g_uri == '/social/callback/linkedin') {
    $verifiedToken = g_param('verifiedToken');

    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginProcessRequest();
    $requestV->company = $g_config['company'];
    $requestV->verifiedToken = $verifiedToken;
    $requestV->hasSSO = true;
    $responseV = $clients->getClient(null)->loginSocial($requestV);

    $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
    $requestU->ssoToken = $responseV->ssoToken;
    $requestU->company = $g_config['company'];
    $requestU->redirectUrl = $g_config['web.url'] . "/postlogin";
    $responseU = $services->putSSOTokenUrl($requestU);
    $goUrl = $responseU->url;

    header('Location: ' . $goUrl);
    exit();
} else if ($g_uri == '/social/login/twitter') {
    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginUrlRequest();
    $requestV->company = $g_config['company'];
    $requestV->provider = 'twitter';
    $requestV->redirectUrl = $g_config['web.url'] . '/social/callback/github';
    $responseV = $services->socialLoginUrl($requestV);
    $url = $responseV->url;

    header('Location: ' . $url);
    exit();
} else if ($g_uri == '/social/callback/twitter') {
    $verifiedToken = g_param('verifiedToken');

    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\SocialLoginProcessRequest();
    $requestV->company = $g_config['company'];
    $requestV->verifiedToken = $verifiedToken;
    $requestV->hasSSO = true;
    $responseV = $clients->getClient(null)->loginSocial($requestV);

    $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
    $requestU->ssoToken = $responseV->ssoToken;
    $requestU->company = $g_config['company'];
    $requestU->redirectUrl = $g_config['web.url'] . "/postlogin";
    $responseU = $services->putSSOTokenUrl($requestU);
    $goUrl = $responseU->url;

    header('Location: ' . $goUrl);
    exit();
} else {
    header('Location: /');
    exit();
}

?>