<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Flow</title>
    <!-- Your main CSS -->
    <link rel="stylesheet" href="./css/style.css">
    
    <link rel="shortcut icon" href="./images/android-chrome-192x192.png" type="image/x-icon">
    
    <!-- Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <!-- DYNAMIC PHP NAVBAR -->
    <nav class="navbar container">
        <div class="logo">
            <a href="./index.php">
                <img src="./images/Frame 4.png" alt="Website Logo">
            </a>
        </div>
        <div class="nav-item-wrapper">
            <ul class="nav-items">
                <li><a href="./index.php">Home</a></li>
                <li><a href="#BLOG">Blogs</a></li>
                <li><a href="./contact.php">Need Blood</a></li>
                <li><a href="./donate.php">Donate Blood</a></li>
            </ul>
        </div>
            <div class="nav-right">
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Logged in: show Profile and Logout in the same style as before -->
            <div>
                <a href="profile.php">
                    <button type="submit" class="login-btn primary-btn">Profile</button>
                </a>
            </div>
            <div>
                <a href="logout.php">
                    <button type="submit" class="sign-up-btn secondary-btn">Logout</button>
                </a>
            </div>
        <?php else: ?>
            <!-- Not logged in: show Login and Sign-up in the same style as before -->
            <div>
                <a href="login.php">
                    <button type="submit" class="login-btn primary-btn">Login</button>
                </a>
            </div>
            <div>
                <a href="signup.php">
                    <button type="submit" class="sign-up-btn secondary-btn">Sign-up</button>
                </a>
            </div>
        <?php endif; ?>
    </div>
    </nav>

    <section class="appointment-wrap container">
        <div class="appointment">
            <div class="appointment-circle">
                <a href="./donate.php"> 
                    <span class="material-symbols-outlined"> phone_in_talk </span>
                </a>
            </div>
            <div class="appointment-text">
                <p>Book an appointment</p>
            </div>
        </div>
    </section>

    <section class="showcase-bg container">
        <div class="bg-image">
            <img src="./images/blood-donation.png" alt="Picture of a doctor, a donor and a receiver">
        </div>
        <form class="form-1" onsubmit="return googleMapsSearch()">
            <input type="text" id="search-box" class="search-box" placeholder="Search for cities and drives">
            <button type="submit" class="comp-btn">
                <span class="material-symbols-outlined">search</span>
            </button>
            <button type="submit" class="mob-btn primary-btn">Search</button>
        </form>
        <div class="bd-info-wrap">
            <h1 class="bd-info-head">Blood Donation</h1>
            <p class="bd-info-text">
                A blood donation occurs when a person voluntarily has blood drawn and used for transfusions 
                and/or made into biopharmaceutical medications by a process called fractionation (separation 
                of whole blood components). Donation may be of whole blood, or of specific components directly 
                (apheresis). Blood banks often participate in the collection process as well as the procedures 
                that follow it.
            </p>
            <a href="https://en.wikipedia.org/wiki/Blood_donation" target="_blank" class="know-more-btn">
                <button class="primary-btn">Know More</button>
            </a>
        </div>
    </section>
    
    <section class="blog-wrap" id="BLOG">
        <h1 class="blog-head container">Highlights</h1>
        <div class="box-wrap container">
            <div class="box">
                <img src="./images/covid_donate.jpg" alt="Blood donation in covid19">
                <h3 class="box-head">Can we donate in covid?</h3>
                <p class="box-text">
                    Coronavirus disease 2019 (COVID-19) is a contagious disease caused by a virus, the severe acute 
                    respiratory syndrome coronavirus 2. Know how to donate blood in covid.
                </p>
                <div class="box-link-wrapper">
                    <a href="https://www.redcrossblood.org/donate-blood/dlp/coronavirus--covid-19--and-blood-donation.html" target="_blank">
                        <div class="box-btn"> 
                            <span class="material-symbols-outlined"> double_arrow </span>
                            <span class="rm-text">Read More</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="./images/first-donate.jpg" alt="Donating blood for first time">
                <h3 class="box-head">Donating blood for the first time</h3>
                <p class="box-text">
                    We need new donors. Start your journey in saving the life of someone needy. Know the process 
                    of becoming a donor.
                </p>
                <div class="box-link-wrapper">
                    <a href="https://www.blood.co.uk/the-donation-process/giving-blood-for-the-first-time/" target="_blank">
                        <div class="box-btn">
                            <span class="material-symbols-outlined"> double_arrow </span>
                            <span class="rm-text">Read More</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="./images/plasma-donate.jpg" alt="Donate your plasma">
                <h3 class="box-head">Donate plasma</h3>
                <p class="box-text">
                    Plasma is needed to create unique life-saving medicines to help save and transform the 
                    lives of over 17,000 people each year. Amazingly, this medicine is in you. Give plasma 
                    and help save lives.
                </p>
                <div class="box-link-wrapper">
                    <a href="https://www.blood.co.uk/plasma/" target="_blank">
                        <div class="box-btn">
                            <span class="material-symbols-outlined"> double_arrow </span>
                            <span class="rm-text">Read More</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="dr-wrap container">
        <div class="dr">
            <div class="donate">
                <img src="./images/doing-blood-donate.jpg" alt="">
                <h1 class="donate-head">Become a blood donor</h1>
                <p class="dr-text">
                    Your precious blood can help save the life of someone in need. If you want to be a part of 
                    this good cause, click below to know how.
                </p>
                <a href="./donate.php"><button class="donate-btn">Donate</button></a>
            </div>
            <div class="recieve">
                <img src="./images/blood-recieve.jpg" alt="">
                <h1 class="recieve-head">In need of blood?</h1>
                <p class="dr-text">
                    We are ready to help you 24/7. Our organization will help save someone’s life—your blood 
                    is ready. Click below to contact us.
                </p>
                <a href="./contact.php"><button class="recieve-btn">Contact</button></a>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="foot-wrap container">
            <div class="left-items-wrap">
                <div class="foot-links-wrap container">
                    <div class="q-links-wrapper">
                        <h3 class="q-links">Quick Links</h3>
                        <div> 
                            <a href="https://en.wikipedia.org/wiki/Blood_donation" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text">About Blood Donation</span> 
                                </div> 
                            </a>  
                        </div>
                        <div> 
                            <a href="./donate.php" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text">Donate</span> 
                                </div>
                            </a>
                        </div>
                        <div> 
                            <a href="./contact.php" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text">Contact Us</span> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="imp-links-wrapper">
                        <h3 class="imp-links">Important Links</h3>
                        <div> 
                            <a href="https://privacy.gov.ph/data-privacy-act/" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text">Privacy</span> 
                                </div>
                            </a> 
                        </div>
                        <div> 
                            <a href="https://www.cookielawinfo.com/cookie-law/" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text">Cookies</span> 
                                </div>    
                            </a>
                        </div>
                        <div> 
                            <a href="./terms_conditions.php" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text">Terms and Conditions</span> 
                                </div>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="sm-links container">
                    <a href="#"><img src="./images/facebook.png" alt=""></a>
                    <a href="#"><img src="./images/instagram.png" alt=""></a>
                    <a href="#"><img src="./images/twitter.png" alt=""></a>
                </div>
            </div>
            <hr class="foot-breaker">
            <div class="right-text-wrap container">
                <div class="foot-l-text">"Be the flow that saves lives"</div>
                <div>
                    <a href="./donate.php">
                        <button type="submit" class="login-btn primary-btn">Donate</button>
                    </a>
                </div>
            </div>
        </div>
        <p class="container cr-text">
            Life Flow &copy; &nbsp; | &nbsp; ikovlad &nbsp; | &nbsp; All rights reserved
        </p> 
    </section>
</body>
<script>
    function googleMapsSearch() {
        var query = document.getElementById("search-box").value.trim();
        if (!query) {
            alert("Please enter a city or location to search.");
            return false;
        }

        var mapsUrl = "https://www.google.com/maps/search/blood+banks+near+" + encodeURIComponent(query);

        window.open(mapsUrl, "_blank");

        return false;
    }
</script>
</html>
