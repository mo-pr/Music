<?php
if(isset($_POST['email'])) {

    $email_to = "moritz.preining@outlook.com";
    $email_to_2 = "hhfabian@outlook.de";
    $email_subject = "Website_Contact";

    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    if(!isset($_POST['full_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['username']) ||
        !isset($_POST['message'])){
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $full_name = $_POST['full_name'];
    $email_from = $_POST['email'];
    $telephone = $_POST['telephone'];
    $user = $_POST['username'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$full_name)) {
        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }

    if(strlen($user) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $email_message .= "Full Name: ".clean_string($full_name)."\n";
    $email_message .= "Username: ".clean_string($user)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Nachricht: ".clean_string($message)."\n";

    mail($email_to, $email_subject, $email_message);
    mail($email_to_2,$email_subject, $email_message);

}
?>