<?php
global $g_config, $password, $message;

if (g_is_post()) {
    $password = g_param('password');
    if (strlen($password) == 0) {
        $message = 'Password is required!';
    }
    if (strlen($message) == 0) {
        try {
            $clients = g_clients();
            $services = g_services();
            $request = new \geetoPod_Client\ChangePasswordRequest();
            $request->token = $clients->getClient(null)->token();
            $request->password = $password;
            $request->company = $g_config['company'];
            $response = $services->changePassword($request);
            if ($response->isError) {
                $message = $response->errorMessage;
            } else {
                $message = 'Your password has been changed!';
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
        }
    }
}

g_theme('change-password.php');

?>