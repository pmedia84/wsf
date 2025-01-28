<?php
require 'Classes/Email.php';
$page_title = "Funding Application Result - Window Support Fund";
$meta_description = "Thank you for your application, we will be in touch with you shortly to discuss your Window Funding options.";
$page_url = '/funding-result';

/**
 * Prevent Get requests
 */
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /');
    exit();
}
//check if the form has been submitted and the recaptcha response is set
//if the form has not been submitted or the recaptcha response is not set, redirect to the homepage
if (!isset($_POST['g-recaptcha-response'])) {
    header('Location: /');
    exit();
}
//if the form has been submitted and the recaptcha response is set, continue with the script

if (isset($_POST['first_name'])) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $post_code = htmlspecialchars($_POST['post-code']);
    $num_windows = htmlspecialchars($_POST['windows_num']);
    $num_doors = htmlspecialchars($_POST['doors_num']);
    $age = htmlspecialchars($_POST['age']);

    // Check if any required field is empty
    if (empty($first_name) || empty($surname) || empty($email) || empty($phone) || empty($post_code)) {
        //header('Location: apply-funding');
        echo " error line 35";
        exit();
    }
    $other_info = htmlspecialchars($_POST['leads_notes']) ?? "No other information provided";
    //return to apply-funding.php if checkbox has not been checked
    if (empty($_POST['homeowner-checkbox'])) {
        ///header('Location: apply-funding');
        exit();
    }


    $home_owner = htmlspecialchars($_POST['homeowner-checkbox']);
} else {
    //header('Location: apply-funding');

    exit();
}
/**
 * load config file
 */
$config_file = $_SERVER['DOCUMENT_ROOT'] . "/config.json";
//! check file exists
if (!file_exists($config_file)) {
    $code = 404;
    $msg = "Config file not found";
    echo $code . " " . $msg;
    exit;
} else {
    $config = json_decode(file_get_contents($config_file));
    $site_key = $config->recaptcha->site_key;
    $secret_key = $config->recaptcha->secret_key;
}
/**
 * recaptcha tests
 */

$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']); //verify the response with the token generated from the user inout

$verify_data = json_decode($verifyResponse, true); //decode the JSON file received from google

//continue the script if the recaptcha score is greater than .7
if (isset($verify_data['score']) && $verify_data['score'] < .7) {
    exit('Recaptcha failed');
}
/**
 * run email scripts
 */
$opt_out_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'] . '/opt-out?email=' . $email;
$send_email = new Email();
$template = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/templates/email/welcome-email.html');
$body = str_replace(
    ['{{first_name}}', '{{surname}}', '{{email}}', '{{phone}}', '{{post-code}}', '{{windows_num}}', '{{doors_num}}', '{{age}}', '{{other_info}}', '{{opt_out_url}}'],
    [$first_name, $surname, $email, $phone, $post_code, $num_windows, $num_doors, $age, $other_info, $opt_out_url],
    $template
);
$subject = "Window Funding Application";


$send_email->sendEmail($subject, $body, $email);
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <?php include 'inc/Head.php'; ?>
</head>

<body>
    <?php include 'inc/Nav.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1>Thank you for your application</h1>
                    <p class="lead"><?= $first_name; ?>, we will be in touch with you shortly to discuss your Window Funding options.</p>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">Confirmation</h2>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Name</p>
                                <p class="card-text  mb-0"><?= $first_name . " " . $surname; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Email</p>
                                <p class="card-text  mb-0"><?= $email; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Postcode</p>
                                <p class="card-text  mb-0"><?= $post_code; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">No. of Windows</p>
                                <p class="card-text  mb-0"><?= $num_windows; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">No. of Doors</p>
                                <p class="card-text  mb-0"><?= $num_doors; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Any other information</p>
                                <p class="card-text  mb-0"><?= $other_info; ?></p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-body-tertiary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>What happens next?</h2>
                    <p class="lead">We will be in touch with you shortly to discuss your Window Funding options.</p>
                    <p class="lead">During our office hours we will contact as soon as possible after your application, so please expect a call from us within the next 12 to 24 hours.</p>
                    <p class="lead">In the meantime, you can <a href="contact">contact us</a> if you have any questions.</p>
                    <p>We take the use of your data very seriously, you can <a href="privacy">read our privacy policy</a> to find out more. We will never pass on your information to one of our partner network without your permission.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/Footer.php'; ?>

</body>