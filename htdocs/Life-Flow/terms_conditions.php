<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Life Flow - Terms and Conditions</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/android-chrome-192x192.png" type="image/x-icon">

    <!-- Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
</head>
<body>
    <!-- DYNAMIC PHP NAVBAR (copied from index.php) -->
    <nav class="navbar container">
        <div class="logo">
            <a href="./index.php">
                <img src="./images/Frame 4.png" alt="Website Logo">
            </a>
        </div>
        <div class="nav-item-wrapper">
            <ul class="nav-items">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./index.php#BLOG">Blogs</a></li>
                <li><a href="./contact.php">Need Blood</a></li>
                <li><a href="./donate.php">Donate Blood</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Logged in: show Profile and Logout -->
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
                <!-- Not logged in: show Login and Sign-up -->
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

    <section class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <h1 style="font-size: 3rem; margin-bottom: 2rem;">Terms and Conditions</h1>

        <p style="font-size: 1.4rem; line-height: 1.6;">
            Welcome to Life Flow. These terms and conditions outline the rules and regulations for the use of
            our website, located at <strong>www.lifeflow.com</strong>. By accessing this website, we assume you
            accept these terms and conditions in full. Do not continue to use Life Flow if you do not agree to
            take all of the terms and conditions stated on this page.
        </p>

        <p style="font-size: 1.4rem; line-height: 1.6;">
            The following terminology applies to these Terms and Conditions, our Privacy Statement, and all Agreements:
            “Client,” “You,” and “Your” refers to you, the person logging on this website and compliant with the
            Company’s terms and conditions. “The Company,” “Ourselves,” “We,” “Our,” and “Us,” refers to our
            Company, Life Flow. “Party,” “Parties,” or “Us,” refers to both the Client and ourselves.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Use of the Website</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            By using this website, you warrant that you are at least 18 years of age and that you will not use
            this website for any unlawful purpose, including but not limited to violating any intellectual
            property or privacy rights. You agree to provide accurate information, and you understand that any
            false information may result in the termination of your account and access to our services.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Privacy and Data Protection</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            We are committed to protecting your privacy. Please review our <a href="https://privacy.gov.ph/data-privacy-act/" target="_blank">Privacy Policy</a> for
            details on how we collect, use, and disclose information about you. By using our website, you consent
            to the processing of your personal data as described therein.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Cookies</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            We employ the use of cookies. By accessing Life Flow, you agreed to use cookies in agreement with our
            <a href="https://www.cookielawinfo.com/cookie-law/" target="_blank">Cookies Policy</a>. Most interactive websites use cookies to let us retrieve
            user details for each visit. Cookies are used by our website to enable the functionality of certain areas
            to make it easier for people visiting our website.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Intellectual Property Rights</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            Unless otherwise stated, Life Flow and/or its licensors own the intellectual property rights for all
            material on this site. All intellectual property rights are reserved. You may access this from Life Flow
            for your own personal use, subject to restrictions set in these terms and conditions.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">User Accounts</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            If you create an account on our website, you are responsible for maintaining the security of your
            account and any activities that occur under it. We reserve the right to terminate accounts, edit or
            remove content, and cancel orders at our sole discretion.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Limitations of Liability</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            In no event shall Life Flow or its suppliers be liable for any damages arising out of the use or
            inability to use the materials on this website, even if Life Flow or an authorized representative
            has been notified orally or in writing of the possibility of such damage.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Indemnification</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            You agree to indemnify and hold harmless Life Flow, its officers, directors, employees, and agents,
            from any claims, liabilities, damages, losses, or expenses (including legal fees) arising out of
            your use of the site, including but not limited to your violation of these Terms and Conditions.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Changes to Terms</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            We reserve the right to revise these Terms and Conditions at any time. By using this website, you
            are expected to review such Terms and Conditions on a regular basis to ensure you understand all
            terms and conditions governing use of this website.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Governing Law & Jurisdiction</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            These Terms will be governed by and interpreted in accordance with the laws of [Your Country/State],
            and you submit to the non-exclusive jurisdiction of the courts located in [Your Country/State] for
            the resolution of any disputes.
        </p>

        <h2 style="font-size: 2rem; margin: 2rem 0 1rem;">Contact Us</h2>
        <p style="font-size: 1.4rem; line-height: 1.6;">
            If you have any questions about these Terms, please contact us at
            <a href="mailto:support@lifeflow.com">support@lifeflow.com</a>.
        </p>

        <p style="font-size: 1.4rem; line-height: 1.6;">
            By continuing to use our site, you hereby agree to these Terms and Conditions. 
        </p>
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
</html>
