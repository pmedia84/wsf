<?php
$page_title = 'Window and Door funding application - The Window Support Fund';
$meta_description = "Get up to 100% discount on new Windows &amp; Doors with The Window Support Fund. Find out how much funding you could be entitled to. Simply fill out the form, and one of our friendly team will get in touch with you.";
$page_url = '/';
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
    <?php include 'inc/Head.php';  ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $site_key; ?>" async="false"></script>
    <script>
        function onSubmit(token) {
            //check if homeowner checkbox is checked
            if (!document.getElementById("homeowner-checkbox").checked) {
                alert("You must tell us if you are homeowner.");
                return;
            }
            document.getElementById("funding-application").submit();
        }
    </script>
</head>

<body>
    <?php include 'inc/Nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Window &amp; Door funding application</h1>
                <p>Find out what level of funding you are eligible for. Simply fill out the form below and one of our friendly team will be in touch with you to discuss your options further.</p>
            </div>
        </div>
    </div>
    <section id="check-eligiblity" class="py-5" style="background: var(--secondary-50);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" enctype="multipart/form-data" action="funding-result" id="funding-application">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h4>About you...</h4>
                                    <p class="form-text">Important: You are required to be the homeowner to submit this form.</p>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="homeowner-checkbox" name="homeowner-checkbox" required="required" value="homeowner"><label class="form-check-label" for="homeowner-checkbox">I am a homeowner</label></div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="first_name">First name</label>
                                        <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                                </svg></span><input class="form-control" type="text" placeholder="First Name" autocomplete="given-name" name="first_name" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="surname">Last name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                                </svg></span><input class="form-control" type="text" placeholder="Surname" autocomplete="family-name" name="surname" id="surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3"><label class="form-label">Email Address</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope-at">
                                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"></path>
                                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"></path>
                                            </svg></span><input class="form-control" type="email" autocomplete="email" placeholder="email@example.com" name="email" required></div>
                                </div>
                                <div class="mb-3"><label class="form-label">Phone number</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                            </svg></span><input class="form-control" type="text" placeholder="Your contact number" autocomplete="phone" name="phone" required></div>
                                </div>
                                <div class="mb-3"><label class="form-label">Post Code</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin-map">
                                                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"></path>
                                                <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"></path>
                                            </svg></span><input class="form-control" type="text" placeholder="Postcode" autocomplete="post code" name="post-code" required></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>About your property...</h4>
                                <div class="mb-3"><label class="form-label">Number of Windows</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info">
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                            </svg></span><select class="form-select" name="windows_num">
                                            <option value="0" selected="">Select number of windows</option>
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
                                <div class="mb-3"><label class="form-label">Number of Doors</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info">
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                            </svg></span><select class="form-select" name="doors_num">
                                            <option value="0" selected="">Select number of doors</option>
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
                                <div class="mb-3"><label class="form-label">Age of windows &amp; doors (approx)</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info">
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"></path>
                                            </svg></span><select class="form-select" name="age">
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
                                <div><label class="form-label" for="leads_notes">Tell us anything else about your property</label><textarea class="form-control" placeholder="Tell us anything you think we should know..." name="leads_notes"></textarea></div>
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
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h3>Why the Window Support Fund</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>Fast assessment</span></li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>You could get up to 100% fully funded windows and doors</span></li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>Save money on your energy bill</span></li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>Make your home more comfortable and warm</span></li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>Industry funded. No affiliation to any UK Government schemes</span></li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>No obligation quotation service</span></li>
                        <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-all fs-4 text-primary me-1">
                                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                            </svg><span>Only the best quality Windows &amp; Doors</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>What do I need to qualify for free windows &amp; doors?</h3>
                    <p>We have a very simple criteria to qualify for free windows and doors.&nbsp;</p>
                    <ul>
                        <li>Be a homeowner</li>
                        <li>Employed</li>
                        <li>Self employed</li>
                        <li>Retired</li>
                    </ul>
                    <p>To qualify for our fully funded package, homeowners will need to meet the qualifying criteria, this can depend on a number of factors. Such as, postcode area that we are working in, certain benefits and a homeowners personal circumstances (other qualifying criteria will apply, at our discretion). We are an industry back fund and our aim is to help homeowners most in need of replacement windows &amp; doors. Fully funded windows and doors are provided on a first come first served basis.&nbsp;&nbsp;</p>
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
                <p>We will only pass your details onto one of our partner netwrok if you give us permission. Your local partner will visit you and go through all the options available to help you transform your home.</p>
                <p>All quotations are no obligation.</p>
            </div>
        </div>
    </div>
    <?php include 'inc/Footer.php'; ?>
</body>

</html>