<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - The Foodie</title>
    <!-- CSS and Bootstrap Files -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Favicon Icon -->
    <link rel="icon" href="../img/foodie-b.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gudea:wght@700&display=swap" rel="stylesheet">
    <!-- Fonts Used in Website -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS for Cart Icon -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>
    <div>
        <!-- Header -->
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid">
                    <!-- Website Logo   -->
                    <a class="navbar-brand" href="#"> <img src="../img/header-logo.png" alt="The Foodie"
                            class="header-logo"> </a>
                    <!-- Menu Button for Mobile View  -->
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        class="navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menu  -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav-list navbar-nav">
                            <li class="nav-item"><a class="nav-link " href="./index.php">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="./menu.php">MENU</a></li>
                            <li class="nav-item"><a class="nav-link" href="./gallery.php">GALLERY</a></li>
                            <li class="active nav-item"><a class="nav-link" href="./aboutus.php">ABOUT US</a></li>
                            <li class="nav-item"><a class="nav-link" href="./contact.php">CONTACT US</a></li>
                            <li class="cart nav-item">
                                <a href="./cart.php" class="nav-link">
                                    <ion-icon name="basket"></ion-icon><span>0</span>
                                </a>
                            </li>
                            <li class="nav-item me-2"> <?php include 'dashboard.php'; ?>  </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Background Cover  -->
        <div class="about-bc">
            <div>
                <!-- Cover Info  -->
                <div class="page-about-info">
                    <img class="page-info-logo" src="../img/foodie-a.png" alt="">
                    <h1>ABOUT US</h1>

                </div>
                <!-- Menu Button  -->
                <div class="menu-btn-area" style="gap: 10px;">
                    <button class="info-menu-btn"><a class="cover-btns" href="./index.php">HOME</a></button>
                    <button class="info-menu-btn"><a class="cover-btns" href="./menu.php">MENU</a></button>
                </div>
            </div>
        </div>

        <!-- Welcome Section  -->
        <div class="welcome-container">
            <div class="welcome-description">
                <h1>WELCOME</h1>
                <h4>Who We Are</h4>
                <p>“<strong>Fooddy 24/7 </strong> is young fast growing company that works to make your life easier. We take
                    responsibility for making sure that your orders from restaurants are delivered to you safely
                    and quickly.”</p>
                <!-- Icons  -->
                <div class="welcome-desc-list">
                    <ul class="welcome-desc-items-list">
                        <li><i class="bi bi-clock"></i>&nbsp;&nbsp;24/7 DELIVERY</li>
                        <li><div class="welcome-desc-list-gaps"></div></li>
                        <li><i class="bi bi-shop"></i>&nbsp;&nbsp;QUALITY FOOD</li>
                    </ul>
                </div>
            </div>
            <div class="welcome-food-img">
                <img class="welcome-img" src="../img/welcomeabout.png" alt="">
            </div>
        </div>

        <!-- Team Section  -->
        <div class="team-section">
            <div class="teams-box">
                <div class="teams-heading">
                    <h2>OUR TEAM</h2>
                    <h5>The best of Professionals</h5>
                </div>
                <div class="team-details-section">
                    <!-- Dishes Boxes  -->
                    <div class="team-intro-section">
                        <div class="team-sec-row"><img class="team-pic-imgs" src="../img/team/tm1.jpg" alt=""> <br>
                            <div class="team-intro-member-name">Team Member 1</div>
                            <h4>CEO</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="team-sec-row"><img class="team-pic-imgs" src="../img/team/tm1.jpg" alt=""> <br>
                            <div class="team-intro-member-name">Team Member 2</div>
                            <h4>Security Manager</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="team-sec-row"><img class="team-pic-imgs" src="../img/team/tm1.jpg" alt=""> <br>
                            <div class="team-intro-member-name">Team Member 3</div>
                            <h4>Finance Manager</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why people Choose us Section  -->
        <div class="why-people-choose-us">
            <div class="why-people-choose-us-box">
                <div class="why-people-choose-us-heading">
                    <h3>WHY PEOPLE CHOOSE US</h3>
                    <h5>Clients’ Most Popular Choise</h5>
                </div>
                <div class="reasons-section">
                    <div class="reasons-list-a-section" >
                        <div class="reasons-list-element-wise">
                            <div class="reasons-list-a-elements">
                                <div class="reasons-list-a-text">
                                    30,000 Restaurants Menus
                                </div>
                                <div class="reasons-list-a-number">
                                    <div class="circles-position-reasons-list">
                                        <div class="reasons-steps-number">1</div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: right; width: 240px; ">Mobile App allows you to choose restaurant, view price and check order.</p>
                        </div>

                        <div class="reasons-list-element-wise">
                            <div class="reasons-list-a-elements">
                                <div class="reasons-list-a-text">
                                    30,000 Restaurants Menus
                                </div>
                                <div class="reasons-list-a-number">
                                    <div class="circles-position-reasons-list">
                                        <div class="reasons-steps-number">2</div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: right; width: 240px; ">This allows you to order quickly and easily. Accessible at any time.</p>
                        </div>

                        <div class="reasons-list-element-wise">
                            <div class="reasons-list-a-elements">
                                <div class="reasons-list-a-text">
                                    Free Mobile Application
                                </div>
                                <div class="reasons-list-a-number">
                                    <div class="circles-position-reasons-list">
                                        <div class="reasons-steps-number">3</div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: right; width: 240px; ">Mobile App allows you to choose restaurant, view price and check order.</p>
                        </div>
                    </div>

                    <div class="reasons-order-img">
                        <img class="order-mockup" src="../img/foodie-mockup.png" alt="">
                    </div>
                    
                    <div class="reasons-list-b-section">
                        <div class="reasons-list-element-wise">
                            <div class="reasons-list-a-elements">
                                <div class="reasons-list-a-text">
                                    Easy Online Ordering
                                </div>
                                <div class="reasons-list-a-number">
                                    <div class="circles-position-reasons-list">
                                        <div class="reasons-steps-number">4</div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: right; width: 240px; ">Once logged in, you can easily navigate around the site to complete your order.</p>
                        </div>

                        <div class="reasons-list-element-wise">
                            <div class="reasons-list-a-elements">
                                <div class="reasons-list-a-text">
                                    100% positive feedbacks
                                </div>
                                <div class="reasons-list-a-number">
                                    <div class="circles-position-reasons-list">
                                        <div class="reasons-steps-number">5</div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: right; width: 240px; ">We care about our customers, that is why we get 100% positive feedbacks.</p>
                        </div>

                        <div class="reasons-list-element-wise">
                            <div class="reasons-list-a-elements">
                                <div class="reasons-list-a-text">
                                    Fast Guaranteed Delivery

                                </div>
                                <div class="reasons-list-a-number">
                                    <div class="circles-position-reasons-list">
                                        <div class="reasons-steps-number">6</div>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align: right; width: 240px; ">We take responsibility for making sure that order are delivered to you safely..</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Us Section  -->
        <div class="sub-us-cont-about">
            <div class="sub-us-heading">
                <h1>Subscribe Us</h1>
            </div>
            <div class="subscribe-from">
                <form action="" method="post">
                    <input type="email" placeholder="Enter Your Email">
                    <button type="button">Submit</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="flexbox-container-about">
            <div class="flexbox-item-about flexbox-item-1">
                <div class="footer-desc">
                    <div class="footer-logo">
                        <a href="#"> <img src="../img/header-logo.png" alt="The Foodie" class="header-logo"> </a>
                    </div>
                    <div class="footer-description">
                        <h3>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas nisi culpa, vel porro
                            consequatur alias deserunt nihil non aperiam? Eum voluptas quis ullam corrupti doloremque
                            unde quaerat nulla omnis cumque!
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flexbox-item-about flexbox-item-about-2">
                <div class="footer-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="./index.php"><i
                                    class="bi bi-caret-right icon-color me-2"></i>HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="./menu.php"><i
                                    class="bi bi-caret-right icon-color me-2"></i>MENU</a></li>
                        <li class="nav-item"><a class="nav-link" href="./gallery.php"><i
                                    class="bi bi-caret-right icon-color me-2"></i>GALLERY</a></li>
                        <li class="nav-item"><a class="nav-link" href="./aboutus.php"><i
                                    class="bi bi-caret-right icon-color me-2"></i>ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contact.php"><i
                                    class="bi bi-caret-right icon-color me-2"></i>CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="flexbox-item-about flexbox-item-3">
                <div class="footer-social">
                    <i class="bi bi-caret-right icon-color"></i>
                    <a href="#" class="fa fa-facebook"></a>
                    <span class="font-setting"> Facebook </span> <br>
                    <i class="bi bi-caret-right icon-color"></i>
                    <a href="#" class="fa fa-twitter"></a>
                    <span class="font-setting"> Twitter </span> <br>
                    <i class="bi bi-caret-right icon-color"></i>
                    <a href="#" class="fa fa-google"></a>
                    <span class="font-setting"> Google </span> <br>
                    <i class="bi bi-caret-right icon-color"></i>
                    <a href="#" class="fa fa-instagram"></a>
                    <span class="font-setting"> Instagram </span> <br>
                </div>
            </div>
            <div class="flexbox-item-about flexbox-item-4">
                <div class="footer-description">
                    <h3>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas nisi culpa, vel porro consequatur
                        alias deserunt nihil non aperiam? Eum voluptas quis ullam corrupti doloremque unde quaerat nulla
                        omnis cumque!
                    </h3>
                </div>
            </div>
        </div>

        <div class="last-footer-about">
            <footer>
                All Rights Reserved &copy; Copyright 2022 Thefoodie.com
            </footer>
        </div>

    </div>

    <!-- Javascript from Bootsrtap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Javascript for Add to Cart Icon -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- Javascript File -->
    <script src="../js/javascript.js" ></script>

</body>
</html>