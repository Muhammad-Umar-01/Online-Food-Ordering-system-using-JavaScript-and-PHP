<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu - The Foodie</title>
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
                            <li class="active nav-item"><a class="nav-link" href="./menu.php">MENU</a></li>
                            <li class="nav-item"><a class="nav-link" href="./gallery.php">GALLERY</a></li>
                            <li class="nav-item"><a class="nav-link" href="./aboutus.php">ABOUT US</a></li>
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
        <div class="menu-bc" >
            <div>
                <!-- Cover Info  -->
                <div class="page-about-info">
                    <img class="page-info-logo" src="../img/foodie-a.png" alt="">
                    <h1>MENU</h1>
                </div>
                <!-- Menu Button  -->
                <div class="menu-btn-area" style="gap: 10px;">
                    <button class="info-menu-btn"><a class="cover-btns" href="./index.php">HOME</a></button>
                </div>
            </div>
        </div>

        <!-- Menu Section  -->
        <div class="menu-dishes" id="menu-dishes" >
            <div class="menu-section-box">
                <!-- Text  -->
                <div class="menu-dishes-heading">
                    <h1>WHAT’S POPULAR</h1>
                </div>
                <!-- Dishes Boxes  -->
                <div class="menu-dishes-into">
                    <div class="menu-dishes-cont"><img class="pop-menu-pic-imgs" src="../img/menu/chickenbeef.jpg"
                            alt=""> <br>
                        <div class="menu-dish-name">Burger </div>
                        <p class="menu-dish-description">With basil, mozzarella, tomatoes</p>
                        <p class="menu-section-dishes-price"><i class="bi bi-currency-dollar"></i>10.00</p>
                        <div class="menu-icons-stars">
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-half"></i>
                        </div>
                        <button class="menu-order-btn add-cart"><i class="bi bi-cart ">&nbsp;</i>ADD TO CART</button>
                    </div>
                    <div class="menu-dishes-cont"><img class="pop-menu-pic-imgs" src="../img/menu/pizza.jpg" alt="">
                        <br>
                        <div class="menu-dish-name">Pizza </div>
                        <p class="menu-dish-description">With basil, mozzarella, tomatoes</p>
                        <p class="menu-section-dishes-price"><i class="bi bi-currency-dollar"></i>25.00</p>
                        <div class="menu-icons-stars">
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star"></i>
                        </div>
                        <button class="menu-order-btn add-cart"><i class="bi bi-cart">&nbsp;</i>ADD TO CART</button>
                    </div>
                    <div class="menu-dishes-cont"><img class="pop-menu-pic-imgs" src="../img/menu/steaks.jpg" alt="">
                        <br>
                        <div class="menu-dish-name">Steak </div>
                        <p class="menu-dish-description">With basil, mozzarella, tomatoes</p>
                        <p class="menu-section-dishes-price"><i class="bi bi-currency-dollar"></i>15.00</p>
                        <div class="menu-icons-stars">
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star"></i>
                            <i class="star-icons bi bi-star"></i>
                        </div>
                        <button class="menu-order-btn add-cart"><i class="bi bi-cart">&nbsp;</i>ADD TO CART</button>
                    </div>
                    <div class="menu-dishes-cont"><img class="pop-menu-pic-imgs" src="../img/menu/shawarma.jpg" alt="">
                        <br>
                        <div class="menu-dish-name">shawarma </div>
                        <p class="menu-dish-description">With basil, mozzarella, tomatoes</p>
                        <p class="menu-section-dishes-price"><i class="bi bi-currency-dollar"></i>5.00</p>
                        <div class="menu-icons-stars">
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                            <i class="star-icons bi bi-star-fill"></i>
                        </div>
                        <button class="menu-order-btn add-cart" id=""><i class="bi bi-cart">&nbsp;</i>ADD TO CART</button>
                    </div>
                </div>
                <!-- Button -->

            </div>
        </div>

        <!--  How to order online -->
        <div class="order-steps-section-menu-page" >
            <div class="inside-order-steps-section">
                <div class="inside-order-steps-section-a">
                    <h1>FREE DELIVERY</h1>
                    <a style="text-decoration: none; color: white;" href="menu.html#menu-dishes"><button class="menu-order-btn">ORDER NOW</button></a>
                </div>
                <div class="inside-order-steps-section-b">
                    <h1>ALL YOUR FAVOURITE FOOD</h1>
                    <h3>IN ONE PLACE</h3>
                </div>
            </div>
            <div class="order-steps-heading">
                <h1>GET YOUR FAST FOOD READY</h1>
                <h1>HOW TO ORDER ?</h1>
            </div>
            <!-- Icons  -->
            <div class="order-steps-list-section">
                <div class="order-steps-row"><img class="order-icons-imgs" src="../img/icons/location.png" alt=""> <br>
                    <div class="circles-position">
                        <div class="order-steps-number">1</div>
                    </div>
                    <br><span class="order-steps-number-desc">Choose your Location</span>
                </div>
                <div class="order-steps-row"><img class="order-icons-imgs" src="../img/icons/choosemenu.png" alt=""><br>
                    <div class="circles-position">
                        <div class="order-steps-number">2</div>
                    </div>
                    <br><span class="order-steps-number-desc">Choose Menu</span>
                </div>
                <div class="order-steps-row"><img class="order-icons-imgs" src="../img/icons/makeorder.png" alt=""> <br>
                    <div class="circles-position">
                        <div class="order-steps-number">3</div>
                    </div>
                    <br><span class="order-steps-number-desc">Make Your Order</span>
                </div>
                <div class="order-steps-row"><img class="order-icons-imgs" src="../img/icons/fooddelivery.png"
                        alt=""><br>
                    <div class="circles-position">
                        <div class="order-steps-number">4 </div>
                    </div>
                    <br> <span class="order-steps-number-desc">Food is on the way</span>
                </div>
            </div>
        </div>



        <div class="sub-us-cont-about" >
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
       <div class="flexbox-container-about" >
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