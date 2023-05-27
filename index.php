<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dafy Online pvt.lmt.</title>
    <link rel="icon" type="image/x-icon" href="img/logo/loader.png" >
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/booking.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 
        vh-100 top-50 start-50 d-flex align-items-center justify-content-center" data-delay="100s">
                    <span></span>
    </div>
    <!-- Spinner End -->
    
   
    <!------------------------------------ Navbar Start sticky-top -------------------------------------------------------->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top w-100" id="navbar" style="height:90px;">
            <a href="#" class="navbar-brand d-flex align-items-center py-1 px-1 p-3 m-0">
                <img src="img/logo/dafy.jpeg" style="height:70px; object-items:fit;" alt="icon" srcset="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-link" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#head" class="nav-item nav-link active">Home</a>
                
                            <!-- Drop down menu start-->
                     <div class="nav-item dropdown">
                         <a href="#service" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="#service" class="dropdown-item">Chauffeur Service</a>
                             <a href="#service" class="dropdown-item">Hospital Assistance</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Join Us</a>
                        <div class="dropdown-menu fade-up m-0 p-0">
                            <a href="#" class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#book5">Join as Driver Partner</a>
                            <!--a href="#" class="dropdown-item">Join as Business Partner</a-->
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="#team" class="dropdown-item">Our Team</a>
                            <a href="#contact-detail" class="dropdown-item">Contact Us</a>
                            <a href="#expert" class="dropdown-item">Our Expert Help</a>
                            <a href="#testimonial" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                
                    <div class="ms-auto d-none d-lg-block col-sm-4 text-start">
                    <a href="https://play.google.com/store/apps/details?id=com.dafy" 
                    class="btn btn-warning rounded-pill py-3 px-3"> <b> Download App</b></a>
                </div>
            </div>
            </div>
        </nav>
   
    <!-------------------------------------- Navbar End ---------------------------------------->
    <!----------------------------- slider Start ------------------------------------------------>
   
        <section id="head"><br><br>    
            <div class="container-fluid px-0 mb-2">
                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner"style="background:black;width:100%;">
                        <div class="carousel-item active">
                            <img src="img/slider/welcome-to-dafy1.png" alt="Image" class="w-50"style="height: 500px;" >
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row  justify-content-end">
                                        <div class="col-lg-7 text-end col-8">
                                        
                                                <p class="fs-4 text-white animated slideInDown"style="font-family: 'Lato', sans-serif; font-size:35px;" >Welcome to
                                                    
                                                <strong>DAFY</strong>
                                                </p> 
                                                <h1 class=" text-white mb-3 animated slideInLeft" style="font-family: 'Lato', sans-serif; font-size:70px;">
                                                    Most reliable and <br> economical driver on demand
                                                </h1>
                                                    <a href="#book2" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown"
                                                    data-bs-toggle="modal" data-bs-target="#book2"
                                                    >Book Now</a>
                                                <a href="#round" data-bs-target="#tab-pane-3"
                                                    class="btn btn-warning rounded-pill py-3 px-5 animated slideInUp">Read
                                                    More</a>
                                            
                                        </div>
                                            <!--div class="col-lg-5 d-none d-lg-flex animated zoomInDown">
                                                <img class="img-fluid"  src="img/slider/b3.png" height="100px" alt="">
                                            </div-->
                                    </div>
                                </div>
                            </div>
                        </div>

                                    <div class="carousel-item">
                                    <img src="img/slider/your-car-our-driver.jpg" alt="Image" class="w-50"style="height: 500px;">
                                <div class="carousel-caption ">
                                    <div class="container">
                                        <div class="row  justify-content-end">
                                            <div class="col-lg-7 text-end col-8" >
                                                <!--p class="fs-4 text-white animated slideInDown">Welcome to
                                                    <strong>DAFY</strong>
                                                </p--> 
                                                <h1 class=" text-white mb-2 animated slideInLeft"style="font-family: 'Lato', sans-serif; font-size:70px;">
                                                    Verified & Trained <br>drivers for your car
                                                </h1>
                                                    <a href="#book2" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown"
                                                    data-bs-toggle="modal" data-bs-target="#book2"
                                                    >Book Now</a>
                                                <a href="#round" data-bs-target="#tab-pane-3"
                                                    class="btn btn-warning rounded-pill py-3 px-5 animated slideInUp">Read
                                                    More</a>
                                            </div>
                                            <!--div class="col-lg-5 d-none d-lg-flex animated zoomInDown">
                                                <img class="img-fluid"  src="img/slider/b3.png" height="100px" alt="">
                                            </div-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item" >
                            <img src="img/slider/navigation.jpg" alt="Image" class="w-50"style="height: 500px;">
                            <div class="carousel-caption">
                            <div class="container">
                                <div class="row  justify-content-end">

                                    <div class="col-lg-7 text-end col-10">
                                        <!--p class="fs-4 text-white animated slideInDown">Welcome to <strong>Professional Drivers</strong>
                                        </p-->

                                    
                                        <h1 class=" text-white mb-5 animated slideInUp"style="font-family: 'Lato', sans-serif; font-size:70px;">
                                        Hire a Driver </h1>
                                        <h2 class=" text-white mb-5 animated slideInUp"style="font-family: 'Lato', sans-serif; font-size:68px;"> 
                                            Anytime , anywhere! </h2>

                                        <a href="#book1" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown"
                                        data-bs-toggle="modal" data-bs-target="#book1"
                                        >Book Now</a>
                                        <a  class="btn btn-warning rounded-pill  py-3 px-5 animated slideInUp"
                                        href="tel:917592933933">Call Now</a>
                                    </div>

                                    <!--div class="col-lg-5 d-none d-lg-flex animated zoomInRight">
                                        <img class="img-fluid img2"  src="img/slider/b2.png" height="100px" alt="">
                                    </div-->
                                </div>
                            </div>
                            </div>
                            </div>
                                    <div class="carousel-item " >
                                        <img  src="img/slider/luxury-car3.png" alt="Image"class="w-50"style="height: 500px;">
                                        <div class="carousel-caption">
                                            <div class="container">
                                            <div class="row justify-content-end">
                                
                                                <div class="col-lg-7 text-end col-10">

                                                
                                                    <!--p class="fs-4 text-white mb-5 animated slideInRight " style="font-family: 'Lato', sans-serif;font-size:32px;">
                                                    Do Dafy </p-->
                                                    <h3 class=" text-white mb-5 animated slideInRight" style="font-family: 'Lato', sans-serif;font-size:60px;">
                                                        Do DAFY <br><h5  class="text-white mb-5 animated slideInRight"style="font-family: 'Lato', sans-serif;font-size:62px;">
                                                    Get your private driver now</h5>
                                                </h3>
                                                    <!--
                                                    <h1 class="display-1 text-white mb-4 animated slideInRight">
                                                        Do Dafy & Get Your Driver Now</h1>
                                                        -->       
                                                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown"
                                                    data-bs-toggle="modal" data-bs-target="#book1"
                                                    >Book Now</a>
                                                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown">Read
                                                    More</a>
                                                    </div>
                                                    <!--div class="col-lg-5 d-none d-lg-flex animated zoomInUp">
                                                <img class="img-fluid"  src="img/slider/b1.webp" height="100px" alt="">
                                            </div-->
                                        </div>
                                </div>
                            </div>
                            </div>

                            <div class="carousel-item" >
                                <img src="img/slider/Dafy-Banner-03.png" alt="Image"class="w-50"style="height: 500px;">
                                <div class="carousel-caption">
                                    <div class="container">
                                        <div class="row  justify-content-end">
                                            <div class="col-lg-7 text-end col-10">
                                                <!--p class="fs-4 text-white animated slideInDown">Welcome to
                                                    <strong>Round34 Trip Service</strong0>
                                                </p--> 
                                                <h1 class=" text-white mb-4 animated slideInLeft" style="font-family: 'Lato', sans-serif;font-size:65px;">
                                                    Affordable Rides Premimum Experience
                                                </h1>
                                                    <a href="#book2" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown"
                                                    data-bs-toggle="modal" data-bs-target="#book2"
                                                    >Book Now</a>
                                                <a href="#round" data-bs-target="#tab-pane-3"
                                                    class="btn btn-warning rounded-pill py-3 px-5 animated slideInUp">Read
                                                    More</a>
                                            </div>
                                            <!--div class="col-lg-5 d-none d-lg-flex animated zoomInDown">
                                                <img class="img-fluid"  src="img/slider/b3.png" height="100px" alt="">
                                            </div-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Additional Slider start-->
                            <div class="carousel-item" >
                                <img src="img/slider/stan.jpg" alt="Image" class="w-50"style="height: 500px;">
                                <div class="carousel-caption">
                                    <div class="container">
                                        <div class="row  justify-content-end">
                                            <div class="col-lg-7 text-end col-10">
                                                <!--p class="fs-4 text-white animated slideInDown">Welcome to
                                                    <strong>Round Trip Service</strong>
                                                </p--> 
                                                <h1 class=" text-white mb-4 animated slideInLeft" style="font-family: 'Lato', sans-serif;font-size:70px;">

                                                Hassle Free Rides <br> <span class="text-warning rounded-pill animated slideInUp">₹ 299*</span>
                                                </h1>
                                                    <a href="#book2" class="btn btn-warning rounded-pill py-3 px-5 animated slideInDown"
                                                    data-bs-toggle="modal" data-bs-target="#book2"
                                                    >Book Now</a>
                                                <a href="#round" data-bs-target="#tab-pane-3"
                                                    class="btn btn-warning rounded-pill py-3 px-5 animated slideInUp">Read
                                                    More</a>
                                            </div>
                                            <!--div class="col-lg-5 d-none d-lg-flex animated zoomInDown">
                                                <img class="img-fluid"  src="img/slider/b3.png" height="100px" alt="">
                                            </div-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="carousel-item" >
                                    <img  src="img/slider/8.png" alt="Image" class="w-50"style="height: 500px;">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row justify-content-end">
                                                <div class="col-lg-7 text-end col-10" >
                                                    <!--p class="fs-4 text-white animated slideInLeft">Welcome to <strong>Hospital Assistance</strong>
                                                    </p-->
                                                    <h1 class=" text-white mb-5 animated slideInLeft" style="font-family: 'Lato', sans-serif;font-size:68px;">
                                                    Hospital Emergencies</h1>
                                                
                                                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                                                    <a  class="btn btn-warning rounded-pill  py-3 px-5 animated slideInUp"
                                                    href="tel:917592933933">Call Now</a>
                                                </div>
                                                <!--div class="col-lg-5 d-none d-lg-flex animated zoomInDown">
                                                    <img class="img-fluid"  src="img/slider/b4.png" height="100px" alt="">
                                                </div-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                <!-- Additional Slider End-->



                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            <!-- Carousel End -->
        </section>
    <!--------------------------------------------------  Slider End       ----------------------------------->

    <!--------------------------------------------------  Service intro start -------------------------------------->
        <section id="service"><br><br>
                <div class="container-xxl py-4">
                        <div class="container align-items-centre" >
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 500px;">

                                    <h1 class="display-3 mb-5">Our Services</h1>
                        </div>
                        <div class="row g-5 align-items-centre">
                        <div class="col-lg-5 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item position-relative">
                            <div class="service-text rounded ">
                                <div class="btn-square bg-none rounded-circle mx-auto mb-4"
                                    style="width: 320px; height: 240px;">
                                    <img class="img-fluid" src="img/icon/wheels2.png" alt="Icon">
                                </div>
                                <h5 class="mb-3">Professional Drivers</h4>
                                        <div class="container w-90 " style="height:310px;">
                                            <ul >
                                                <li><p>
                                                    Hire the professionals,Experience a smooth and stress-free journey. </p></li>
                                                    <li><p >
                                                    Forget about the hassle of navigating unfamiliar roads or finding parking spaces.</p></li>
                                                    <li><p>
                                                    Well take care of everything, from pick-up todrop-off,ensuring you arrive at 
                                                    your destination on time and in style.</p></li>
                                                    <li><p>
                                                    our experienced drivers are here to provide a comfortable and supportive environment during their hospitalization.
                                                </p> </li>
                                            </ul>
                                            <style>
                                    ul {
                                            display: block;
                                            list-style-type: none;
                                            margin-block-start:0px;
                                            margin-block-end: 0px;
                                            margin-inline-start: 10px;
                                            margin-inline-end: 10px;
                                            padding-inline-start: 0px;
                                        
                                            
                                        }
                                        li{
                                            justify-content:center;
                                        }
                                    
                                </style>
                                    </div>
                                </div>
                            <div class="service-btn w-90 bg-dark">
                                
                            <b><h5>
                                <a class="text-primary fw-medium" href=""
                                data-bs-toggle="modal" data-bs-target="#book1">Book Now
                                    <i class="bi bi-chevron-double-right ms-2"></i></a></h5></b>
                            </div>
                        </div>
                        </div>
                    
                        <div class="col-lg-5 col-md-4  wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item position-relative">
                                <div class="service-text rounded p-6">
                                    <div class="btn-square  rounded-circle mx-auto mb-4"
                                        style="width: 320px; height: 240px;">
                                        <img class="img-fluid" src="img/png/assistance.png" alt="Icon">
                                    </div>
                                    <h5 class="mb-3">Hospital Assistance</h4>
                                    <div class="container w-90 " style="height:310px;">
                                            <ul >
                                                <li><p>
                                                    Our driver assistants also act as an assistant who provides support for personal care.</p></li><li>
                                                <p >
                                                the functions within the hospital which carry out much of the ground work. </p></li><li>
                                                <p >
                                                Our user-friendly platform makes booking as well as taking them for the tests,helping 
                                                them with administrative tasks like paying bills.</p></li><li>
                                                    <p>
                                                    Taking the assessments we give the reports to the person.</p></li>
                                            </ul>
                                    </div>
                                </div>
                            <div class="service-btn rounded-0 rounded-bottom bg-dark p-6"><b><h5>
                                <a class="text-primary fw-medium" href="" 
                                data-bs-toggle="modal" data-bs-target="#book3">Book Now
                                <i class="bi bi-chevron-double-right ms-2"></i></a></h5></b>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                </div>
        </section>

    <!--------------------------------------------------- Service End ------------------------------------------------->


        
    <!-- About Service Start  -->
        <section id="service-detail"><br><br>
                <div class="container-xxl service py-3" >
                                <div class="container">
                                <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                                <h1 class="mb-5">Explore Our Services</h1>
                                </div>
                                <div class="row g-4 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="col-lg-4">
                                <div class="nav w-100 nav-pills me-4 p-0">
                                    <button class="nav-link w-100 d-flex align-items-center  p-2 mb-1  active"
                                    data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                            <img class="img-fluid" src="img/icon/wheels.png"  style="width: 70px; height: 70px;"alt="Icon">
                                        <h4 class="m-0">One Ride Service</h4>
                                    </button>

                                    <button class="nav-link w-100 d-flex align-items-center  p-2 mb-1" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                
                                        <img class="img-fluid" src="img/icon/wheels.png"   style="width: 70px; height: 70px;" alt="Icon">
                                        <h4 >Round Trip Service</h4>
                                    </button>

                                    <button class="nav-link w-100 d-flex align-items-center p-2 mb-1 " data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                
                                            
                                            <img class="img-fluid" src="img/icon/wheels.png" style="width: 70px; height:70px" alt="Icon">
                                        
                                        <h4 class="m-0">Hospital Assistance</h4>
                                    </button>
                                </div>
                                </div>

                                <!-- images set-->          
                                <div class="col-lg-8">
                                <div class="tab-content w-100">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid " src="img/slider/oneside.jpeg"
                                        style="object-fit: cover;" alt="">
                                </div>
                                </div>

                                <!--  One-side Ride -->
                                <div class="col-md-6">
                                <h3 class="mb-3">One Ride Trip</h3>
                                <p ><i class="fa fa-check text-success me-3"></i> Hire professional drivers to pick up from bars & eliminate the husstle of driving</p>
                                <p><i class="fa fa-check text-success me-3"></i>No more driving in heavy traffic and locating parking spot</p>
                                <p><i class="fa fa-check text-success me-3"></i>Hire drivers for airport pickup or drop off services</p>
                                <a class="btn btn-warning rounded-pill py-3 px-5" data-bs-toggle="modal" data-bs-target="#book1" href="">Book Now</a>
                                
                                </div>
                                </div>
                                </div>


                                <!--  Round Trip Ride -->

                                <div class="tab-pane fade" id="tab-pane-2">
                                <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid" src="img/slider/16.png"
                                        style="object-fit: cover; width:inherit;" alt="">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <h3 class="mb-3">Round Trip</h3>
                                <p><i class="fa fa-check text-success me-3"></i>
                                Hire Professional drivers to commute your vehicle.
                            </p>
                                <p><i class="fa fa-check text-success me-3"></i>
                                Simply Get around in town for midnight cravings, shopping and night parties.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Make a quick stop at any stores/pharmacies on your rides</p>
                                <p><i class="fa fa-check text-success me-3"></i>No more delay on your meeting schedules</p>
                                    
                                    <a class="btn btn-warning rounded-pill py-3 px-5" data-bs-toggle="modal" data-bs-target="#book2" href="">Book Now</a>
                                </div>
                                </div>
                                </div>


                            <!-- Hospital Assistance-->
                                <div class="tab-pane fade" id="tab-pane-3">
                                        <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid" src="img/icon/assistance.webp"
                                        style="object-fit: cover;" alt="">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <h3 class="mb-3">Hospital Assistance</h3>
                                        <!--p class="mb-4">Our driver assistants also act as an assistant who provides support for seniors.</p-->
                                        <p><i class="fa fa-check text-success me-3"></i>you can trust that your loved ones are in capable and caring hands.</p>
                                        <p><i class="fa fa-check text-success me-3"></i>We prioritize the physical and emotional well-being of seniors</p>
                                        <p><i class="fa fa-check text-success me-3"></i>our experienced drivers are here to 
                                        provide a comfortable and supportive environment during their hospitalization</p>
                                        <a class="btn btn-warning rounded-pill py-3 px-5" data-bs-toggle="modal" data-bs-target="#book3" href="">Book Now</a>



                                        </div>
                                        </div>
                                        </div>


                                        </div>
                                        </div>
                                        </div>
                                        </div>
                </div>
        </section>
    <!--  About Service End-->

