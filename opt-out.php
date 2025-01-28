<?php
$page_title = 'Opt Out Of My Application - The Window Support Fund';
$meta_description = "Opt out of you window and door funding application.";
$page_url = '/opt-out';
$email_address = $_GET['email'] ?? $_POST['email_address'] ?? null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    require 'Classes/Email.php';
    /**
 * run email scripts
 */
$opt_out_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'] . '/opt-out?email=' . $email_address;
$send_email = new Email();
$template = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/templates/email/opt-out-notification.html');
$body = str_replace(
    ['{{email}}','{{opt_out_url}}'],
    [$email_address,$opt_out_url],
    $template
);
$subject = "Window Funding Application Opt Out";


$send_email->SendOptoutEmail($subject, $body);
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <?php include 'inc/Head.php';  ?>

</head>

<body>
    <?php include 'inc/Nav.php';  ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
                    <h1>Opt Out</h1>
                    <p>You have clicked a link to opt out of your application for support with your windows and doors.</p>
                    <p>If you would like to opt out of your application, please click the button below.</p>
                <?php else: ?>
                    <h1>Opt Out Successful</h1>
                    <p>Your email address has been removed from our records successfully</p>
                    <p><strong>Please note:</strong> In some circumstances this can take up to 36 hours.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
        <section class="py-5" style="background: var(--secondary-50);">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" action="opt-out" id="opt-out">
                            <div class="mb-3">
                                <label for="email_address" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="email_address" name="email_address" value="<?= $email_address ?? ""; ?>" required>

                            </div>

                            <button class="btn btn-danger mb-2 g-recaptcha" type="submit">Submit request</button>

                        </form>
                        <p>Once you submit this form your details will be removed from our records.</p>

                    </div>
                </div>
            </div>

        </section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>How does the Window Support Fund Work?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <p>Upon submitting your application, one of our friendly team will be in touch with you to discuss the options available to you. At this point we will let you know if you qualify for fully funded windows and doors. If you do not, we will give you the option of being passed to a member of our partner network.&nbsp;</p>
                    <p>We will only pass your details onto one of our partner network if you give us permission. Your local partner will visit you and go through all the options available to help you transform your home.</p>
                    <p>All quotations are no obligation.</p>
                </div>
            </div>
        </div>
        <?php else:?>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Changed your mind?</h2>
                        <p>Changed your mind or opted out by mistake?</p>
                        <p>Don't worry, you can reapply for funding at any time by visiting our <a href="apply-funding">application page</a>.</p>
                    </div>
                </div>
            </div>
    <?php endif; ?>
    
    <?php include 'inc/Footer.php'; ?>
</body>

</html>