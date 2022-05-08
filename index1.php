<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Matrimonial Site</title>
    <style>
        .change{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .signout,.text-h{
            width:50%;
            text-align:center;
        }
        .btn-s{
            background-color:transparent;
            padding: 5px 10px;
            border: 2px solid white;
        }
        .signout{
            color:white;
        }
    </style>
</head>

<body>
    <header class="info" id="top">
        <div class="header-left">
            <div class="email">
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <span>info@example.com</span>
            </div>
            <div class="phone">
                <span><i class="fa fa-phone fa-11" aria-hidden="true"></i></span>
                <span>+141 587 426 825</span>
            </div>
        </div>
        <div class="header-right change">
            <div class="text-h">
                <p style="color:white; text-decoration:underline;"><?php echo $_SESSION['username'];?></p>
            </div>
            <div class="button">
                <button class="btn-s"><a href="http://localhost/Matrimonial%20-%20Copy/index.php" class="signout">Sign Out</a></button>
            </div>
            <!-- <span class="Facebook"><i class="fa fa-facebook-official fa-1 fa-11" aria-hidden="true"></i></span>
            <span class="Twitter"><i class="fa fa-twitter fa-2 fa-11" aria-hidden="true"></i></span>
            <span class="Google+"><i class="fa fa-google-plus-square fa-3 fa-11" aria-hidden="true"></i></span> -->
        </div>
    </header>
    <nav class="navbar navbar-resp">
        <div class="navigation navigation-resp">
            <div class="nav-left">
                <img src="images/logo.jpg" alt="Logo" class="logo">
            </div>
            <div class="nav-right">
                <ul class="nav-list">
                    <li class="list"><a href="#home">Home</a></li>
                    <li class="list"><a href="#information">About Us</a></li>
                    <li class="list"><a href="#events">Events</a></li>
                    <li class="list"><a href="#gallery">Gallery</a></li>
                    <li class="list"><a href="#planners">Planners</a></li>
                    <li class="list"><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="nav nav-resp">
            <img src="images/logo.jpg" alt="Logo" class="logo">
        </div>
        <div class="hamburger">
            <div class="ham"></div>
            <div class="ham"></div>
            <div class="ham"></div>
        </div>
        <div class="search-btn search-btn-resp"><i class="fa fa-search" aria-hidden="true"></i></div>
    </nav>
    <section id="home">
        <input type="text" class="search-text search-text-resp" placeholder="search">
        <video autoplay muted loop id="myVideo">
            <source src="video/Matrimonial.mp4" type="video/mp4">
        </video>
        <div class="home-page">
            <div class="title">
                <h1>Our Wedding!</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At laborum dolores deleniti blanditiis et
                    consequatur veniam temporibus.</p>
                <!-- <div class="lr-btn">
                    <button class="login"><a href="http://localhost/Matrimonial%20-%20Copy/register.php">Login / SignUp</a></button>
                </div> -->
            </div>
            <img src="images/couple.png" alt="Couple" width="100%">
        </div>
    </section>
    <section id="about">
        <h2 class="main">Our Story</h2>
        <div class="details">
            <div class="male">
                <img src="images/Male.png" alt="Male" width="100%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, aliquam?</p>
                <div class="media">
                    <i class="fa fa-facebook-square fa-4 fa-11" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square fa-4 fa-11" aria-hidden="true"></i>
                    <i class="fa fa-google-plus-square fa-4 fa-11" aria-hidden="true"></i>
                </div>
            </div>
            <div class="names">
                <h3>Smith</h3>
                <i class="fa fa-heartbeat fa-11" aria-hidden="true"></i>
                <h3>Rose</h3>
            </div>
            <div class="female">
                <img src="images/Female.png" alt="Female" width="100%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, aliquam?</p>
                <div class="media">
                    <i class="fa fa-facebook-square fa-4 fa-11" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square fa-4 fa-11" aria-hidden="true"></i>
                    <i class="fa fa-google-plus-square fa-4 fa-11" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="slideshow-container">

            <div class="mySlides">
                <img src="images/1.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/2.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/3.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/4.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/5.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/6.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/7.png" style="width:100%">
            </div>

            <div class="mySlides">
                <img src="images/8.png" style="width:100%">
            </div>

        </div>
        <br>
        <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <section class="we-are" id="information">
        <h2 class="main">Who We Are</h2>
        <div class="description">
            <div class="few-words">
                <h4>Few Words About We</h4>
                <div class="we">
                    <img src="images/logo.jpg" alt="Logo" class="logo">
                    <p class="text">Lorem ipsum dolor sit amet ctetur adipisicing elit. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Omnis, odio?</p>
                </div>
                <p class="text-1">Exercitationeem itaque fugit
                    laboriosam nobis vitae! Quae patis dignissimos necessitatibus tenetur odio! Lorem ipsum dolor
                    sit, amet consectur adipisicin elit Ut, eligendi.</p>
                <img src="images/6.png" alt="Couple" style="width:90%">
                <i class="fa fa-hand-o-right" aria-hidden="true">Learn More</i>
            </div>
            <div class="best">
                <h4>We Best In</h4>
                <button class="btn">Bridal Boudoir</button>
                <button class="btn">Wedding Cakes</button>
                <button class="btn">Wedding Favors</button>
                <button class="btn">Guest Services</button>
                <button class="btn">Hair & Beauty</button>
                <button class="btn">Music</button>
                <button class="btn">Fireworks</button>
            </div>
            <div class="services">
                <h4>Services</h4>
                <div class="management">
                    <i class="fa fa-briefcase fa-5" aria-hidden="true"></i>
                    <div class="management-text">
                        <h5>Wedding Management</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="management">
                    <i class="fa fa-map" aria-hidden="true"></i>

                    <div class="management-text">
                        <h5>Wedding Venues</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="management">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                    <div class="management-text">
                        <h5>Celebrations</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="management">
                    <i class="fa fa-music" aria-hidden="true"></i>
                    <div class="management-text">
                        <h5>Wedding Music</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="events">
        <h2 class="main">Latest Events</h2>
        <div class="event">
            <div class="event1">
                <img src="images/5.png" alt="Pic-1" class="event-img" width="100%">
                <i class="fa fa-calendar fa-6" aria-hidden="true">Nov 16,2021</i>
                <h5 class="event-title">Aenean id lorem efficitur, porttitor eros dapibus</h5>
                <p class="event-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, blanditiis.</p>
                <button class="event-btn">More</button>
            </div>
            <div class="event1">
                <i class="fa fa-calendar fa-6" aria-hidden="true">Nov 16,2021</i>
                <h5 class="event-title">Aenean id lorem efficitur, porttitor eros dapibus</h5>
                <p class="event-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, blanditiis.</p>
                <button class="event-btn">More</button>
                <img src="images/6.png" alt="Pic-2" class="event-img" width="100%">
            </div>
            <div class="event1">
                <img src="images/7.png" alt="Pic-3" class="event-img" width="100%">
                <i class="fa fa-calendar fa-6" aria-hidden="true">Nov 16,2021</i>
                <h5 class="event-title">Aenean id lorem efficitur, porttitor eros dapibus</h5>
                <p class="event-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, blanditiis.</p>
                <button class="event-btn">More</button>
            </div>
        </div>
    </section>
    <section id="gallery">
        <h2 class="main">Our Gallery</h2>
        <div class="gallery-pic">
            <div class="gallery-1">
                <img src="images/pic-1.jpg" alt="pic-1" class="pics" width="100%">
                <img src="images/pic-2.jpg" alt="pic-2" class="pics" width="100%">
                <img src="images/pic-3.jpg" alt="pic-3" class="pics" width="100%">
                <img src="images/pic-4.jpg" alt="pic-4" class="pics" width="100%">
            </div>
            <div class="gallery-1">
                <img src="images/pic-5.jpg" alt="pic-5" class="pics" width="100%">
                <img src="images/pic-6.jpg" alt="pic-6" class="pics" width="100%">
                <img src="images/pic-7.jpg" alt="pic-7" class="pics" width="100%">
                <img src="images/pic-8.jpg" alt="pic-8" class="pics" width="100%">
            </div>
        </div>
    </section>
    <section id="planners">
        <h2 class="main">Our Planners</h2>
        <div class="planners">
            <div class="planner">
                <img src="images/planner-1.jpg" alt="Planner1" class="planner-img" width="100%">
                <h5 class="planner-title">Kane Doe</h5>
                <p class="planner-text">Nam id urna sum</p>
                <hr class="planner-line">
            </div>
            <div class="planner">
                <img src="images/planner-2.jpg" alt="Planner2" class="planner-img" width="100%">
                <h5 class="planner-title">Kane Doe</h5>
                <p class="planner-text">Nam id urna sum</p>
                <hr class="planner-line">
            </div>
            <div class="planner">
                <img src="images/planner-3.jpg" alt="Planner3" class="planner-img" width="100%">
                <h5 class="planner-title">Kane Doe</h5>
                <p class="planner-text">Nam id urna sum</p>
                <hr class="planner-line">
            </div>
            <div class="planner">
                <img src="images/planner-1.jpg" alt="Planner4" class="planner-img" width="100%">
                <h5 class="planner-title">Kane Doe</h5>
                <p class="planner-text">Nam id urna sum</p>
                <hr class="planner-line">
            </div>
        </div>
    </section>
    <section class="ceremony">
        <div class="ceremony-content">
            <h3 class="ceremony-title">Wedding Ceremony</h3>
            <p class="ceremony-text">Lorem ipsum dolor sit amet.</p>
            <i class="fa fa-hand-o-right" aria-hidden="true">Learn More</i>
        </div>
    </section>
    <section id="contact">
        <h2 class="main">Contact</h2>
        <div class="contact-content">
            <div class="contact-info">
                <ul class="contact-nav">
                    <li class="contact-city"><a href="#">New Jersey</a></li>
                    <li class="contact-city"><a href="#">Canada</a></li>
                    <li class="contact-city"><a href="#">UK</a></li>
                </ul>
                <div class="contact-address">
                    <span><i class="fa fa-map-marker fa-8" aria-hidden="true"></i></span>
                    <span class="fa-9">25095 Blue Ravine Rd, Folsom, CA 95630, USA</span>
                </div>
                <div class="contact-phone">
                    <span><i class="fa fa-phone fa-8" aria-hidden="true"></i></span>
                    <span class="fa-9">032 625 4592</span>
                </div>
                <div class="contact-email">
                    <span><i class="fa fa-envelope-o fa-8" aria-hidden="true"></i></span>
                    <span>info@example.com</span>
                </div>
                <div class="contact-media">
                    <span class="Facebook"><i class="fa fa-facebook-official fa-1" aria-hidden="true"></i></span>
                    <span class="Twitter"><i class="fa fa-twitter fa-2" aria-hidden="true"></i></span>
                    <span class="Google+"><i class="fa fa-google-plus-square fa-3" aria-hidden="true"></i></span>
                </div>
                <iframe
                    src="https://google.com/maps/embed/v1/place?key=AIzaSyBrv1ONCmMcGCgVC9sK5rcBgGL1xmLSTKI&q=Lalitpur,Uttar+Pradesh,India"
                    frameborder="0" class="contact-map"></iframe>
            </div>
            <div class="contact-form">
                <div class="contact-form-main">
                    <h4>Get In Touch</h4>
                    <form action="#" class="form">
                        <input type="text" class="name" placeholder="Name">
                        <input type="email" class="email-1" placeholder="Email">
                        <input type="text" class="subject" placeholder="Subject">
                        <input type="text" class="message" placeholder="Message">
                        <button class="contact-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-img"><img src="images/logo.jpg" alt="logo" class="logo"></div>
            <p class="footer-text">&copy; 2017 Wedding Ceremony. All rights reserved | Design by <a href="index.html"
                    class="footer-link">Ishika</a></p>
            <a href="#top" class="footer-arrow"><i class="fa fa-arrow-up footer-arrow-1" aria-hidden="true"></i></a>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>