<!--------------------------------------------------- Service End ------------------------------------->



 <!--------------------------------------------- Features Start ------------------------------------------------->
 <section  id="feature"><br><br>
    <div class="container-xxl py-5">
     <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 500px;">
            <!--p class="fs-5 fw-medium" style="color: #ffae00;">Features Service</p-->
            <h1 class="display-5 mb-5">   Explore Our Features </h1>
        </div>
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-3 wow fadeIn animated slideInRight" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5 ">
                    <div class="btn-square bg-white rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/personal.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Personalized Service</h5>
                    <p class="mb-0"><i>Our commitment lies in understanding our client’s unique requirements and interests, ensuring and
                        providing customized service to meet all their expectations.</i> </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn animated slideInUp" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5 ">
                    <div class="btn-square bg-white rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/city.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">In-City Rides</h5>
                    <p class="mb-0"> <i>Ensure that your drivers are familiar with the city&#39;s roads and traffic patterns. Optimize routing to
                        minimize travel time and provide efficient and timely rides.</i></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn animated slideInDown" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5 ">
                    <div class="btn-square bg-white rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/outstation.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Outstation Rides</h5>
                    <p class="mb-0"><i>
                        Reliable and Professional Drivers, who are experienced and skilful. who are familiar with long-
                        distance travel and have excellent customer service.
                    </i></p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 wow fadeIn animated slideInLeft" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5 ">
                    <div class="btn-square bg-white rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/bar.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">Bar Pickup</h5>
                    <p class="mb-0"><i >
                        Bar pick-up driver service offers convenience to customers by providing a designated driver.
                         It helps prevent drunk driving accidents and promotes responsible drinking. 
                         Patrons can enjoy a night out without worrying about getting home safely.</i></p>
                     </div>
                </div>
             </div>
        </div>
    </div>
