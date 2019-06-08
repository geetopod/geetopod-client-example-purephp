<?php
global $g_config, $token, $password, $message;

$token = g_param('token');

if (g_is_post()) {
    $password = g_param('password');
    if (strlen($password) == 0) {
        $message = 'Password is required!';
    }
    if (strlen($message) == 0) {
        $clients = g_clients();
        $services = g_services();
        $request = new \geetoPod_Client\ForgotPasswordRequest();
        $request->company = $g_config['company'];
        $request->phone = '';
        $request->token = $token;
        $request->password = $password;
        $response = $services->forgotPassword($request);
        if ($response->isError) {
            $message = $response->errorMessage;
        } else {
            $message = 'Your password has been reset!';
        }
    }
}

g_theme('reset-password.php');

?>