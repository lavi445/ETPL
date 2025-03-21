<?php
// Include a header file if you have one
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pulse</title>
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
            <!-- <a href="index.php" class="navbar-brand p-0"> -->
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
            <!-- </a> -->
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"> -->
                <!-- <span class="fa fa-bars"></span> -->
            <!-- </button> -->
            <!-- <div class="collapse navbar-collapse" id="navbarCollapse"> -->
                <!-- <div class="navbar-nav ms-auto py-0"> -->
                    <!-- <a href="index.php" class="nav-item nav-link">Home</a> -->
                    <!-- <a href="about.php" class="nav-item nav-link">About</a> -->
                    <!-- <a href="service.php" class="nav-item nav-link">Services</a> -->
                    <!-- <a href="package.php" class="nav-item nav-link active">Careers</a> -->
                    <!-- <div class="nav-item dropdown"> -->
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                        <!-- <div class="dropdown-menu m-0"> -->
                            <!-- <a href="destination.php" class="dropdown-item">Destination</a> -->
                            <!-- <a href="booking.php" class="dropdown-item">Booking</a> -->
                            <!-- <a href="team.php" class="dropdown-item">Travel Guides</a> -->
                            <!-- <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
                            <!-- <a href="404.php" class="dropdown-item">404 Page</a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
                <!-- </div> -->
                <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Register</a> -->
            <!-- </div> -->
        <!-- </nav> -->
<!--  -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Careers</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Careers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Job Application Start -->
    <div class="container">
        <h2>Apply for a Job</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="resume">Upload Resume</label>
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            </div>
            
            <div class="form-group">
                <label for="experience">Work Experience (Years)</label>
                <input type="number" id="experience" name="experience" min="0" required>
            </div>
            
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" id="skills" name="skills" placeholder="e.g., JavaScript, Python, AWS">
            </div>
            
            <div class="form-group">
                <label for="cover-letter">Cover Letter</label>
                <textarea id="cover-letter" name="cover-letter" rows="4" placeholder="Write a short cover letter..."></textarea>
            </div>
            
            <button type="submit">Submit Application</button>
        </form>
    </div>
    <!-- Job Application End -->

    <!-- Contact Us Reference Start -->
    <div class="container-fluid py-5 w-100 wow fadeInUp" data-wow-delay="0.1s">
        <div class="booking p-5 text-center text-white position-relative" 
            style="width: 100%; background: url('/img/bg-hero.jpg') no-repeat center center/cover;">
            <div class="overlay" 
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
            <h1 class="text-white mb-4 position-relative">
                Need Help with Charging Stations or Navigation?
            </h1>
            <p class="mb-4 position-relative">
                We’re here to guide you every step of the way. 
                Get in touch with us for assistance!
            </p>
            <a class="btn btn-outline-light py-3 px-5 mt-2 position-relative" href="contact.php">Contact Us</a>
        </div>
    </div>
    <!-- Contact Us Reference End -->

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