</section>
<!-- Features End -->

  <!--------------------------------------------------- Feactures End ------------------------------------->


   <!--------------------------------------- About Start ------------------------------------------------->
 <section id="about"><br>
   <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 500px;">
    <!--p class="fs-5 fw-medium" style="color: #ffae00;">Our Services</p-->
    <h1 class="display-5 mb-5">About Us</h1>
        </div>
        <div class="container-xxl about my-5" id="about">
        <div class="container">
    <div class="row g-0">
        <div class="col-lg-6">
            <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="video/ser.html" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
           
        </div>
        <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s" >
            <div class="bg-white rounded-top p-5 mt-lg-5 animated slideInRight">
                <p class="fs-5 fw-medium text-primary">About Us</p>
                <h1 class="display-6 mb-4">DAFY Online Pvt. Ltd.</h1>
                <p class="mb-4"><i class="fa fa-check text-success me-2"></i>At DAFY Online, we understand that your time is valuable, and 
                    our services are designed to cater to your unique needs. </p>
                    <p><i class="fa fa-check text-success me-2"></i>
                    Whether you need a reliable driver for your daily commute, a professional chauffeur 
                    for a special occasion, or assistance with transportation logistics, we have you covered.</p>
                    <p><i class="fa fa-check text-success me-2"></i>Our user-friendly platform makes booking 
                    our services quick and easy. 
                    We are dedicated to provide convenient and reliable assistants 
                    to help you manage your busy lifestyle with ease.</p>
                <div class="row g-5 pt-2 mb-5">
                    <div class="col-sm-6 animated slideInRight">
                        <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                        <h5 class="mb-3">Managed Services</h5>
                        <span>our experienced drivers are trained to provide reliable and discreet transportation services.</span>
                    </div>
                    <div class="col-sm-6 animated slideInLeft">
                        <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                        <h5 class="mb-3">Dedicated Experts</h5>
                        <span>With our experienced caregivers, you can trust that
                             your loved ones are in capable and caring hands. </span>
                    </div>
                </div>
                <!--a class="btn btn-warning rounded-pill py-3 px-5" href="">Explore More</a-->
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">DAFY Service Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Video Modal End -->
</section>
<!--------------------------------------------------- Service Start ------------------------------------->


  
<!--------------------------------------------------- enquiry End ------------------------------------->
<section id="expert"> <br><br>
    <div class="container-xxl py-5" >
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <!--p class="fs-5 fw-medium text-warning">Get A Quote</p-->
                <h1 class="display-5 mb-3">Need Our Expert Help? We're Here!</h1>
                <p> Our user-friendly platform makes booking our services quick and easy. 
                    We are dedicated to provide convenient and reliable assistants to help you.</p>
                <p class="mb-4">Whether you need a reliable driver for your daily commute, 
                    a professional chauffeur for a special occasion, or 
                    assistance with transportation logistics, we have you covered.</p>
                <a class="d-inline-flex align-items-center rounded overflow-hidden border border-warning"
                 href="tel:917592933933">
                    <span class="btn-lg-square bg-warning" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </span>
                    <span class="fs-5 fw-medium mx-4" style="color:black;">+91 7592933933</span>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe class="gmap_iframe" width="100%" frameborder="0" 
                                    scrolling="no" marginheight="0" marginwidth="0" 
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=kochin&amp;
                                    t=p&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="min-height: 450px; border:0;" 
                                    allowfullscreen="" aria-hidden="false"
                                    tabindex="0">
                                </iframe><a href="https://capcuttemplate.org/">
                                    Capcut Template</a></div>
                                    <style>.mapouter{position:relative;
                                        text-align:right;
                                        width:100%;height:400px;}
                                        .gmap_canvas {overflow:hidden;
                                        background:none!important;
                                        width:100%;height:400px;}
                                        .gmap_iframe {height:400px!important;}
                                    </style>
                                </div>
                            </div>
                   
                   
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------------------------------- enquiry End ------------------------------------->

