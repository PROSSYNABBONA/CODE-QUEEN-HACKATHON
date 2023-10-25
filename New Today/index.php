<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Akeff Ventures Tours and Travel</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header section starts -->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><i class="fas fa-paper-plane"></i><span>A</span>keff</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#packages">packages</a>
            <a href="#book">book</a>
            <a href="#team">team</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>
    <!-- header section ends -->

    <!-- login form container -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forgot password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>
    </div>


    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h3>akeff ventures tours and travel</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#" class="btn">about us</a>
        </div>

        <div class="controls">
            <span class="img-btn active" data-src="images/1.jpg"></span>
            <span class="img-btn" data-src="images/2.jpg"></span>
            <span class="img-btn" data-src="images/3.jpg"></span>
            <span class="img-btn" data-src="images/4.jpg"></span>
            <span class="img-btn" data-src="images/5.jpg"></span>
            <span class="img-btn" data-src="images/6.jpg"></span>
        </div>

        <div class="img-container">
            <img src="images/1.jpg" id="photos"></img>
        </div>

    </section>
    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>hotel bookings</h3>
                <p>Hotel booking creates a hotel reservation based on The number of guests, rooms, or both, can be added to a Hotel Booking request to book available rooms that meet the criteria.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Eating and drinking is an essential part of the daily routine. More than that, it is a basic need to keep the functionality of the body. Food and beverages that we consume directly affect our health and energy level.</p>
            </div>
            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car rentals</h3>
                <p>Find the best car rental prices on 4x4 cars, SUVs, economy, family & group vans - We offer cheap Uganda car hire services in over 20 locations countrywide.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>city tours</h3>
                <p>The City Tour services provide transportation for tourists over a fixed route that lets passengers get on and off an unlimited number of times per day (Hop-on Hop-off).</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>ticket bookings</h3>
                <p>ticket booking is the process of reserving and purchasing a ticket for travel. It can be done online, by phone or through a travel agent.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>safaris</h3>
                <p>The best safaris in Uganda including gorilla trekking, wildlife safaris, sightseeing, natural walk tours, village walks with costs.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->


    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/ipi.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> sipi falls hike </h3>
                    <p>Elgon’s main tourist focus is the small trading Centre of Sipi, which lies at an altitude of 1,775m on the mountain’s northeastern foot slopes, only 45km from Mbale along a good surfaced road...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $95.00 </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/33.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> jinja tour experience </h3>
                    <p>This 1 Day Jinja Tour, Sezibwa falls, Mabira forest, Source of the river Nile boat ride in Jinja is by far the best day tour from Kampala as it includes visiting several places and doing several activities...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $55.00 </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/equator.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> equator tour </h3>
                    <p>When in Kampala, the equator is only a drive away—but it’s a long one. This guided tour to the equator from Kampala makes it safe and easy to visit the earth’s dividing line...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $50.00 </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/culture-tours-uganda.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> kampala cultural tour </h3>
                    <p>tour plans and itineraries are specially crafted to reflect the unique blend of culture, history, religious tours, natural attractions of kampala and the surrounding areas as well as a slum tour...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $50.00 </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/water.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> whitewater rafting </h3>
                    <p>Considered as one of the best white water trips in the world, no safari to Uganda would be complete without truly experiencing the Nile from its source with a commitment to safety and quality...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $140.00 </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/Gorilla.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> gorilla trekking </h3>
                    <p>Gorilla trekking in Uganda is the most sought-after activity for most travelers to Uganda, especially those visiting the country for the very first time and it’s not just the hype but trekking through Bwindi or Mgahinga... </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $270.00 </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>
    <!-- packages section ends -->

    <!-- book section starts -->
    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.jpg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>
        </div>
    </section>
    <!-- book section ends -->

    <!-- team section starts -->
    <section class="team" id="team">
        <h1 class="heading">
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span class="space"></span>
            <span>t</span>
            <span>e</span>
            <span>a</span>
            <span>m</span>
        </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/Sha.jpg" alt="">
                </div>
                <div class="content">
                    <h3>namukwaya shakira jamira</h3>
                    <p>ceo</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/Pic.jpg" alt="">
                </div>
                <div class="content">
                    <h3>oluk charles</h3>
                    <p>director</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/Rut.jpg" alt="">
                </div>
                <div class="content">
                    <h3>namukasa ruth</h3>
                    <p>accountant</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/ben.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Okelle Benjamin</h3>
                    <p>manager</p>
                </div>
            </div>
        </div>
    </section>
    <!-- team section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.png" alt="">
            </div>

            <form action="mail.php" method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>

    </section>
    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <a href="#" class="logo"><i class="fas fa-paper-plane"></i><span>A</span>keff</a>
                <p>Akeff Ventures Tours and Travel is a client-focused and result oriented company that will provide an affordable fee for its clients that won’t hinder their pockets. We shall offer standard and professional services to our individual clients and corporate clients at local, state, national and international level.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#packages" class="links"> <i class="fas fa-arrow-right"></i> packages </a>
                <a href="#book" class="links"> <i class="fas fa-arrow-right"></i> book </a>
                <a href="#team" class="links"> <i class="fas fa-arrow-right"></i> team </a>
                <a href="#contact" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p> <i class="fas fa-map"></i> kampala, Uganda </p>
                <p> <i class="fas fa-phone-volume"></i> +256-706-276-143 </p>
                <p> <i class="fas fa-phone"></i> +256-785-197-161 </p>
                <p> <i class="fas fa-envelope"></i> akeffventurestours@gmail.com </p>
                <p> <i class="fas fa-clock"></i> 8:00am - 10:00pm </p>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" class="email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>
        </div>
    </section>

    <div class="credit">copyright &copy; 2022 <span>akeff ventures </span> | all rights reserved!</div>

    <!-- footer section ends -->


    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>