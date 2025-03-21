<?php
// Include a header file if you have one
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Testimonials - </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <!-- <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background-color: #ffffff;"> -->
            <!-- <a href="index.php" class="navbar-brand p-0" style="display: flex; gap:5px;">  -->
                <!-- <img src="/img/logo.jpg" alt="Logo">  -->
            <!-- </a> -->
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"> -->
                <!-- <span class="fa fa-bars"></span> -->
            <!-- </button> -->
            <!-- <div class="collapse navbar-collapse" id="navbarCollapse"> -->
                <!-- <div class="navbar-nav ms-auto py-0"> -->
                    <!-- <a href="index.php" class="nav-item nav-link">Home</a> -->
                    <!-- <a href="about.php" class="nav-item nav-link">About Us</a> -->
                    <!-- <a href="service.php" class="nav-item nav-link">Services</a> -->
                    <!-- <a href="package.php" class="nav-item nav-link">Careers</a> -->
                    <!-- <div class="nav-item dropdown"> -->
                        <!-- <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a> -->
                        <!-- <div class="dropdown-menu m-0"> -->
                            <!-- <a href="Delivered Sites.php" class="dropdown-item">Delivered Sites</a> -->
                            <!-- <a href="Process.php" class="dropdown-item">Process</a> -->
                            <!-- <a href="team.php" class="dropdown-item">EV Guides</a> -->
                            <!-- <a href="testimonial.php" class="dropdown-item active">Testimonial</a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <a href="contact.php" class="btn btn-primary rounded-pill py-2 px-4">Contact Us</a> -->
            <!-- </div> -->
        <!-- </nav> -->

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Testimonial</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0" style="color:#000000;">The EV charging stations have been a game-changer for our fleet operations. Reliable, efficient, and easy to use—exactly what we needed to meet our sustainability goals.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0" style="color:#000000;">Installing EV charging stations at my commercial property has significantly increased foot traffic and customer satisfaction. It's an investment that pays off for both the environment and my business.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0" style="color:#000000;">I’ve tried multiple charging stations, but these stand out for their speed and convenience. The seamless experience keeps me coming back every time I’m on the road.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0" style="color:#000000;">Integrating EV charging stations into our residential complex has been a huge success. Residents appreciate the convenience, and it's a step forward in creating a greener community.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php
    // Include a footer file if you have one
    include 'footer.php';
    ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/easing.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/moment-timezone.min.js"></script>
    <script src="/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