<!--------------------------------------------------- Team Start ------------------------------------->
<section  id="team"><br><br>
    <div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s">
            <!--p class="fs-5 fw-medium text-warning">Team</p-->
            <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp " data-wow-delay="1.2s"  >
       
            <div class="team-item overflow-hidden pb-4 rounded p-lg-2 mb-1">
                <img class="mb-2 rounded justify-content-center" src="img/team/ceo1.jpg" alt="">
                <h5 class="mb-2">Manikandan Ak</h5>
                <h4 class="text-warning">CEO</h4>
            
                    <!--ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul-->
                </div>
           
                <div class="team-item overflow-hidden pb-4 rounded  p-lg-2 mb-1">
                <img class="mb-2 rounded justify-content-center" src="img/team/team-2.jpg" alt="">
                <h5 class="mb-2">Arun Chandrasekaran</h5>
                <h4 class="text-warning">COO</h4>
                
                <!--ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul-->
                </div>
            <div class="team-item overflow-hidden pb-4 rounded  p-lg-2 mb-1">
                <img class="mb-2 rounded justify-content-end" src="img/team/team-3.jpg" alt="">
                <h5 class="mb-2">Jijo Louis</h5>
                <h5 class="text-warning" >Human Resource's Head</h5>
                
                <!--ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul-->
                </div>
            
            
            <div class="team-item overflow-hidden pb-3 rounded  p-lg-2 mb-1">
                <img class="mb-2  rounded" src="img/team/account.jpg" alt="">
                <h5 class="mb-2">Stephin Jose</h5>
                <h5 class="text-warning">Account's Head</h5>
                
                <!--ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul-->
                </div>
            
            <div class="team-item overflow-hidden pb-4 rounded p-lg-2 mb-1">
                <img class="mb-2  rounded" src="img/team/team-3.jpg" alt="">
                <h4 class="mb-2">Josen Kuriakose</h4>
                <h5 class="text-warning">Operation's Head</h5>
                
                <!--ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul-->
            </div>
            
            
        </div>
    </div>
    </div>
