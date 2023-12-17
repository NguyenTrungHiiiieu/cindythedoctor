<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cindy The Doctor</title>
    

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-tooth"></i> Cindy The Doctor </a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#team">Team</a>
            <a href="#pricing">Pricing</a>
            <a href="#blog">Blog</a>
        </nav>

       
        <div id="menu-btn" class="fas fa-bars"></div>

        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p><a href="logout.php"><i class="fas fa-sign-out-alt fa-3x"></i></a></p>





    </header>

   

    <section class="home" id="home">

        <div class="content">
            <h3>Make Your Smile Shine</h3>
            <p>Here at Cindy The Doctor, we are committed to providing the highest quality of clinical care and personalized service in a warm and compassionate atmosphere. Our doctors and staff enjoy getting to know each patient and their families, and
                love creating relationships that last multiple generations.</p>
            <a href="#ma" class="btn">Make Appointment</a>
        </div>


    </section>

   

    <section class="about" id="about">

        <h1 class="heading"> About Us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about.webp" alt="">
            </div>

            <div class="content">
                <h3>Our Clinic Is Made For You To Be Smiling All The Time</h3>
                <p>Cindy The Doctor Dental Clinics invites you as a patient! We utilize the most recent dental innovation to offer incredible dental consideration to give a charming, calm ordeal. For your benefit, our clinics offer nighttimes and Saturday
                    arrangements just as electronic protection preparing for simple and fast installment. We pride ourselves on the consideration of our patients. We welcome patients all things considered and give benefits in both English and French.
                    We enjoy incredible making your first dental involvement with us pleasant and keeping up long-haul associations with all of our patients. Our theory for our clinics is the thing that we take a stab at ordinary. “A family situated practice
                    in an amicable and minding condition devoted to brilliance.” We anticipate making cheerful, solid, and splendid grins for you and your family in the years ahead.

                </p>
                <p</p>
                    
            </div>

        </div>

    </section>


    

    <section class="services" id="services">

        <h1 class="heading"> Our Services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/services-1.webp" alt="">
                <h3>Online Schedule</h3>
                <p>Book your dental appointments conveniently with our Online Schedule! Select your preferred date and time, receive reminders, and manage your bookings effortlessly. Experience the ease of maintaining a healthy smile with just a few clicks!</p>
            </div>

            <div class="box">
                <img src="images/services-2.webp" alt="">
                <h3>Cosmetic Feeling</h3>
                <p>Welcome to Cosmetic Feeling dental clinic, where artistry meets science to create stunning smiles. Our expert cosmetic dentists offer personalized treatments, from teeth whitening to complete makeovers, ensuring natural-looking and long-lasting
                    results. Discover the confidence-boosting power of a radiant smile – schedule your consultation now!</p>
            </div>

            <div class="box">
                <img src="images/services-3.webp" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>At Oral Hygiene Experts, we prioritize your dental health with expert care and personalized treatments. From routine check-ups to advanced periodontal care, our team utilizes the latest technology to deliver exceptional results. Trust
                    us for a brighter, healthier smile – schedule an appointment today!</p>
            </div>

        </div>

    </section>

   

    <section class="team" id="team">

        <h1 class="heading">Our Team</h1>

        <div class="swiper team-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/team-1.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Harry Ng</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/team-2.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Cindy Céline</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/team-3.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Caitlyn Jane</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide"> 
                    <div class="image">
                        <img src="images/team-4.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Andy Brown</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

            </div>

        </div>

    </section>

   

    <section class="pricing" id="pricing">

        <h1 class="heading">Pricing Plan</h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">Basic</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">500</span>
                    <span class="duration"> /Year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i>Alignment Specialist</li>
                    <li> <i class="fas fa-check"></i>Cavity Inspection</li>
                </ul>
                <a href="pay.php" class="btn">Read More</a>
            </div>

            <div class="box active">
                <h3 class="title">Standard</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">800</span>
                    <span class="duration"> /Year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i>Alignment Specialist</li>
                    <li> <i class="fas fa-check"></i>Cavity Inspection</li>
                    <li> <i class="fas fa-check"></i>Cosmetic Dentistry</li>
                </ul>
                <a href="pay.php" class="btn">Read More </a>
            </div>

            <div class="box">
                <h3 class="title">Premium</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">1000</span>
                    <span class="duration"> /Year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i>Alignment Specialist</li>
                    <li> <i class="fas fa-check"></i>Cavity Inspection</li>
                    <li> <i class="fas fa-check"></i>Cosmetic Dentistry</li>
                    <li> <i class="fas fa-check"></i>Oral Hygiene Experts</li>
                </ul>
                <a href="pay.php" class="btn">Read More</a>
            </div>

        </div>

    </section>

   
    <section class="blog" id="blog">

        <h1 class="heading">Our Blogs</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a class="link">Diease</a>
                    <div class="icons">
                        <a> <i class="fas fa-calendar"></i> 20th February, 2023 </a>
                        <a> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>The Most Common Problems?</h3>
                    <p>Reasons for Pain or Discomfort and How to Manage Symptoms.</p>
                    <a href="blog1.php" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a class="link">Diease</a>
                    <div class="icons">
                        <a> <i class="fas fa-calendar"></i> 04th April, 2023 </a>
                        <a> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>Teeth and gum problems.</h3>
                    <p>Gum disease is the leading cause of tooth loss in adults. What causes gum disease? Plaque is the primary cause of gum disease.</p>
                    <a href="blog2.php" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a class="link">Diease</a>
                    <div class="icons">
                        <a> <i class="fas fa-calendar"></i> 05th June, 2023 </a>
                        <a> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>Why checkups are essential?</h3>
                    <p>Regular check-ups ensure that the beginnings of a filling can be identified, treated and additional brushing routines created.</p>
                    <a href="blog3.php" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>


    <section class="contact" id="contact">
        <h1 id="ma" class="heading"></h1>
        <iframe src="appointment.php" width="100%" height="600px" frameborder="0"></iframe>
    </section>

    

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Address</h3>
                <p>Ngu Hanh Son, Da Nang</p>
                <div class="share">
                    <a class="fab fa-facebook-f"></a>
                    <a class="fab fa-twitter"></a>
                    <a class="fab fa-linkedin"></a>
                    <a class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="#null" class="link">cindythedoctor@gmail.com</a>
                <a href="#null" class="link">cindyceline@gmail.com</a>
            </div>

            <div class="box">
                <h3>Call Us</h3>
                <p>+84 818804567</p>
                <p>+84 818804567</p>
            </div>

            <div class="box">
                <h3>Opening Hours</h3>
                <p>Monday - Friday : 8:00 - 00:00 <br> Saturday : 9:00 - 00:00
                </p>
            </div>

        </div>

        <div class="credit">Created by <span>Cindy Coder</span> | all rights reserved!</div>

    </section>





 

















    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>