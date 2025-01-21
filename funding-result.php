<?php
include 'inc/Head.php';

/**
 * Prevent Get requests
 */
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    //header('Location: /');
    //exit();
}
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $post_code = htmlspecialchars($_POST['post-code']);
    $num_windows = htmlspecialchars($_POST['num-windows']);
    $num_doors = htmlspecialchars($_POST['num-doors']);
    $age = htmlspecialchars($_POST['age']);
    $other_info = htmlspecialchars($_POST['any-other-info']);
} else {
    //header('Location: /');
    //exit();
}
print_r($_POST);
$name = 'mr applicant';
$email ='email@email.com';
$phone = '0897 536363';
$post_code = 'pe12 9dn';
$num_windows = 2;
$num_doors = 3;
$age = 34;
$other_info = 'no other info';
?>

<body>
<?php include 'inc/Nav.php'; ?> 
    <section class="py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col">
                    <h1>Thank you for your application</h1>
                    <p class="lead"><?=$name;?>, we will be in touch with you shortly to discus your Window Funding options.</p>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">Confirmation</h2>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Name</p>
                                <p class="card-text  mb-0"><?=$name;?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Email</p>
                                <p class="card-text  mb-0"><?=$email;?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Postcode</p>
                                <p class="card-text  mb-0"><?=$post_code;?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">No. of Windows</p>
                                <p class="card-text  mb-0"><?=$num_windows;?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">No. of Doors</p>
                                <p class="card-text  mb-0"><?=$num_doors;?></p>
                            </div>
                            <div class="hstack gap-3">
                                <p class="card-text text-secondary mb-0">Any other information</p>
                                <p class="card-text  mb-0"><?=$other_info;?></p>
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