</section>
<!--------------------------------------------------- Team  end ------------------------------------->


<!--------------------------------------------------- Testimonial  Start ------------------------------------->
<section id="testimonial"><br><br>
    <div class="conatiner" >
        <div class="container-xxl pt-5" >
            <div class="container">
                <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp"data-ride="carousel" data-interval="500"  >

                    <div class="testimonial-item rounded p-4 p-lg-5 mb-5 limitext"id="limitext" >
                        <h3 >SUJITH E R </h3>
                        <p class="mb-4 limitline">I recently had the opportunity to avail myself the service provided by DAFY,
                            and I am pleased to share my experience. One aspect that impressed me was their responsiveness.
                            Whenever I needed assistance or had a question, their customer service team was readily available 
                            and provided prompt and helpful responses. Their efficiency in handling these matters was truly commendable. 
                            I highly recommend DAFY's service based on my positive experience. I am grateful for their assistance 
                            and would not hesitate to utilize their services again if needed in the future.</p>
                            <input type="checkbox" class="expand-btn "> 

                    </div>
                    <div class="testimonial-item rounded p-4 p-lg-5 mb-5  limitext" id="limitext">
                        <h3>ANANDHU S </h3>
                        <p class="mb-4 limitline">The efficiency and punctuality of the drivers provided by
                            DAFY had impressed me a lot. Whenever I needed a driver to take me and my friends to 
                            various lounge and venues, they were always prompt and ready to assist. Their knowledge of 
                            the local area and the best routes ensured that we reached our destinations without any hassle. 
                            The drivers were polite, courteous, and made us feel safe throughout the journey.
                        </p>
                            <input type="checkbox" class="expand-btn">
                    </div>
                    <div class="testimonial-item rounded p-4 p-lg-5 mb-5  limitext" id="limitext">
                        
                        <h3>JAYESH K</h3>
                        <p class="mb-4 limitline">I recently had the pleasure of using the professional driver assistant service provided by DAFY for my family.
                            One aspect that stood out to me was the professionalism and expertise of the driver provided by DAFY.
                            He was not only skilled behind the wheel but also displayed a warm and friendly approach towards us. 
                            We felt safe on the road, and the driver consistently exhibited the highest standards of professionalism and respect.
                            I would not hesitate to engage their services again in the future.
                        </p>
                        <input type="checkbox" class="expand-btn">
                    </div>
                    <div class="testimonial-item rounded p-4 p-lg-5 mb-5  limitext" id="limitext">
                        
                        <h3>SAJESH V</h3>
                        
                        <p class="mb-4 limitline">Using the driver service was a truly amazing experience for me. 
                            It blew me away with its excellent service, The driver was attentive and professional, 
                            ensuring that I had a comfortable and safe journey. 
                            I was truly impressed with the level of service and would
                            definitely use it again. </p>
                            <input type="checkbox" class="expand-btn ">
                    </div>
                    <div class="testimonial-item rounded p-4 p-lg-5 mb-5  limitext"id="limitext">
                        
                        <h3>ARCHIT MD</h3>
                        
                        <p class="mb-4 limitline">I've been using DAFY's driver/caretaker service for several months now, 
                            and I must say they have exceeded my expectations in every way!Considering the exceptional service 
                            and professionalism they provide; their charges are more than fair. They strike a perfect balance 
                            between affordability and quality, making them a top choice in the industry.
                            I highly recommend DAFY for anyone seeking a driver/caretaker service.
                            Their drivers are polite, friendly, and go the extra mile to ensure customer satisfaction.
                            With their availability, punctuality, reasonable prices, and commitment to safety, 
                            DAFY has set a new standard in the industry. 
                            I am grateful for their outstanding service and will continue relying on them for all my transportation needs.
                        </p>
                            <input type="checkbox" class="expand-btn">
                    </div>
                    <div class="testimonial-item rounded p-4 p-lg-5 mb-5 line  limitext" id="limitext">
                        <h3>NANCY JACOB</h3>
                    
                        <p class="mb-4 limitline">I recently experienced the professional driver assistance service provided by DAFY,
                            and I am delighted to share my positive experience. 
                            From the moment I engaged with the driver, he displayed a high level of professionalism, 
                            attentiveness, and respect, making me feel safe and comfortable throughout my journeys. 
                            He is very attentive to my specific needs and preferences like adjusting the temperature, 
                            ensuring privacy, or helping with luggage, thus made my journey comfortable and stress-free.
                        </p>
                            <input type="checkbox" class="expand-btn" id="expand-btn">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>                        

                        <style>
                            .limitline {
                                    --max-lines: 5;
                                --line-height: 1.4;
                                   max-height: calc(var(--max-lines)*1em*var(--line-height));
                                    line-height: var(--line-height);
                                    display: flex;
                                    overflow: hidden;
                                    position: relative;
                                    justify-content: center;
                                    align-content: stretch;
                                        }
                                     .limitext::before{
                                        content: "";
                                        position: absolute;
                                        height: calc(1em * var(--line-height));
                                        width: 100%;
                                        bottom: 0;
                                        pointer-events: none;
                                        background: linear-gradient(to bottom,transparent,white);
                                    }
                               
                                .expand-btn{
                                    appearance: none;
                                    border: transparent;
                                    padding: .5em;
                                    border-radius: .25em;
                                    cursor: pointer;
                                    margin-top: 1rem;
                                    
                                }
                                .expand-btn:hover{
                                    background-color:none;
                                    
                                }
                                .expand-btn::before{
                                    content: "Read more";
                                }
                                .expand-btn:checked::before{
                                    content: "Read less";
                                }
                                .limitline:has(+ .expand-btn:checked){
                                    max-height: none;
                                }
                                
                            </style>


