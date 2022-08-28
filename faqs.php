<?php

include 'config.php';
include 'nav_bar.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>E-Tour</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>

    <!-- FAQs START -->
    <div class="container mb-5 pb-5 pt-5" style="margin-top: 75px;">
        <div>
            <div class="mb-5 pb-3 text-center">
                <h1 class="fw-bold">Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">When and where does
                            the tour
                            end?</span>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Your tour will conclude in San Francisco on Day 8 of the
                        trip. There are no activities planned for this day so you're free to depart at any time. We
                        highly recommend booking post-accommodation to give yourself time to fully experience the
                        wonders of this iconic city!</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">Do you arrange airport
                            transfers?</span>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Airport transfers are not included in the price of this
                        tour, however you can book for an arrival transfer in advance. In this case a tour operator
                        representative will be at the airport to greet you. To arrange this please contact our customer
                        service team once you have a confirmed booking.</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">When and where does
                            the tour
                            end?</span>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Your tour will conclude in San Francisco on Day 8 of the
                        trip. There are no activities planned for this day so you're free to depart at any time. We
                        highly recommend booking post-accommodation to give yourself time to fully experience the
                        wonders of this iconic city!</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">Do you arrange airport
                            transfers?</span>
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Airport transfers are not included in the price of this
                        tour, however you can book for an arrival transfer in advance. In this case a tour operator
                        representative will be at the airport to greet you. To arrange this please contact our customer
                        service team once you have a confirmed booking.</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">When and where does
                            the tour
                            end?</span>
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Your tour will conclude in San Francisco on Day 8 of the
                        trip. There are no activities planned for this day so you're free to depart at any time. We
                        highly recommend booking post-accommodation to give yourself time to fully experience the
                        wonders of this iconic city!</div>
                </div>
            </div>

        </div>
    </div>
    <!-- FAQs END -->

    <!-- footer START -->
    <section class="container-fluid bg-light py-5 px-5">
        <div class="d-md-flex justify-content-around">
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Support</h5>
                <p class="text-muted mb-2">Help Center</p>
                <p class="text-muted mb-2">Our COVID-19 Response</p>
                <p class="text-muted mb-2">Cancellation options</p>
                <p class="text-muted mb-2">Safety information</p>
            </div>
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Company</h5>
                <p class="text-muted mb-2">About us</p>
                <p class="text-muted mb-2">Community Blog</p>
                <p class="text-muted mb-2">Careers</p>
                <p class="text-muted mb-2">Privacy policy</p>
                <p class="text-muted mb-2">Terms of service</p>
            </div>
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Contact</h5>
                <p class="text-muted mb-2">Partnerships</p>
                <p class="text-muted mb-2">FAQ</p>
                <p class="text-muted mb-2">Get in touch</p>
            </div>
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Socials</h5>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-twitter"></i></a>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-instagram"></i></a>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-facebook"></i></a>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>

        <div class="d-flex justify-content-center pt-5">
            <p class="text-muted">Copyright &copy;2022 E-Tours & Travels LLC. Designed by <span class="text-danger">Md.
                    Azmain
                    Mahtab & Shiful Islam Piash.</span></p>
        </div>

    </section>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>