<?php
global $g_config, $captchaCode, $captchaImageUrl, $captchaText, $username, $email, $phone, $password, $passwordRetype, $firstName, $middleName, $lastName, $mailingAddress, $billingAddress, $country, $state, $postalCode, $message;

if (g_is_post()) {
    $captchaCode = g_param('captchaCode');
    $captchaImageUrl = g_param('captchaImageUrl');
    $captchaText = g_param('captchaText');
    $username = g_param('username');
    $password = g_param('password');
    $passwordRetype = g_param('passwordRetype');
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
    if (strlen($password) == 0) {
        $message = 'Password is required!';
    }
    if (strlen($message) == 0 && $password != $passwordRetype) {
        $message = 'Retyped password does not match!';
    }
    if (strlen($message) == 0) {
        $clients = g_clients();
        $services = g_services();
        $request = new \geetoPod_Client\RegisterRequest();
        $request->company = $g_config['company'];
        $request->captchaCode = $captchaCode;
        $request->captchaText = $captchaText;
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
        $request->password = $password;
        $response = $services->register($request);
        if ($response->isError) {
            $message = $response->errorMessage;
            $clients = g_clients();
            $services = g_services();
            $request = new \geetoPod_Client\RegisterCaptchaRequest();
            $request->company = $g_config['company'];
            $response = $services->registerCaptcha($request);
            if (!$response->isError) {
                $captchaCode = $response->captchaCode;
                $captchaImageUrl = $response->captchaImageUrl;
            }
        } else {
            header('Location: /login');
            exit();
        }
    } else {
        $clients = g_clients();
        $services = g_services();
        $request = new \geetoPod_Client\RegisterCaptchaRequest();
        $request->company = $g_config['company'];
        $response = $services->registerCaptcha($request);
        if (!$response->isError) {
            $captchaCode = $response->captchaCode;
            $captchaImageUrl = $response->captchaImageUrl;
        }
    }
} else {
    $clients = g_clients();
    $services = g_services();
    $request = new \geetoPod_Client\RegisterCaptchaRequest();
    $request->company = $g_config['company'];
    $response = $services->registerCaptcha($request);
    if ($response->isError) {
        $message = $response->errorMessage;
    } else {
        $captchaCode = $response->captchaCode;
        $captchaImageUrl = $response->captchaImageUrl;
    }
}

g_theme('register.php');

?>