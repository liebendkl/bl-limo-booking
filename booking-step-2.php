<?php require_once (TEMPLATE.'common/header.php')?>

    <!-- Page Title -->
    <section class="title-page">
        <div class="container">
            <h1>Choose your car</h1>
            <span>Below you can see the actual list of available cars from our system</span>
        </div>
    </section>
    <!-- Section Main Content --> 
    <section class="main-content bookingdetails" id="bookingdetails">
        <div class="container ">

            <!-- Journey Details Section -->
            <div class="journey-details">
                <h3>Time rental Details</h3>
                <p><strong>Passengers count:</strong> <?php echo htmlspecialchars($_GET['passengers_count'] ?? ''); ?></p>
                    <br>
                <div class="row">
                    <div class="col-md-4">
                        <p><strong>Pick-up location:</strong> <?php echo htmlspecialchars($_GET['pickup_location'] ?? ''); ?></p>
                        <p><strong>Start date:</strong> <?php echo htmlspecialchars($_GET['start_date'] ?? ''); ?></p>
                        <p><strong>Start time:</strong> <?php echo htmlspecialchars($_GET['start_time'] ?? ''); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Destination:</strong> <?php echo htmlspecialchars($_GET['destination'] ?? ''); ?></p>
                        <?php if (isset($_GET['end_date']) && isset($_GET['end_time'])): ?>
                            <p><strong>End date:</strong> <?php echo htmlspecialchars($_GET['end_date']); ?></p>
                            <p><strong>End time:</strong> <?php echo htmlspecialchars($_GET['end_time']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <div class="journeymap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.5626935811306!2d11.576311877239293!3d48.13795617124356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e758ba1b3b803%3A0x9c63954fb57c0d8d!2sPlatzl%20Hotel!5e0!3m2!1sen!2slv!4v1718837416744!5m2!1sen!2slv" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="availablecars-block">
        <div class="container">
            <!-- Available Cars Section -->
            <div class="available-cars">
                <h3>Available Cars</h3>
                
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="https://limo-booking.com/upl/partner_cars/ext-59-33.jpg" class="card-img" alt="Car Image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Luxury Sedan</h5>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="card-body">
                                        
                                        <div class="features">
                                            <p><strong>Car features:</strong></p>
                                            <p><i class="fas fa-users"></i> Max passengers: 6</p>
                                            <p><i class="fas fa-suitcase"></i> Max suitcases: 4</p>
                                            <p>Bottled water for all guests</p>
                                        </div>
                                         
                                    </div>
                                </div> 
                                <div class="col-md-5 col-6">
                                    <div class="card-body">
                                        <div class="service-includes">
                                            <p><strong>What's included in the service:</strong></p>
                                            <p>All TAXes and fees</p>
                                            <p>Meet and Greet</p>
                                            <p>Waiting time 30 min</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body priceblock">
                                        <div class="price">
                                            € 313.11
                                            <span>All TAXes and fees included</span>
                                        </div>
                                       
                                        <button class="btn btn-primary btn-booking mt-3">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="https://limo-booking.com/upl/partner_cars/ext-59-37.jpg" class="card-img" alt="Car Image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Mercedes-Benz E Class</h5>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="card-body">
                                        
                                        <div class="features">
                                            <p><strong>Car features:</strong></p>
                                            <p><i class="fas fa-users"></i> Max passengers: 4</p>
                                            <p><i class="fas fa-suitcase"></i> Max suitcases: 2</p>
                                            <p>Bottled water for all guests</p>
                                        </div>
                                         
                                    </div>
                                </div> 
                                <div class="col-md-5 col-6">
                                    <div class="card-body">
                                        <div class="service-includes">
                                            <p><strong>What's included in the service:</strong></p>
                                            <p>All TAXes and fees</p>
                                            <p>Meet and Greet</p>
                                            <p>Waiting time 30 min</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body priceblock">
                                        <div class="price">
                                            € 313.11
                                            <span>All TAXes and fees included</span>
                                        </div>
                                        <button class="btn btn-primary btn-booking mt-3">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="https://limo-booking.com/upl/partner_cars/ext-115-14.jpg" class="card-img" alt="Car Image">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Mercedes-Benz S-Class 350Ld</h5>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="card-body">
                                        
                                        <div class="features">
                                            <p><strong>Car features:</strong></p>
                                            <p><i class="fas fa-users"></i> Max passengers: 4</p>
                                            <p><i class="fas fa-suitcase"></i> Max suitcases: 2</p>
                                            <p>Bottled water for all guests</p>
                                        </div>
                                         
                                    </div>
                                </div> 
                                <div class="col-md-5 col-6">
                                    <div class="card-body">
                                        <div class="service-includes">
                                            <p><strong>What's included in the service:</strong></p>
                                            <p>All TAXes and fees</p>
                                            <p>Meet and Greet</p>
                                            <p>Waiting time 30 min</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card-body priceblock">
                                        <div class="price">
                                            € 313.11
                                            <span>All TAXes and fees included</span>
                                        </div>
                                        <button class="btn btn-primary btn-booking mt-3">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
</section> 

<style>
        header.blurred {
            padding: 0px 0px 18px;
        }
        .availablecars-block {
            margin: 40px 0 60px;
        }
        .watsappbutton {
            display:none;
        }
        .title-page {
            /* padding: 200px 0 60px;  */
        }
        .main-content {
            /* padding: 70px 0; */
        }
        .card-title {
            padding: 10px 20px 10px;
            font-weight: bold;
            background: #3c3737;
            margin: 0;
        }
        .card p {
            font-size:14px;
        }
        .main-content {
            /* padding: 10px 0 0; */
        }
        .journeymap {
            margin-top:-15px;
        }
        .stickydetails .journeymap {
            margin-top: -38px;
            margin-bottom: 14px;
        } 
        .stickydetails .journey-details h3 {
            margin-bottom: 15px;
        }
        .bookingdetails {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            transition: 0.3s padding ease-out, 0.3s margin ease-out, 0.3s border ease-out;
        }
        .bookingdetails p {
            color: #fff;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            background-color: #1a1a1a;
            color: #fff;
            border: none;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .card img {
            /* max-width: 100px; */
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .features, .service-includes {
            margin-top: 10px;
        }
        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FFD076;
        }
        .price span {
            color: white;
            display: block;
            font-size: 10px;
        }
        .btn-booking {
            max-height: 40px;
        }
        .journey-details {
            margin-bottom: 30px;
        }
        .journey-details h3 {
            border-bottom: 2px solid #FFD076;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .bookingdetails.smallheight  {
            padding: 1px 0 0;
            position: sticky;
            top: -14px;
            z-index: 999;
        }
        .btn-booking {
            background: white;
            color: black;
            border: 0;
        }
        @media (max-width: 1201px) {
            .journey-details {
                padding-bottom: 19px;
            }
            .card-body {
                
                padding: 9px;
            }
            .features, .service-includes {
                    margin-top: 2px;
                }
            .btn-booking {
                background: white;
                color: black;
                border: 0;
                margin: 13px 0 0 !important;
                height: 26px;
                border-radius: 4px;
            }
        }
        @media (max-width: 768px) {
            .priceblock {
                border-top: 1px solid #646464;
                padding: 0 9px 9px;
            }
            .price {
                text-align: center;
            }
            .journeymap {
                margin-top: 40px;
            }
            .card img {
                /* max-width: 80px; */
            }
            .card-body {
                align-items: center;
            }
            .btn-booking {
                padding: 19px 33px;
            }
            .card p {
                font-size: 10px;
            }
            .bookingdetails.smallheight {
                position: relative;
                top: 0;
                z-index: 0;
                padding: 13px 0;
            }
        }
    </style>

<script>
document.addEventListener('DOMContentLoaded', function() {
        // Function to check if the device is mobile
        function isMobile() {
            return window.innerWidth <= 768;
        }

        const element = document.getElementById('bookingdetails');

        if (!isMobile()) {
            // Smooth scroll to bookingdetails section after 2 seconds
            setTimeout(function() {
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });

                    // Wait for the scroll to finish
                    setTimeout(function() {
                        element.classList.add('stickydetails');
                    }, 1000); // Adjust this timeout based on scroll duration
                }

                // Add scroll event listener to remove the stickydetails class when scrolled to top
                window.addEventListener('scroll', function() {
                    if (element) {
                        const rect = element.getBoundingClientRect();
                        if (rect.top <= 10) {
                            element.classList.add('stickydetails');
                        } else {
                            element.classList.remove('stickydetails');
                        }
                    }
                });
            }, 2000); // 2000 milliseconds = 2 seconds
        }

        // Add scroll event listener to add and remove the smallheight class based on scroll position
        window.addEventListener('scroll', function() {
            if (element) {
                if (window.scrollY > 0) {
                    element.classList.add('smallheight');
                } else {
                    element.classList.remove('smallheight');
                }
            }
        });
    });

</script>

<?php require_once (TEMPLATE.'common/footer_black.php') ?>