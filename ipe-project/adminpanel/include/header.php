<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<?php
include("./include/db_connect_copy.php");
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $loggedin = true;
    }
    else {
        $loggedin = false;
    }
?>

</script>
<header class="header" id="header">
            <div class="header-top">
                <div class="wrapper">
                    <div class="socials ">
                        <div class="footer-title">Find us here:</div>
                        <div class="socials">
                            <div class="socials__item">
                                <a href="#" target="_blank" class="socials__link">Fb</a>
                            </div>
                            <div class="socials__item">
                                <a href="#" target="_blank" class="socials__link">Ins</a>
                            </div>
                            <div class="socials__item">
                                <a href="#" target="_blank" class="socials__link">In</a>
                            </div>
                        </div>
                    </div>
                    <div class="phone-item">
                        <div class="footer-title header-title-phone">Have a question? Call us!</div>
                        <div class="footer-phone__item">
                            <i class="icon-phone"></i><a href="tel:9717666076">+91-9717666076</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="nav-logo">
                    <a href="index.php" class="logo">
                        <img src="img/uploaded/elogo.png" alt="Ekwik Online">
                    </a>
                </div>
                <div class="header-right">
                    <div id="mainNav" class="menu-box">
                        <div class="footer-menu">
                            <ul class="js-menu-footer">
                                <a href="index.php">  
                                    <li>
                                        Home
                                    </li>
                                </a>
                                <li>
                                    <a href="demo.php">Demo</a>
                                </li>
                                <li>
                                    <a href="q&a.php">Q & A</a>
                                </li>
                                <?php
                                if(!$loggedin){
                                    echo '
                                    <li>
                                    <a class="btn-2" style="padding:13px; padding-left:20px; padding-right:20px; color:white;" href="login.php"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                                    </li>';
                                    echo '
                                    <li>
                                    <a class="btn-2" style="padding:13px; padding-left:20px; padding-right:20px; color:white;" href="signup.php"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Sign Up</a>
                                    </li>';
                                }
                                if($loggedin){                                  
                                    $batch_id = $_SESSION["batchid"];
                                    echo "
                                    <li>
                                    <a href='myaccount.php?bid=$batch_id'>My Profile
                                    </a>
                                    </li>
                                    <li>
                                    <a class='' href='logout.php'> <i class='fa-solid fa-arrow-right-from-bracket'></i> Logout</a>
                                    </li>
                                    ";
                                }
                                    ?>
                            </ul>
                        </div>
                        <div class="socials-item">
                            <div class="footer-title">Find us here:</div>
                            <div class="socials">
                                <div class="socials__item">
                                    <a href="#" target="_blank" class="socials__link">Fb</a>
                                </div>
                                <div class="socials__item">
                                    <a href="#" target="_blank" class="socials__link">Ins</a>
                                </div>
                                <div class="socials__item">
                                    <a href="#" target="_blank" class="socials__link">In</a>
                                </div>
                            </div>
                        </div>
                        <div class="phone-item">
                            <div class="footer-title footer-title_phone">Have a question? Call us!</div>
                            <div class="footer-phone__item">
                                <i class="icon-phone"></i><a href="tel:9717666076">+91-9717666076</a>
                            </div>
                        </div> 
                    </div>
                    <a href="../services/services.php" class="btn-2 ">Services</a>
                </div>
                <div class="bars-mob js-button-nav">
                    <div class="hamburger">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="cross">
                        <span></span><span></span>
                    </div>
                </div>
            </div>
        </header>
        <footer id="footer" class="footer footer-2">
            <div class="footer__bg js-lazy" data-src="img/bg/footer-2.svg"></div>
            <div class="wrapper">
                <a href="index.php" class="logo-footer">
                    <img src="img/uploaded/elogo.png" alt="Ekwik Online">
                </a>
                <div class="socials-item footer-social">
                    <div class="footer-title">Find us here:</div>
                    <div class="socials">
                        <div class="socials__item">
                            <a href="#" target="_blank" class="socials__link">Fb</a>
                        </div>
                        <div class="socials__item">
                            <a href="#" target="_blank" class="socials__link">Ins</a>
                        </div>
                        <div class="socials__item">
                            <a href="#" target="_blank" class="socials__link">In</a>
                        </div>
                    </div>
                </div>
                <div class="phone-item footer-phone">
                    <div class="footer-title footer-title_phone">Have a question? Call us!</div>
                    <div class="footer-phone__item">
                        <i class="icon-phone"></i><a href="tel:9717666076">+91-9717666076</a>
                    </div>
                </div>
                <a href="#formOrder" class="btn-2 btn_started js-fancybox">get started</a>
            </div>
            <div class="footer-bottom">
                <div class="wrapper">
                    <div class="copyrights">©All rights reserved. Ekwik Online 2022</div>
                    <div class="footer-menu">
                        <ul class="js-menu-footer">
                            <a href="index.php">
                                <li>
                                    Home
                                </li>
                            </a>
                            <li>
                                <a href="Aboutus.php">About us</a>
                            </li>
                            <li>
                                <a href="Contactus.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="courses.php">Courses</a>
                            </li>
                            <li>
                                <a href="blog.php">Our Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- BODY EOF   -->
    <!-- popups -->

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        include('./db_connect_copy.php');
        $s_name = $_POST["s_name"];
        $s_email = $_POST["s_email"];
        $s_phone = $_POST["s_phone"];
        $b_name = $_POST["b_name"];
        $b_email = $_POST["b_email"];
        $b_phone = $_POST["b_phone"];
        $s_message = $_POST["s_message"];
        $newsletter = $_POST["newsletter"];
        $sql1 = "INSERT INTO `brochure` (`b_name`, `b_email`, `b_phone`) VALUES ('$b_name', '$b_email', '$b_phone');";
        $result1 = mysqli_query($conn, $sql1);
        $sql2 = "INSERT INTO `consultation` (`s_name`, `s_email`,`s_phone`, `s_message`) VALUES ('$s_name', '$s_email','$s_phone','$s_message')";
        $result2 = mysqli_query($conn, $sql2);
        $sql3 = "INSERT INTO `newsletter` (`newsletter`) VALUES ('$newsletter')";
        $result3 = mysqli_query($conn, $sql3);
        echo '<script>alert("Successfully Submitied ")</script>';
            }
            ?>
    <div class="window-open">
        <div class="popup" id="formOrder2" tabindex="0">
            <div class="block-popup">
                <div class="popup-title-wrap">
                    <div class="popup-title">for Download</div>
                    <div class="popup-decor-top"></div>
                </div>
                <div class="popup-text">Culpa non ex tempor qui nulla laborum. Laboris culpa ea incididunt dolore ipsum tempor duis do ullamc.</div>
                <form method="POST" action="brochure.php">
                    <div class="popup-form">
                        <div class="box-field">
                            <input type="text" placeholder="Name" id="b_name" name="b_name" required>
                        </div>
                        <div class="box-field">
                            <input type="tel" placeholder="Phone No" id="b_phone" name="b_phone" minlength="10" maxlength="10" required>
                        </div>
                        <div class="box-field">
                            <input type="email" placeholder="Email" id="b_email" name="b_email" required>
                        </div>
                        <div class="box-fileds box-fileds_2">
                            <div class="box-filed box-filed_btn">
                                <button type="submit" class="btn" value="Submit">Submit</button>
                            </div>
                            <div class="box-filed box-field__accept">
                                <label class="checkbox-element">
                                    <input type="checkbox" >
                                    <span class="checkbox-text">I accept the <a href="#" target="_blank">Terms and Conditions.</a></span>
                                    </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="popup-decor"></div>
        </div>
        <div class="popup popup-succsess" id="succsesOrder2">
    <!-- popups -->
    <div class="window-open">
        <div class="popup" id="formOrder" tabindex="0">
            <div class="block-popup">
                <div class="popup-title-wrap">
                    <div class="popup-title">Get a free consultation</div>
                    <div class="popup-decor-top"></div>
                </div>
                <!-- <div class="popup-text">Culpa non ex tempor qui nulla laborum. Laboris culpa ea incididunt dolore ipsum tempor duis do ullamc.</div> -->
                <form method="POST" >
                    <div class="popup-form">
                        <div class="box-field">
                            <input type="text" placeholder="Name" id="s_name" name="s_name" required>
                        </div>
                        <div class="box-field">
                            <input type="email" placeholder="Email" id="s_email" name="s_email" required>
                        </div>
                        <div class="box-field">
                            <input type="tel" placeholder="Contact Number" id="s_phone" name="s_phone" required>
                        </div>
                        <div class="box-field">
                            <textarea placeholder="Message" id="s_message" name="s_message" required></textarea>
                        </div>
                        <div class="box-fileds box-fileds_2">
                            <div class="box-filed box-filed_btn">
                                <input type="submit" class="btn" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="popup-decor"></div>
        </div>
        <div class="popup popup-succsess" id="succsesOrder">
            <div class="block-popup">
                <div class="popup-title"><span>Sank you</span></div>
                <div class="popup-result">Dolor duis voluptate enim exercitation consequat ex. Voluptate </div>
                <svg width="200" height="184" viewBox="0 0 200 184" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M178.566 91.6643C178.566 139.987 139.392 179.162 91.0686 179.162C42.744 179.162 3.57129 139.987 3.57129 91.6643C3.57129 43.3397 42.744 4.16699 91.0686 4.16699C139.392 4.16699 178.566 43.3397 178.566 91.6643Z" fill="rgba(255, 154, 160, 0.991703)"/>
                        <path d="M91.6644 183.327C41.1242 183.327 0 142.205 0 91.6644C0 41.1242 41.1242 0 91.6644 0C109.23 0 126.33 5.01694 141.112 14.4908C144.02 16.3585 144.863 20.2249 143.004 23.124C141.138 26.0246 137.262 26.8745 134.371 25.0084C121.597 16.833 106.839 12.4996 91.6644 12.4996C48.0149 12.4996 12.4996 48.0149 12.4996 91.6644C12.4996 135.312 48.0149 170.828 91.6644 170.828C135.312 170.828 170.828 135.312 170.828 91.6644C170.828 89.0552 170.703 86.472 170.461 83.9315C170.129 80.4984 172.645 77.4391 176.086 77.1141C179.494 76.6731 182.569 79.2975 182.903 82.7307C183.185 85.6725 183.327 88.6478 183.327 91.6644C183.327 142.205 142.205 183.327 91.6644 183.327Z" fill="rgba(249, 73, 115, 0.991703)"/>
                        <path d="M102.08 112.496C100.481 112.496 98.8799 111.887 97.6638 110.663L60.165 73.1643C57.7237 70.7214 57.7237 66.7634 60.165 64.3221C62.6063 61.8808 66.5643 61.8808 69.0057 64.3221L102.089 97.4052L189.327 10.1657C191.77 7.72438 195.728 7.72438 198.169 10.1657C200.61 12.607 200.61 16.5651 198.169 19.0064L106.505 110.671C105.279 111.887 103.68 112.496 102.08 112.496Z" fill="rgba(249, 73, 115, 0.991703)"/>
                    </svg>
                <div class="popup-text">Dolor duis voluptate enim exercitation consequat ex. Voluptate </div>
                <div class="popup-button_succsees">
                    <div class="btn btn-popup" data-fancybox-close>Ok</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var body = document.body;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            body.classList.add("ios");
        } else {
            body.classList.add("web")
        }
        setTimeout(function() {
            body.classList.add("content-loaded");
        }, 50)
    </script>
    <style>
        body {
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
        }
    </style>


   
