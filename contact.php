<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <?php
    $page_title='Contact Us - The Window Support Fund';
    include 'inc/Head.php';
    ?>
</head>

<body>
    <?php include 'inc/Nav.php'; ?>
    <div class="container hero">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-sm-start justify-content-md-start align-items-md-center justify-content-lg-center">
                <div style="max-width: 450px;">
                    <h1 class="text-uppercase">Contact us</h1>
                    <p class="lead my-3">Got a question about the Window Support Fund or anything regarding your funding?</p>
                </div>
            </div>
            <div class="col-md-6">
                <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/index-hero-lg.webp"></div>
            </div>
        </div>
    </div>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row mb-5">
                <div class="col-md-12 mx-auto">
                    <h2>Contact us</h2>
                    <p class="w-lg-50">Got a question about the Window Support Fund or anything regarding your funding?</p>
                    <p>Get in touch with us via the contact details, or fill out the contact form.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0">+123456789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0">info@windowsupportfund.uk</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <form class="p-3 p-xl-4" data-bss-recipient="30c5b21724b394686aedbeed6f523383">
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                            <div><button class="btn btn-primary d-block w-100" type="submit">Send message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'inc/Footer.php'; ?>
    <script src="assets/js/smart-forms.min.js"></script>
</body>

</html>