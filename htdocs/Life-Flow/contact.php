<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = 'contact.php';
    header("Location: login.php");
    exit;
}

include 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname     = trim($_POST['fname']);
    $gender    = $_POST['gender'] ?? '';
    $email     = trim($_POST['femail']);
    $phone     = trim($_POST['fphone']);
    $bloodtype = trim($_POST['ftype']);
    $address   = trim($_POST['fdetails']);

    $user_id = $_SESSION['user_id']; 
    $sql = "INSERT INTO need_blood (user_id, full_name, gender, email, phone, blood_type, address)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss", $user_id, $fname, $gender, $email, $phone, $bloodtype, $address);

    if ($stmt->execute()) {
        header("Location: contact.php?success=1");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Recieve Blood </title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="shortcut icon" href="./images/android-chrome-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="./js/rvalid.js"></script>
</head>
<body> 
    <nav class="navbar container">
        <div class="logo"> <a href="./index.html"> <img src="./images/Frame 4.png" alt="Website logo"> </a> </div>
        <div class="nav-item-wrapper">
            <ul class="nav-items">
                <li class="nav-item-1"> <a href="./index.php"> Home </a> </li>
                <li class="nav-item-2"> <a href="./index.php#BLOG"> Blogs </a> </li>
                <li class="nav-item-3"> <a href="./contact.php"> Need Blood </a> </li>
                <li class="nav-item-3"> <a href="./donate.php"> Donate Blood </a> </li>
            </ul>
        </div>
            <div class="nav-right">
        <?php if (isset($_SESSION['user_id'])): ?>
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

    <section class="contact container">
        <h1 class="contact-heading"> Recieve </h1>
        <div class="c-wrap">
            <form action="contact.php" method="POST" class="contact-form" onsubmit="return rValidate()">
                <p class="c-text"> Please fill each and every information correctly: </p>
                <p class="c-text"> Full Name: </p>
                <input type="text" name="fname" id="fname" required class="c-input">
                <p class="c-text gender"> Gender: </p>
                
                <input type="radio" name="gender" id="male" value="Male">
                <label for="male" class="c-text"> Male </label>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="female" class="c-text"> Female </label>
                <input type="radio" name="gender" id="others" value="Others">
                <label for="others" class="c-text"> Others </label>
                
                <p class="c-text"> E-mail: </p>
                <input type="email" name="femail" id="femail" required class="c-input">
                <p class="c-text"> Phone no: </p>
                <input type="text" name="fphone" id="fphone" required class="c-input">
                <p class="c-text"> Blood Type: </p>
                <input type="text" name="ftype" id="ftype" required class="c-input">
                <p class="c-text"> Please provide your address: </p>
                <textarea name="fdetails" id="fdetails" cols="50" rows="10"></textarea>
                <p class="c-text"> Please provide a valid ID proof which will be checked before delivery: </p>
                <input type="file" name="id_proof" id="id_proof" required class="c-input">
                <button type="submit" class="submitBtn" onclick="rValidate()"> Submit </button>
            </>
        </div>
	</section>

    <section class="footer">
        <div class="foot-wrap container">
            <div class="left-items-wrap">
                <div class="foot-links-wrap container">
                    <div class="q-links-wrapper">
                        <h3 class="q-links"> Quick Links </h3>
                        <div> 
                            <a href="https://en.wikipedia.org/wiki/Blood_donation" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> About Blood Donation </span> 
                                </div> 
                            </a> 
                        </div>
                        <div> 
                            <a href="./donate.php" target="_blank">  
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> Donate </span> 
                                </div>
                            </a>
                        </div>
                        <div> 
                            <a href="./contact.html" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> Contact Us </span> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="imp-links-wrapper">
                        <h3 class="imp-links"> Important Links </h3>
                        <div> 
                            <a href="" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> Privacy </span> 
                                </div>
                            </a> 
                        </div>
                        <div> 
                            <a href="" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> Cookies </span> 
                                </div>    
                            </a>
                        </div>
                        <div> 
                            <a href="" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> Terms and Conditions </span> 
                                </div>
                            </a> 
                        </div>
                        <div>
        
                        </div>
                    </div>
                </div>
                <div class="sm-links container">
                    <a href=""> <img src="./images/facebook.png" alt=""> </a>
                    <a href=""> <img src="./images/instagram.png" alt=""> </a>
                    <a href=""> <img src="./images/twitter.png" alt=""> </a>
                </div>
            </div>
            <hr class="foot-breaker">
            <div class="right-text-wrap container">
                <div class="foot-l-text"> "Be the flow that saves lives" </div>
                <div> <button type="submit" class="login-btn primary-btn"> Donate </button> </div>
            </div>
        </div>
        <p class="container cr-text">Life Flow  &copy; &nbsp; | &nbsp ikovlad  &nbsp | &nbsp; All rights reserved </p> 
    </section>
</body>
</html>