<!--------------------------------------------------- Testimonial  end ------------------------------------->




    <!-- Footer Start -->  
 
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" id="contact-detail" >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> 34/192C
                        PNRA – 67
                        Melthara Lane, Padivattom
                        Edappally, Kochi
                        Kerala - 682024</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7592933933</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>www.dafy.in</p>
                    <div class="d-flex pt-3"> 
                        <a class="btn btn-square btn-light rounded-circle me-1" href="https://twitter.com/dafyindia">
                             <i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-1" href="https://www.facebook.com/dafyonline">
                            <i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-1" href="https://www.youtube.com/channel/UCaDXn5tA7A4-pX1srS1fJ6A"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-1" href="https://www.instagram.com/dafyonline/">
                        <i class='fab fa-instagram'></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://api.whatsapp.com/send?phone=91 7592933933">
                        <i class='fab fa-whatsapp'></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-1" href="https://www.linkedin.com/company/dafyonline/">
                        <i class='fab fa-linkedin-in'></i></a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="#expert">Contact Us</a>
                    <a class="btn btn-link" href="#service">Our Services</a>
                    <a class="btn btn-link" href="notes/term.php">Terms & Condition</a>
                    <!--a class="btn btn-link" href="">Support</a-->
                    <a class="btn btn-link" href="notes/policy.php">Policy</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Sunday</p>
                    <p class="mb-4">Any Time</p>
                    <p class="mb-4">Ready for Services</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Subscribe</h4>
                    <p>Need Asisstance for drive home, anytime anywhere we are here to help</p>
                    <div class="position-relative w-100">
                        <a type="button" class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2" data-bs-toggle="modal" data-bs-target="#book4"
                         href="">Subscribe Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">2023</a>, All Right Reserved.
                </div>
                <!--div class="col-md-6 text-center text-md-end">

                    Designed By <a class="fw-medium text-light" href="#team">Dafy Team</a>
                    Distributed By <a class="fw-medium text-light" href="#about">Dafy Online pvt. ltd.</a>
                </div-->
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-square rounded-circle back-to-top"  style="display: inline;">
    <i class="fa fa-angle-up"></i></a>
        
 <!-----------------------------------------------------Modal Pop-up Windows --------------------------------------->   
    <!---------------------------- One-Ride Modal ----------------------------------->
    <div class="modal fade" id="book1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
       
        <div class="modal-dialog">
        <div class="modal-content">
     
        <div class="modal-body bg-dark">
                       <div class="row">
                           <div class="booking-form">
                               <div class="form-header">
                                   <h2 class="text-primary"> One-ride Trip Service</h2>
                               </div>
                               <form>
                                   <div class="row">
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <span class="form-label">Name</span>
                                               <input class="form-control validate" type="text" placeholder="Enter your name" id="name1" pattern=[A-Z\sa-z]{3,20} required>
                                           </div>
                                       </div>
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <span class="form-label">Email</span>
                                               <input class="form-control validate" type="email" placeholder="Enter your email" id="email1" required>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <span class="form-label">Phone</span>
                                       <input class="form-control validate" type="tel" placeholder="Enter your phone number" id="phone1" pattern=(\d{3})?\s?(\d{3})?\s?(\d{4}) required>
                                   </div>
                                   <div class="form-group">
                                       <span class="form-label">Pickup Location/ Current location</span>
                                       <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="pick1" required>
                                   </div>
                                   <div class="form-group">
                                       <span class="form-label">Destination / drop location</span>
                                       <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="drop1" required>
                                   </div>
                                   <div class="row">
                                       <div class="col-sm-5">
                                           <div class="form-group">
                                               <span class="form-label">Pickup Date</span>
                                               <input class="form-control validate" type="date" required id="date1">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-btn validate">
                                       <button class="submit-btn" id="one-ride-submit">Book Now</button>
                                   </div>
                               </form>
                           
                       </div>
                   </div>
               </div>
           </div-->

           </div>

         </div>

    </div>
   <!--------------------------- Round Trip ------------------------------------------->
  
   <div class="modal fade" id="book2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      
       <div class="modal-dialog">
       <div class="modal-content">
     
       <div class="modal-body bg-dark">
                       <div class="row">
                           <div class="booking-form">
                               <div class="form-header">
                                   <h2 class="text-primary"> Round Trip Service</h2>
                               </div>
                               <form>
                                   <div class="row">
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <span class="form-label">Name</span>
                                               <input class="form-control validate" type="text" placeholder="Enter your name" id="name2" pattern=[A-Z\sa-z]{3,20} required>
                                           </div>
                                       </div>
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <span class="form-label">Email</span>
                                               <input class="form-control validate" type="email" placeholder="Enter your email" id="email2" required>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <span class="form-label">Phone</span>
                                       <input class="form-control validate" type="tel" placeholder="Enter your phone number" id="phone2" pattern=(\d{3})?\s?(\d{3})?\s?(\d{4}) required>
                                   </div>
                                   <div class="form-group">
                                       <span class="form-label">Pickup Location/ Current location</span>
                                       <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="pick2" required>
                                   </div>
                                   <div class="form-group">
                                       <span class="form-label">Destination / drop location</span>
                                       <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="drop2" required>
                                   </div>
                                   <div class="row">
                                       <div class="col-sm-5">
                                           <div class="form-group">
                                               <span class="form-label">Pickup Date</span>
                                               <input class="form-control validate" type="date" required id="date2">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-btn validate">
                                       <button class="submit-btn" id="round-submit">Book Now</button>
                                   </div>
                               </form>
                           
                       </div>
                   </div>
               </div>
           </div-->

           </div>

    </div>

   </div>

   <!------------------ Health and Wealth ---------------------------------->

    <div class="modal fade" id="book3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        
        <div class="modal-dialog">
        <div class="modal-content">
        
        <div class="modal-body bg-dark">
                        <div class="row">
                            <div class="booking-form">
                                <div class="form-header">
                                    <h2 class="text-primary"> Hospital Assistance </h2>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">Name</span>
                                                <input class="form-control validate" type="text" placeholder="Enter your name" id="name3" pattern=[A-Z\sa-z]{3,20} required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">Email</span>
                                                <input class="form-control validate" type="email" placeholder="Enter your email" id="email3" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Phone</span>
                                        <input class="form-control validate" type="tel" placeholder="Enter your phone number" id="phone3" pattern=(\d{3})?\s?(\d{3})?\s?(\d{4}) required>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Pickup Location/ Current location</span>
                                        <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="pick3" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Destination / drop location</span>
                                        <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="drop3" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <span class="form-label">Pickup Date</span>
                                                <input class="form-control validate" type="date" required id="date3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn validate">
                                        <button class="submit-btn" id="hospital-submit">Book Now</button>
                                    </div>
                                </form>
                            
                        </div>
                    </div>
                </div>
            </div-->

            </div>

        </div>

        </div>
    <!----   Subscribe US button          ---->
    <!-- Modal -->
        <div class="modal fade" id="book4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            
                <div class="modal-dialog">
                <div class="modal-content">
            
                <div class="modal-body bg-dark">
                                <div class="row">
                                    <div class="booking-form">
                                        <div class="form-header">
                                            <h2 class="text-primary">Subscribe Us</h2>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Name</span>
                                                        <input class="form-control validate" type="text" placeholder="Enter your name" id="name1" pattern=[A-Z\sa-z]{3,20} required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Email</span>
                                                        <input class="form-control validate" type="email" placeholder="Enter your email" id="email1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span class="form-label">Phone</span>
                                                <input class="form-control validate" type="tel" placeholder="Enter your phone number" id="phone1" pattern=(\d{3})?\s?(\d{3})?\s?(\d{4}) required>
                                            </div>
                                            <div class="form-group">
                                                <span class="form-label">Pickup Location/ Current location</span>
                                                <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="pick1" required>
                                            </div>
                                            <div class="form-group">
                                                <span class="form-label">Destination / drop location</span>
                                                <input class="form-control validate" type="text" placeholder="Enter ZIP/Location"id="drop1" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <span class="form-label">Pickup Date</span>
                                                        <input class="form-control validate" type="date" required id="date1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn validate">
                                                <button class="submit-btn" id="subscribe-submit">Subscribe Us</button>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div-->

                    </div>

            </div>

        </div>
    <!----- Subsrcibe Us botton end -------->
    <!--- join US driver --->
        <div class="modal fade" id="book5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            
                <div class="modal-dialog">
                <div class="modal-content">
            
                <div class="modal-body bg-dark">
                                <div class="row">
                                    <div class="booking-form">
                                        <div class="form-header">
                                            <h2 class="text-primary">Join Us</h2>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Name</span>
                                                        <input class="form-control validate" type="text" placeholder="Enter your name" id="name1" pattern=[A-Z\sa-z]{3,20} required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Email</span>
                                                        <input class="form-control validate" type="email" placeholder="Enter your email" id="email1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span class="form-label">Phone</span>
                                                <input class="form-control validate" type="tel" placeholder="Enter your phone number" id="phone1" pattern=(\d{3})?\s?(\d{3})?\s?(\d{4}) required>
                                            </div>
                                            <div class="form-group">
                                                <span class="form-label">Your CV/ Resume</span>
                                                <input class="form-control validate" type="file"id="file-cv1" name="cv-file" required>
                                            </div>
                                        
                                            <div class="form-btn validate">
                                                <button class="submit-btn" id="join-submit">Submit</button>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div-->

                    </div>

            </div>

        </div>
    <!---- Join Us Driver END --->

<!------------------------------------------- Book - Modal end ------------------------------------------------->




    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>