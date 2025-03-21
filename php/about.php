<?php
// Include a header file if you have one
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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

    <!-- Topbar Start -->
    <!-- Uncomment and use PHP to dynamically generate content if needed -->
    <!--
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Prakrati Corporate Building 18/2, Yashwant Niwas Road, Indore – 452 001</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 97116 87305</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>etplmanager@etplnetworks.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/ekta-telecommunication/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/etplnetworks?igsh=MnNndXh4cmlzbWR4"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background-color: #ffffff;">
            <a href="" class="navbar-brand p-0" style="display: flex; gap:5px;"> 
                <img src="/img/logo.jpg" alt="Logo"> 
                <!--<h1 class="text-primary m-0"><!--<i class="fa fa-map-marker-alt me-3"></i>Pulse</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About Us</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="package.php" class="nav-item nav-link">Careers</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="Delivered Sites.php" class="dropdown-item">Delivered Sites</a>
                            <a href="Process.php" class="dropdown-item">Process</a>
                            <a href="team.php" class="dropdown-item">EV Guides</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <!--<a href="contact.php" class="nav-item nav-link">Contact</a>-->
                </div>
                <a href="contact.php" class="btn btn-primary rounded-pill py-2 px-4">Contact Us</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">ETPL Networks</span></h1>
                    <p class="mb-4" style="color:#000000;">
                        In a world where mobility is rapidly evolving, ETPL Networks is at the forefront of the green energy revolution, providing seamless EV charging solutions that redefine the way we travel. With deep-rooted expertise in telecom and cutting-edge technology, we've transformed our legacy of innovation into a robust, future-ready EV charging network. Our goal? To make electric mobility effortless, accessible, and cost-effective for all.
                    </p>
                    <p class="mb-4" style="color:#000000;">
                        As the demand for EVs surges, our smart charging infrastructure ensures that drivers always have a reliable, fast, and efficient charging experience. We believe in quality, flexibility, and customer-first solutions, offering a seamless blend of next-gen technology and strategic planning to meet the evolving needs of the industry.
                    </p>
                    <p class="mb-4" style="color:#000000;">
                        At ETPL Networks, we don’t just provide charging stations—we power the journey towards a cleaner, greener tomorrow. Join us in electrifying the future!
                    </p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i>Experienced Workforce</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i>Visionary Management</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i>Safety First</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i>ISO 9001:2015 Quality Management System</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i>ISO 18001:2007 OHS Management System</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission, Vision, and Values Section -->
            <div class="container-fluid py-5" style="background: url('img/ev-infra-bg.jpg') no-repeat center center/cover; position: relative;">
                <div style="background: rgba(255, 255, 255, 0.8); padding: 40px; border-radius: 10px;">
                    
                    <!-- Our Vision Section -->
                    <div class="row align-items-center flex-lg-row-reverse" style="margin-bottom: 130px; margin-top: 10px;">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <img src="img/package-2.jpg" class="img-fluid rounded shadow" alt="Our Vision" style="width: 500px; height: 300px; border-radius:30px;">
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <h3 class="text-primary"><i class="fa fa-eye text-primary me-2"></i> Our Vision</h3>
                            <p class="text-dark" style="text-align:justify;">In an era of rapid technological evolution and growing demand for sustainable solutions, Ekta is uniquely positioned to lead the charge in the Electric Vehicle (EV) infrastructure space. With a deep understanding of both legacy systems and next-generation technologies, we are committed to transforming the EV landscape. Our vision is to provide innovative, scalable, and reliable EV infrastructure solutions that support the global transition to clean energy and smarter mobility.
                                By leveraging our expertise in telecom and technology, we deliver flexible and cost-effective EV charging solutions that empower our clients to meet the needs of tomorrow.Through a robust, proven delivery model, we ensure that our clients receive solutions that are on time, within budget, and tailored to their unique requirements.
                                Ekta’s commitment to innovation, sustainability, and global collaboration will continue to drive the future of EV infrastructure, helping create smarter, greener cities and contributing to a sustainable planet for future generations.</p>
                        </div>
                    </div>

                    <!-- Our Mission Section -->
                    <div  class="row align-items-center mb-5" style="margin-bottom: 130px; margin-top: 10px;">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <img src="img/bg-hero.jpg" class="img-fluid rounded shadow" alt="Our Mission" style="width: 500px; height: 300px; border-radius:30px;">
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <h3 class="text-primary"><i class="fa fa-flag text-primary me-2"></i> Our Mission</h3>
                            <p class="text-dark" style="text-align: justify;">At Ekta, our mission is to accelerate the adoption of electric vehicles by providing cutting-edge, sustainable EV infrastructure solutions that cater to the evolving needs of businesses and consumers. We are dedicated to building a seamless, efficient, and accessible charging network that supports the global transition to cleaner, greener energy.
                                Leveraging our deep industry knowledge, advanced technologies, and flexible delivery models, we strive to make EV charging more reliable, cost-effective, and convenient for all. Our focus is on driving innovation, fostering partnerships, and ensuring that every solution we deliver is in line with the highest standards of quality, sustainability, and operational excellence.
                                By empowering our clients with tailored EV infrastructure solutions, we aim to create a future where clean energy and smart mobility are accessible to everyone, contributing to a healthier planet for generations to come.</p>
                        </div>
                    </div>

                    <!-- Our Values Section -->
                    <h3 class="text-primary text-center mt-5 wow fadeInUp"><i class="fa fa-heart text-primary me-2"></i> Our Values</h3>
                    <ul class="list-unstyled text-center wow fadeInUp" >
                        <li class="text-dark"><i class="fa fa-lightbulb text-primary"></i> Pro-active Problem Solving</li>
                        <li class="text-dark"><i class="fa fa-tools text-primary"></i> Quality Workmanship</li>
                        <li class="text-dark"><i class="fa fa-users text-primary"></i> Customer-Centric Approach</li>
                        <li class="text-dark"><i class="fa fa-leaf text-primary"></i> Supporting Net Zero Goal</li>
                        <li class="text-dark"><i class="fa fa-bolt text-primary"></i> Renewable Integration</li>
                        <li class="text-dark"><i class="fa fa-handshake text-primary"></i> Strategic Partnership</li>
                        <li class="text-dark"><i class="fa fa-globe text-primary"></i> Building a Smarter, Greener Tomorrow</li>
                    </ul>

                </div>
            </div>

            <!-- Partners Section Start -->
            <div class="container text-center py-5">
                <h3 class="text-primary mb-4 wow fadeInUp">Our Reputed Clientele</h3>
                <div class="honeycomb">
                    <div class="hex"><img src="img/vodaphone.png" alt="Vodafone"></div>
                    <div class="hex"><img src="img/jio bp.png" alt="Jio BP"></div>
                    <div class="hex"><img src="img/image-removebg-preview (1).png" alt="Ceragon"></div>
                    <div class="hex"><img src="img/erricson.png" alt="Ericsson"></div>

                    <div class="hex spacer"></div> <!-- Empty Spacer to shift second row -->
                    
                    <div class="hex"><img src="img/taata.png" alt="Tata"></div>
                    <div class="hex"><img src="img/nokia.png" alt="Nokia"></div>
                    <div class="hex"><img src="img/airtel.png" alt="Airtel"></div>
                    <div class="hex"><img src="img/samsung.png" alt="Samsung"></div>
                </div>
            </div>
            <!-- Partners Section End -->

            <style>
            /* Honeycomb Grid Container */
            .honeycomb {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                width: 80%;
                margin:auto;
                gap: 10px;
                position: relative;
            }

            /* Hexagon Shape */
            .hex {
                width: 200px;
                height: 210px;
                background-color: transparent; /* Light blue */
                display: flex;
                align-items: center;
                justify-content: center;
                clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            /* Logo Styling */
            .hex img {
                max-width: 80%;
                max-height: 70%;
            }

            /* Hover Animation */
            .hex:hover {
                transform: scale(1.1);
                box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            }

            /* Honeycomb Row Alignment */
            .hex:nth-child(5) {
                margin-left: 105px; /* Push second row logos to align in honeycomb */
            }

            .spacer {
                width: 10px; /* Creates spacing for proper honeycomb structure */
                height: 88px;
                visibility: hidden;
            }
            /* General Mobile Adjustments */
            @media (max-width: 768px) {
                .col-lg-6 img{
                    margin-bottom: 40px;
                    height:200px;
                    width: 400px;
                }
            
                /* Partners Section */
                .honeycomb {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 10px;
                }

                .hex {
                    width: 80px;
                    height: 80px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: rgba(255, 255, 255, 0.8);
                    border-radius: 10px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                .hex img {
                    width: 60px;
                    height: auto;
                }

                .spacer {
                    display: none; /* Hide spacer for mobile */
                }
                .our-values h3 {
                    font-size: 22px; /* Adjust heading size for mobile */
                    margin-top: 20px; /* Reduce top margin */
                }

                .our-values ul {
                    padding-left: 0; /* Remove unwanted left padding */
                    text-align: center; /* Center align for better readability */
                }

                .our-values li {
                    font-size: 14px; /* Adjust font size for better visibility */
                    margin-bottom: 10px; /* Reduce space between list items */
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .our-values li i {
                    margin-right: 8px; /* Space between icon and text */
                    font-size: 16px; /* Adjust icon size */
                }
            }

            </style>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-8 wow fadeIn" data-wow-delay="0.1s" >
        <div class="container py-5" >
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="privacy&policy.php">Privacy Policy</a>
                    <a class="btn btn-link" href="term&conditon.php">Terms & Condition</a>
                    <a class="btn btn-link" href="FAQ&Help.php">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Prakrati Corporate Building 18/2, Yashwant Niwas Road, Indore – 452 001</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 97116 87305 </p>
                    <p class="mb-2" style="font-size: 15px;"><i class="fa fa-envelope me-3"></i>etplmanager@etplnetworks.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/ekta-telecommunication/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Insight</h4>
                <p>Curious to explore more about us? We'd love to connect!</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>-->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">ETPL Networks</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://etplnetworks.com/">ETPL</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            <a href="cookies.php">Cookies</a>
                            <a href="FAQ&Help.php">Help</a>
                            <a href="FAQ&Help.php">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
