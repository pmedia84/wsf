<?php
$page_title='Up to 100% discount on new Windows &amp; Doors - The Window Support Fund';
$meta_description="Get up to 100% discount on new Windows &amp; Doors with The Window Support Fund. Find out how much funding you could be entitled to. Simply fill out the form below and one of our friendly team will get in touch with you.";
$page_url='';

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
    <?php
    include 'inc/Head.php';
    ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Window Support Fund",
            "url": "https://windowsupportfund.uk"
        }
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $site_key; ?>" async="false"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("funding-application").submit();
        }
    </script>
</head>

<body>
    <?php include 'inc/Nav.php'; ?>
    <div class="container hero">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-sm-start justify-content-md-start align-items-md-center justify-content-lg-center">
                <div style="max-width: 450px;">
                    <h1 class="text-uppercase">The Window Support fund</h1>
                    <p class="lead my-3">Helping homeowners access quality windows &amp; doors at affordable prices</p>
                    <p>Certain homeowners may be entitled to a free installation. (eligibility criteria applies)</p><a class="btn btn-primary btn-lg me-2" role="button" href="#check-eligibility">Check Eligibility</a>
                </div>
            </div>
            <div class="col-md-6">
                <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/index-hero-lg.webp"></div>
            </div>
        </div>
    </div>
    <div class="container border rounded border-0 p-4 p-lg-5 py-4 py-xl-5 mb-3" style="background: var(--primary-100);">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Why The Window Support Fund?</h2>
                <p class="w-lg-50">We are set up purely for the purposes of helping homeowners to get those all important improvements to their home. We fund some of the work for you, and in some cases we can even fund the entire project.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-semi-white text-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-thermometer-sun" style="color: var(--primary-50);">
                            <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585A1.5 1.5 0 0 1 5 12.5"></path>
                            <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1m5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5m4.243 1.757a.5.5 0 0 1 0 .707l-.707.708a.5.5 0 1 1-.708-.708l.708-.707a.5.5 0 0 1 .707 0M8 5.5a.5.5 0 0 1 .5-.5 3 3 0 1 1 0 6 .5.5 0 0 1 0-1 2 2 0 0 0 0-4 .5.5 0 0 1-.5-.5M12.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-1a.5.5 0 0 1-.5-.5m-1.172 2.828a.5.5 0 0 1 .708 0l.707.708a.5.5 0 0 1-.707.707l-.708-.707a.5.5 0 0 1 0-.708M8.5 12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Energy Efficient</h4>
                        <p>Save up to 30% on your energy bills when you upgrade to an A+ rated window</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-semi-white text-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clipboard2-heart" style="color: var(--primary-50);">
                            <path d="M10.058.501a.501.501 0 0 0-.5-.501h-2.98c-.276 0-.5.225-.5.501A.499.499 0 0 1 5.582 1a.497.497 0 0 0-.497.497V2a.5.5 0 0 0 .5.5h4.968a.5.5 0 0 0 .5-.5v-.503A.497.497 0 0 0 10.555 1a.499.499 0 0 1-.497-.499"></path>
                            <path d="M3.605 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5h-.5a.5.5 0 0 1 0-1h.5a1.5 1.5 0 0 1 1.5 1.5v12a1.5 1.5 0 0 1-1.5 1.5h-9a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5h.5a.5.5 0 0 1 0 1h-.5Z"></path>
                            <path d="M8.068 6.482c1.656-1.673 5.795 1.254 0 5.018-5.795-3.764-1.656-6.69 0-5.018"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Free Quotations</h4>
                        <p>Our partner network will provide you with a no obligation quotation.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-semi-white text-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-piggy-bank" style="color: var(--primary-50);">
                            <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0m1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962"></path>
                            <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Flexible Payment Plans</h4>
                        <p>As part of the Window Support Fund, you can take advantage of flexible payment methods provided by our partner network.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-semi-white text-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow" style="color: var(--primary-50);">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Increase in home value</h4>
                        <p>You can add value to your home by upgrading to new Windows &amp; Doors</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-semi-white text-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-infinity" style="color: var(--primary-50);">
                            <path d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Unlimited Choice</h4>
                        <p>You are not limited to any particular design styles or ranges. You can quite literally have the Windows you truly desire.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-md bs-icon-rounded bs-icon-semi-white text-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--primary-400);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer2" style="color: var(--primary-50);">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"></path>
                        </svg></div>
                    <div class="px-3">
                        <h4>Fast and simple</h4>
                        <p>Find out within a few minutes how much funding you are eligible for.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="check-eligibility" class="py-5" style="background: var(--secondary-50);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Check eligibility for Window &amp; Door Funding</h2>
                    <p>Find out how much Window &amp; Door Funding you could be entitled to. Simply fill out the form below and one of our friendly team will get in touch with you.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form method="post" enctype="multipart/form-data" action="funding-result" id="funding-application">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h4>About you...</h4>
                                    <p class="form-text">Important: You are required to be the homeowner to submit this form.</p>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="homeowner-checkbox" required="required"><label class="form-check-label" for="homeowner-checkbox">I am a homeowner</label></div>
                                </div>
                                <div class="mb-3"><label class="form-label">Your Name</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                            </svg></span><input class="form-control" type="text" placeholder="Name" autocomplete="name" name="name"></div>
                                </div>
                                <div class="mb-3"><label class="form-label">Email Address</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope-at">
                                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"></path>
                                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"></path>
                                            </svg></span><input class="form-control" type="email" autocomplete="email" placeholder="email@example.com" name="email"></div>
                                </div>
                                <div class="mb-3"><label class="form-label">Phone number</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                            </svg></span><input class="form-control" type="text" placeholder="Your contact number" autocomplete="phone" name="phone"></div>
                                </div>
                                <div class="mb-3"><label class="form-label">Post Code</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin-map">
                                                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"></path>
                                                <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"></path>
                                            </svg></span><input class="form-control" type="text" placeholder="Postcode" autocomplete="post code" name="post-code"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>About your property...</h4>
                                <div class="mb-3"><label class="form-label" for="num-windows">Number of Windows</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info">
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                            </svg></span><select class="form-select" name="num-windows" id="num-windows">
                                            <option value="undefined" selected="">Select number of windows</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                        </select></div>
                                </div>
                                <div class="mb-3"><label class="form-label" for="num-doors">Number of Doors</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info">
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                            </svg></span><select class="form-select" name="num-doors" id="num-doors">
                                            <option value="undefined" selected="">Select number of doors</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                        </select></div>
                                </div>
                                <div class="mb-3"><label class="form-label" for="age">Age of windows &amp; doors (approx)</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info">
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                            </svg></span><select class="form-select" name="age" id="age">
                                            <option value="undefined" selected="">Approximate age</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                            <option value="unsure">Unsure</option>
                                        </select></div>
                                </div>
                                <div><label class="form-label" for="any-other-info">Tell us anything else about your property</label><textarea class="form-control" placeholder="Tell us anything you think we should know..." name="any-other-info"></textarea></div>
                                <p class="form-text">Use the above box to tell us anything relevant about your windows and doors. The more information we have the better.</p>
                            </div>
                        </div><button class="btn btn-primary mb-2 g-recaptcha" type="submit" data-sitekey="<?= $site_key; ?>"
                            data-callback='onSubmit'
                            data-action='submit'>Submit request</button>
                    </form>
                    <p>By submitting your information in this form you are providing persmission for The Window &amp; Door Fund to contact you regarding funding for you windows &amp; doors. We will only pass your information to our partner network with your permission.</p>
                    <p>Free windows and doors are available to select customers upon reviewing their eligibility. Please note, if you are not eligible for fully funded windows and doors, you may be eligible for partial funding through our partner network.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Funded Window Replacements</h1>
                    <p>We provide only the best quality windows for you property. With an A+ rated window you can save money on your energy bill, keep your home warmer and reduce condensation. We have many styles that you can choose from, and you are not limited if you are eligible for our fully funded package either.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card h-100"><img class="img-fluid object-fit-cover card-img-top w-100 d-block card-img-top" src="assets/img/casement-windows.jpg">
                        <div class="card-body">
                            <h4 class="card-title">UPVC Casement Windows</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 align-self-stretch">
                    <div class="card h-100"><img class="img-fluid card-img-top w-100 d-block card-img-top" src="assets/img/window-security.jpg">
                        <div class="card-body">
                            <h4 class="card-title">High Security Locking Systems</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100"><img class="img-fluid object-fit-cover card-img-top w-100 d-block card-img-top" src="assets/img/bay-windows.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Bay Windows</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white bg-primary border rounded border-0 border-primary d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5">
                <div class="pb-2 pb-lg-1 w-75">
                    <h2 class="fw-bold mb-2">Check your eligibility for fully funded windows &amp; doors</h2>
                    <p class="mb-0">Discover if you qualify for fully funded windows and doors! In just a few minutes, you could be one step closer to giving your home a fresh new look.</p>
                </div>
                <div class="d-xl-flex align-items-xl-center"><a class="btn btn-light btn-lg fs-5 py-2 px-4" role="button" href="#check-eligibility">Check eligibility now</a></div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Energy Efficient Doors</h1>
                    <p>We provide only the best quality doors for you property. With an A+ rated door you can save money on your energy bill, keep your home warmer and reduce condensation.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card h-100"><img class="card-img-top w-100 d-block card-img-top" src="assets/img/upvc-door.png">
                        <div class="card-body">
                            <h4 class="card-title">UPVC Doors</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 align-self-stretch">
                    <div class="card h-100"><img class="card-img-top w-100 d-block card-img-top" src="assets/img/pvc-moulded-door.png">
                        <div class="card-body">
                            <h4 class="card-title">UPVC Moulded Doors</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100"><img class="img-fluid object-fit-scale card-img-top w-100 d-block card-img-top" src="assets/img/front-door.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Composite Doors</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: var(--secondary-50);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>What are my options for free windows and doors</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"><img class="rounded img-fluid object-fit-cover" src="assets/img/index-hero-sm.webp" height="100%" style="height: 100%;"></div>
                <div class="col-md-6">
                    <div class="vstack gap-3">
                        <div>
                            <h3>Fully funded windows &amp; Doors</h3>
                            <p>Fill out your details in our form and we will let you know if you qualify for fully funded windows and doors. This option is available certain post code areas and suitable for homeowners that meet our qualifying criteria.&nbsp;</p>
                            <p>The Window Support Fund is committed to helping homeowners that are most in need of having energy efficient Windows and Doors in their home.&nbsp;</p>
                        </div>
                        <hr>
                        <div>
                            <h3>Partial Funding</h3>
                            <p>If you don't qualify for our fully funded package, we can still help you. We have generous discounts available with our partner network of installers. You still have the same great choice of energy efficient windows and doors.&nbsp;</p>
                            <p>With your permission, we will pass your information to one of our approved installers in your area. They will provide you with a no obligation quotation</p>
                        </div>
                        <hr>
                        <div>
                            <h3>The Window Support Fund payment plan</h3>
                            <p>With the Window Support Fund, you also have access to the option of spreading the cost of your home improvements.&nbsp;</p>
                            <p>Our partner network can discuss with you the options that are available.&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white bg-primary border rounded border-0 border-primary d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5">
                <div class="pb-2 pb-lg-1 w-75">
                    <h2 class="fw-bold mb-2">Check your eligibility for fully funded windows &amp; doors</h2>
                    <p class="mb-0">Discover if you qualify for fully funded windows and doors! In just a few minutes, you could be one step closer to giving your home a fresh new look.</p>
                </div>
                <div class="d-xl-flex align-items-xl-center"><a class="btn btn-light btn-lg fs-5 py-2 px-4" role="button" href="#check-eligibility">Check eligibility now</a></div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-4" style="background: var(--primary-100);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-start">What do I need to qualify?</h2>
                    <p class="text-start w-lg-50">We only have some simple criteria to enable you to be considered for the Window Support Fund.</p>
                </div>
                <div class="col-md-6">
                    <ul class="text-start">
                        <li>Employed</li>
                        <li>Self Employed</li>
                        <li>Retired</li>
                        <li>Homeowner, sole or joint</li>
                    </ul>
                    <p class="text-start mb-0">As long as you meet this basic criteria then you can apply.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'inc/Footer.php'; ?>

</body>

</html>