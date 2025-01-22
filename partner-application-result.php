<?php
require 'Classes/Email.php';
$page_title = "Partner Application Result - Window Support Fund";


/**
 * Prevent Get requests
 */
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /');
    exit();
}
if (!isset($_POST['g-recaptcha-response'])) {
    header('Location: partner-application');
    exit();
}
if (isset($_POST['name']) ) {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $business_name = htmlspecialchars($_POST['business_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $website = htmlspecialchars($_POST['website']);
    $region = htmlspecialchars($_POST['region']);
    $additional_info = htmlspecialchars($_POST['additional_info']);

    if (empty($name) || empty($email) || empty($business_name) || empty($phone) || empty($website) || empty($region)) {
        header('Location: partner-application');
        exit();
    }
} else {
    header('Location: partner-application');
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
$send_email = new Email();
$subject = "Partner Application from " . $business_name;
$body = "<h1>Partner Application</h1>";
$body .= "<p>Name: ".$name."</p>";
$body .= "<p>Email: ".$email."</p>";
$body .= "<p>Business Name: ".$business_name."</p>";
$body .= "<p>Phone: ".$phone."</p>";
$body .= "<p>Website: ".$website."</p>";
$body .= "<p>Region: ".$region."</p>";
$body .= "<p>Additional Info: ".$additional_info."</p>";
//$send_email->sendEmail($subject, $body);
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
                    <p class="lead"><?= $name; ?>, we will be in touch with you shortly to discuss your Partner application</p>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">Confirmation</h2>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Name</p>
                                <p class="card-text  mb-0"><?= $name; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Email</p>
                                <p class="card-text  mb-0"><?= $email; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Phone</p>
                                <p class="card-text  mb-0"><?= $phone; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Website</p>
                                <p class="card-text  mb-0"><?= $website; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Region you cover</p>
                                <p class="card-text  mb-0"><?= $region; ?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Business Name</p>
                                <p class="card-text  mb-0"><?= $business_name; ?></p>
                            </div>

                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Any other information</p>
                                <p class="card-text  mb-0"><?= $additional_info; ?></p>
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
                    <p class="lead">We will be in touch with you shortly to discuss your application</p>
                    <p class="lead">During our office hours we will contact as soon as possible after your application, so please expect a call from us within the next 12 to 24 hours.</p>
                    <p class="lead">In the meantime, you can <a href="contact">contact us</a> if you have any questions.</p>

                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/Footer.php'; ?>

</body>