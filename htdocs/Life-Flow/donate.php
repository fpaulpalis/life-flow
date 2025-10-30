<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = 'donate.php';
    header("Location: login.php");
    exit;
}

include 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name       = trim($_POST['full_name']);
    $gender          = $_POST['gender'] ?? '';
    $age             = trim($_POST['age']);
    $weight          = trim($_POST['weight']);
    $email           = trim($_POST['email']);
    $phone           = trim($_POST['phone']);
    $blood_type      = trim($_POST['blood_type']);
    $medical_history = trim($_POST['medical_history']);

    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO donate_blood
            (user_id, full_name, gender, age, weight, email, phone, blood_type, medical_history)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "issiissss",
        $user_id,
        $full_name,
        $gender,
        $age,
        $weight,
        $email,
        $phone,
        $blood_type,
        $medical_history
    );

    if ($stmt->execute()) {
        header("Location: donate.php?success=1");
        exit;
    } else {
        echo "Error inserting donation record: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Donate Blood </title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="shortcut icon" href="./images/android-chrome-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="./js/dvalid.js"></script>
</head>
<body>
    <nav class="navbar container">
        <div class="logo"> <a href="./index.php"> <img src="./images/Frame 4.png" alt="Website logo"> </a> </div>
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

    <section class="contact d-contact container">
        <h1 class="contact-heading"> Donate Blood </h1>
        <div class="c-wrap d-wrap">
             <form action="donate.php" method="POST" enctype="multipart/form-data" class="contact-form">
                <p class="c-text"> Please fill each and every information correctly: </p>
                <p class="c-text"> Full Name: </p>
                <input type="text" id="fname" name="full_name" required class="c-input">
                <p class="c-text gender"> Gender: </p>
                
                <input type="radio" name="gender" id="male" value="Male">
                <label for="male" class="c-text"> Male </label>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="female" class="c-text"> Female </label>
                <input type="radio" name="gender" id="others" value="Others">
                <label for="others" class="c-text"> Others </label>
                
                <p class="c-text"> Enter your age: </p>
                <input type="text" id="fage" name="age" required class="c-input">
                <p class="c-text"> Enter your current weight: </p>
                <input type="text" id="fweight" name="weight" required class="c-input">
                <p class="c-text"> E-mail: </p>
                <input type="email" id="femail" name="email" required class="c-input">
                <p class="c-text"> Phone no: </p>
                <input type="text" id="fphone" name="phone" required class="c-input">
                <p class="c-text"> Blood Type: </p>
                <input type="text" id="ftype" name="blood_type" required class="c-input">
                <p class="c-text"> Please specify whether you are suffering from any disease or if you previously have suffered: </p>
                <textarea id="fdetails" name="medical_history" cols="50" rows="10"></textarea>
                <p class="c-text"> Please provide a valid ID proof: </p>
                <input type="file" name="id_proof" id="">
                <button type="submit" class="dBtn"> Submit </button>
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
                            <a href="" target="_blank"> 
                                <div class="footer-link-wrapper"> 
                                    <span class="material-symbols-outlined"> chevron_right </span> 
                                    <span class="footer-link-text"> Donate </span> 
                                </div>
                            </a>
                        </div>
                        <div> 
                            <a href="./contact.php" target="_blank"> 
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
        <p class="container cr-text"> Life Flow &copy; &nbsp; | &nbsp ikovlad &nbsp | &nbsp; All rights reserved </p> 
    </section>
</body>
</html>