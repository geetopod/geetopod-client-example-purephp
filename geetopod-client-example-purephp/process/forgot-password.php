<?php
global $g_config, $email, $message;

if (g_is_post()) {
    $email = g_param('email');
    if (strlen($email) == 0) {
        $message = 'Email is required!';
    }
    if (strlen($message) == 0) {
        $subjectTemplate = g_theme_file('emails/forgot-password/subject.tpl');
        $bodyTextTemplate = g_theme_file('emails/forgot-password/text.tpl');
        $bodyHtmlTemplate = g_theme_file('emails/forgot-password/html.tpl');
        $clients = g_clients();
        $services = g_services();
        $request = new \geetoPod_Client\ForgotPasswordSendByEmailRequest();
        $request->company = $g_config['company'];
        $request->email = $email;
        $request->subjectTemplate = $subjectTemplate;
        $request->bodyTextTemplate = $bodyTextTemplate;
        $request->bodyHtmlTemplate = $bodyHtmlTemplate;
        $response = $services->forgotPasswordSendByEmail($request);
        if ($response->isError) {
            $message = $response->errorMessage;
        } else {
            $message = 'Instruction email has been sent to your mailbox!';
        }
    }
}

g_theme('forgot-password.php');

?>