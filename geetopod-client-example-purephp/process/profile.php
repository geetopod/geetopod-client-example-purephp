<?php
global $g_config, $message, $emailVerified, $phoneVerified, $username, $email, $phone, $firstName, $lastName, $middleName, $mailingAddress, $billingAddress, $country, $state, $postalCode;

if (g_is_post()) {
    $username = g_param('username');
    $email = g_param('email');
    $phone = g_param('phone');
    $firstName = g_param('firstName');
    $middleName = g_param('middleName');
    $lastName = g_param('lastName');
    $mailingAddress = g_param('mailingAddress');
    $billingAddress = g_param('billingAddress');
    $country = g_param('country');
    $state = g_param('state');
    $postalCode = g_param('postalCode');
    $emailVerified = g_param('emailVerified');
    $phoneVerified = g_param('phoneVerified');

    try {
        $clients = g_clients();
        $services = g_services();
        $request = new \geetoPod_Client\UpdateUserInfoRequest();

        $request->company = $g_config['company'];
        $request->username = $username;
        $request->email = $email;
        $request->phone = $phone;
        $request->firstName = $firstName;
        $request->middleName = $middleName;
        $request->lastName = $lastName;
        $request->mailingAddress = $mailingAddress;
        $request->billingAddress = $billingAddress;
        $request->country = $country;
        $request->state = $state;
        $request->postalCode = $postalCode;

        $request->token = $clients->getClient(null)->token();
        $response = $services->updateUserInfo($request);
        if ($response->isError) {
            $message = $response->errorMessage;
        }
    } catch (Exception $e) {
        $message = $e->getMessage();
    }
} else {
    try {
        $clients = g_clients();
        $services = g_services();
        $request = new \geetoPod_Client\GetUserInfoRequest();
        $request->company = $g_config['company'];
        $client = $clients->getClient(null);
        if ($client->ssoInUse()) {
            $requestV = new \geetoPod_Client\ValidateSSOTokenRequest();
            $requestV->company = $g_config['company'];
            $requestV->ssoToken = $client->ssoToken();
            $responseV = $services->validateSSOToken($requestV);
            if ($responseV->isError) {
                $message = $responseV->errorMessage;
            } else {
                $username = $responseV->username;
                $firstName = $responseV->firstName;
                $lastName = $responseV->lastName;
                $message = 'Single Sign On is in use!';
            }
        } else {
            $request->token = $client->token();
            $response = $services->getUserInfo($request);
            if ($response->isError) {
                $message = $response->errorMessage;
            } else {
                $username = $response->username;
                $email = $response->email;
                $phone = $response->phone;
                $firstName = $response->firstName;
                $middleName = $response->middleName;
                $lastName = $response->lastName;
                $mailingAddress = $response->mailingAddress;
                $billingAddress = $response->billingAddress;
                $country = $response->country;
                $state = $response->state;
                $postalCode = $response->postalCode;
                $emailVerified = strlen($response->emailVerified) > 0 && $response->emailVerified == true;
                $phoneVerified = strlen($response->phoneVerified) > 0 && $response->phoneVerified == true;
            }
        }
    } catch (Exception $e) {
        $message = $e->getMessage();
    }
}

g_theme('profile.php');

?>