<?php $page_title = "Become a Partner - Window Support Fund";
    $meta_description="Apply to become a partner with Window Support Fund and help homeowners access quality windows and doors at affordable prices.";
    $page_url='partner-application';
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
}


?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>

    <?php include 'inc/Head.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $site_key; ?>" async="false"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("partner-application").submit();
        }
    </script>
</head>

<body>
    <?php include 'inc/Nav.php'; ?>

    <div class="container hero">
        <div class="row">
            <div class="col-md-6">
                <div style="max-width: 450px;">
                    <h1>Partner Application</h1>
                    <p class="lead">Take advantage of an amazing opportunity to grow your business with us.</p>
                    <p>We are looking for proactive companies in certain postcode areas to help homeowners access quality windows and doors.</p>
                    <p>You will be given a dedicated postcode area to work within, all marketing and advertising is carried out by ourselves.</p>
                    <p>All you have to do is do what you do best and help support homeowners in transforming their homes!</p>
                    <p>We do the rest!</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/img/index-hero-lg.webp" class="img-fluid rounded" alt="Privacy Policy">
            </div>
        </div>
    </div>

    <section class="py-5 mb-4" style="background: var(--secondary-50);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Your Business</h2>
                    <form action="partner-application-result" method="post" id="partner-application">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                        </div>

                        <div class="mb-3">
                            <label for="business_name" class="form-label">Your Business Name</label>
                            <input type="text" class="form-control" id="business_name" name="business_name" placeholder="Your business name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Your Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number">
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="Your website address">
                        </div>
                        <div class="mb-3">
                            <label for="region" class="form-label">Select Your Region</label>
                            <select class="form-select" id="region" name="region">
                                <option value="">Select your region</option>
                                <option value="north_east">North East</option>
                                <option value="north_west">North West</option>
                                <option value="yorkshire_and_the_humber">Yorkshire and the Humber</option>
                                <option value="east_midlands">East Midlands</option>
                                <option value="west_midlands">West Midlands</option>
                                <option value="east_of_england">East of England</option>
                                <option value="london">London</option>
                                <option value="south_east">South East</option>
                                <option value="south_west">South West</option>
                                <option value="wales">Wales</option>
                                <option value="scotland">Scotland</option>
                                <option value="northern_ireland">Northern Ireland</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="additional_info" class="form-label">Additional Information</label>
                            <textarea class="form-control" id="additional_info" name="additional_info" rows="4" placeholder="Any additional information"></textarea>
                        </div>
                        <button class="btn btn-primary mb-2 g-recaptcha" type="submit" data-sitekey="<?= $site_key; ?>"
                            data-callback='onSubmit'
                            data-action='submit'>Submit Application</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>What can we offer you?</h3>
                    <div class="vstack gap-3">
                        <div class="d-flex feature-card rounded">
                            <div class="bs-icon-md bs-icon-rounded  d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg class="icon feather-icon">
                                    <use xlink:href="assets/img/feather.svg#award"></use>
                                </svg></div>
                            <div class="px-3">
                                <h4>Exclusive Leads</h4>
                                <p>You will have exclusive leads in your designated area.</p>
                            </div>
                        </div>
                        <div class="d-flex feature-card rounded">
                            <div class="bs-icon-md bs-icon-rounded  d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg class="icon feather-icon">
                                    <use xlink:href="assets/img/feather.svg#credit-card"></use>
                                </svg></div>
                            <div class="px-3">
                                <h4>Simple Payment Plans</h4>
                                <p>Only pay for the leads you take from us</p>
                            </div>
                        </div>
                        <div class="d-flex feature-card rounded">
                            <div class="bs-icon-md bs-icon-rounded  d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg class="icon feather-icon">
                                    <use xlink:href="assets/img/feather.svg#calendar"></use>
                                </svg></div>
                            <div class="px-3">
                                <h4>Pre confirmed appointments</h4>
                                <p>All appointments pre confirmed, so all you have to do is turn up.</p>
                            </div>
                        </div>
                        <div class="d-flex feature-card rounded">
                            <div class="bs-icon-md bs-icon-rounded  d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg class="icon feather-icon">
                                    <use xlink:href="assets/img/feather.svg#alert-triangle"></use>
                                </svg></div>
                            <div class="px-3">
                                <h4>No bad credit</h4>
                                <p>We don't pass anyone to you that has bad credit</p>
                            </div>
                        </div>
                        <div class="d-flex feature-card rounded">
                            <div class="bs-icon-md bs-icon-rounded  d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg class="icon feather-icon">
                                    <use xlink:href="assets/img/feather.svg#check"></use>
                                </svg></div>
                            <div class="px-3">
                                <h4>No contract</h4>
                                <p>We don't give you a minimum contract or tie in period, as well as this there are no set up costs</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>





    <?php include 'inc/Footer.php'; ?>
</body>

</html>