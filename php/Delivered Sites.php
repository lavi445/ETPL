<?php
// Include a header file if you have one
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Delivered Sites - </title>
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
                <!-- <img src="//img/logo.jpg" alt="Logo">  -->
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
                            <!-- <a href="Delivered Sites.php" class="dropdown-item active">Delivered Sites</a> -->
                            <!-- <a href="Process.php" class="dropdown-item">Process</a> -->
                            <!-- <a href="team.php" class="dropdown-item">EV Guides</a> -->
                            <!-- <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
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
                        <h1 class="display-3 text-white animated slideInDown">Delivered Sites</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/php/index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Delivered Sites</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Destination Start -->
    <!-- <div class="container-xxl py-5 destination"> -->
        <!-- <div class="container"> -->
            <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s"> -->
                <!-- <h6 class="section-title bg-white text-center text-primary px-3">Successful Launches</h6> -->
                <!-- <h1 class="mb-5">Delivered Sites</h1> -->
            <!-- </div> -->
            <!-- <div class="row g-3"> -->
                
                <!-- <div class="col-lg-7 col-md-6"> -->
                    <!-- <div class="row g-3"> -->
                        <!-- <div class="col-12 wow zoomIn" data-wow-delay="0.1s"> -->
                            <!-- <a class="position-relative d-block overflow-hidden" href=""> -->
                                <!-- <img class="img-fluid w-100" src="//img/destination-1.jpg" alt="" style="aspect-ratio: 16/9; object-fit: cover;"> -->
                                <!-- <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Mumbai</div> -->
                            <!-- </a> -->
                        <!-- </div> -->
                        <!-- <div class="col-6 wow zoomIn" data-wow-delay="0.3s"> -->
                            <!-- <a class="position-relative d-block overflow-hidden" href=""> -->
                                <!-- <img class="img-fluid w-100" src="//img/destination-2.jpg" alt="" style="aspect-ratio: 4/3; object-fit: cover;"> -->
                                <!-- <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Orissa</div> -->
                            <!-- </a> -->
                        <!-- </div> -->
                        <!-- <div class="col-6 wow zoomIn" data-wow-delay="0.5s"> -->
                            <!-- <a class="position-relative d-block overflow-hidden" href=""> -->
                                <!-- <img class="img-fluid w-100" src="//img/destination-3.jpg" alt="" style="aspect-ratio: 4/3; object-fit: cover;"> -->
                                <!-- <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">West Bengal</div> -->
                            <!-- </a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
<!--  -->
                
                <!-- <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s"> -->
                    <!-- <a class="position-relative d-block h-100 overflow-hidden" href=""> -->
                        <!-- <img class="img-fluid w-100 h-100" src="//img/destination-4.jpg" alt="" style="object-fit: cover; aspect-ratio: 3/4;"> -->
                        <!-- <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indore</div> -->
                    <!-- </a> -->
                <!-- </div> -->
<!--  -->
                
                <!-- <div class="col-lg-6 col-md-8 wow zoomIn" data-wow-delay="0.9s"> -->
                    <!-- <a class="position-relative d-block h-100 overflow-hidden" href=""> -->
                        <!-- <img class="img-fluid w-100 h-100" src="//img/delhi-NCR.jpg" alt="" style="object-fit: cover; aspect-ratio: 4/3;"> -->
                        <!-- <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Delhi-NCR</div> -->
                    <!-- </a> -->
                <!-- </div> -->
<!--  -->
                
                <!-- <div class="col-lg-6 col-md-8 wow zoomIn" data-wow-delay="1.1s"> -->
                    <!-- <a class="position-relative d-block h-100 overflow-hidden" href=""> -->
                        <!-- <img class="img-fluid w-100 h-100" src="//img/goa.jpg" alt="" style="object-fit: cover; aspect-ratio: 4/3;"> -->
                        <!-- <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Goa</div> -->
                    <!-- </a> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- Destination End -->
    <!-- Destination Section -->
<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Successful Launches</h6>
            <h1 class="mb-5" >Delivered Sites</h1>
        </div>

        <!-- Flexbox Layout -->
        <div class="destination-flex">
            <div class="destination-item " index="dest-1">
                <img src="/img/destination-4.jpg" alt="Indore">
                <span class="location-tag" style="color:#8CC63F;">Indore</span>
            </div>
            <div class="destination-item " index="dest-2">
                <img src="/img/destination-2.jpg" alt="Orissa">
                <span class="location-tag" style="color:#8CC63F;">Orissa</span>
            </div>
            <div class="destination-item" index="dest-3">
                <img src="/img/destination-3.jpg" alt="West Bengal">
                <span class="location-tag" style="color:#8CC63F;">West Bengal</span>
            </div>
            <div class="destination-item" index="dest-4">
                <img src="/img/destination-1.jpg" alt="Mumbai">
                <span class="location-tag" style="color:#8CC63F;">Mumbai</span>
            </div>
            <div class="destination-item" index="dest-5">
                <img src="/img/delhi-NCR.jpg" alt="delhi-NCR">
                <span class="location-tag" style="color:#8CC63F;">Delhi-NCR</span>
            </div>
            <div class="destination-item" index="dest-6">
                <img src="/img/goa.jpg" alt="Goa">
                <span class="location-tag" style="color:#8CC63F;">Goa</span>
            </div>
        </div>
    </div>
</div>

<!-- Styling -->
<style>
/* Flexbox Layout */
.destination-flex {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

/* Image container */
.destination-item {
    position: relative;
    width: calc(50% - 10px); /* Ensures 2 images per row */
    max-width: 350px;
    border-radius: 10px;
    overflow: hidden;
}

/* Image styling */
.destination-item img {
    width: 100%;
    height: 200px; /* Fixed height to maintain consistency */
    object-fit: cover;
    border-radius: 10px;
}
.destination-item img:hover {
    transform: scale(1.1); /* Slightly enlarges the image on hover */
    transition: transform 0.3s ease-in-out; /* Smooth transition effect */
}
/* Location tag */
.location-tag {
    position: absolute;
    bottom: 5px;
    right: 5px;
    background: white;
    padding: 5px 10px;
    font-weight: bold;
    border-radius: 5px;
}

/* Responsive - Single Column */
@media (max-width: 768px) {
    .destination-item {
        width: 100%; /* Full width on smaller screens */
    }

    .destination-item img {
        height: auto; /* Adjust height automatically */
    }
}
</style>

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
