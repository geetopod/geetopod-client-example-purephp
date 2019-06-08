<?php
global $g_config, $g_uri, $username, $password, $ssoInUse, $message;

if ($g_uri == '/login') {
    $message = '';

    if (g_is_post()) {
        $clients = g_clients();
        $services = g_services();

        $ssoInUse = g_param('ssoInUse');
        if ($ssoInUse . '' == 'true') {
            $requestU = new \geetoPod_Client\GetSSOTokenUrlRequest();
            $requestU->company = $g_config['company'];
            $requestU->redirectUrl = $g_config['web.url'] . "/postloginsso";
            $responseU = $services->getSSOTokenUrl($requestU);
            $goUrl = $responseU->url;
            header('Location: ' . $goUrl);
            exit();
        }

        $username = g_param('username');
        $password = g_param('password');
        $request = new \geetoPod_Client\LoginRequest();
        $request->company = $g_config['company'];
        $request->username = $username;
        $request->password = $password;
        $request->hasSSO = true;
        $response = $clients->getClient(null)->login($request);
        if ($response->isError) {
            $message = $response->errorMessage;
        } else {
            $ssoToken = $response->ssoToken;
            if (strlen($ssoToken) > 0) {
                $requestU = new \geetoPod_Client\PutSSOTokenUrlRequest();
                $requestU->ssoToken = $ssoToken;
                $requestU->company = $g_config['company'];
                $requestU->redirectUrl = $g_config['web.url'] . "/postlogin";
                $responseU = $services->putSSOTokenUrl($requestU);
                $goUrl = $responseU->url;

                header('Location: ' . $goUrl);
                exit();
            }

            header('Location: /u/profile');
            exit();
        }
    } else {
        $username = '';
        $password = '';
    }

    g_theme('login.php');
} else if ($g_uri == '/postlogin') {
    $ssoToken = g_param('sso_token');
    if (strlen($ssoToken) == 0) {
        header('Location: /');
        exit();
    }

    $_SESSION['CCS_SSO_Token'] = $ssoToken;

    header('Location: /u/profile');
    exit();
} else if ($g_uri == '/postloginsso') {
    $ssoToken = g_param('sso_token');
    if (strlen($ssoToken) == 0) {
        header('Location: /');
        exit();
    }

    $_SESSION['CCS_SSO_Token'] = $ssoToken;

    $clients = g_clients();
    $services = g_services();

    $requestV = new \geetoPod_Client\ValidateSSOTokenRequest();
    $requestV->company = $g_config['company'];
    $requestV->ssoToken = $ssoToken;
    $responseV = $clients->getClient(null)->loginSSO($requestV);

    header('Location: /u/profile');
    exit();
}

?>