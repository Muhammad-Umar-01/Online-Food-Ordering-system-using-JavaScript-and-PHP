<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Check Out - The Foodie</title>
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
    <link rel="stylesheet" href="checkot.css" />
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
                            <li class="nav-item"><a class="nav-link" href="./aboutus.php">ABOUT US</a></li>
                            <li class="nav-item"><a class="nav-link" href="./contact.php">CONTACT US</a></li>
                            <li class="active cart nav-item">
                                <a href="cart.php" class="nav-link">
                                    <ion-icon name="basket"></ion-icon><span>0</span>
                                </a>
                            </li>
                            <li class="nav-item me-2"> <?php include 'dashboard.php'; ?>  </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <br><hr><br>

        <div class="invoice">
            <div><h3>INVOICE</h3></div><br>
            
            <div class="inner-invoice">
                <div class="brand-details">
                    <div class="brand-logo"><a class="navbar-brand" href="#"> <img src="../img/header-logo.png" alt="The Foodie" class="header-logo"> </a></div>
                </div>
                
                <div class="user-data-details">
                <form action="ordersavetodb.php" method="post">
                    <div class="name-of-user"><h6> Name : <?php include 'login.php'; echo "<span>&nbsp;</span>"; echo $_SESSION['First Name']; echo "<span>&nbsp;</span>"; echo $_SESSION['Last Name'];  ?>  </h6> </div>
                    <div class="invoice-number"><h6>Invoice Number : <?php $abc = (rand());  echo $abc;  ?> <input type="hidden" name="invoice" value="<?php echo $abc;  ?>"> </h6></div>
                    <div class="email-of-user"><h6> Email : <?php include 'login.php'; echo $_SESSION['Email'];    ?>  </h6> </div>
                </div>

                <div class="user-data-details">
                    <div class="invoice-number"><h6>Shipping Address : <?php include 'login.php'; echo $_SESSION['Address'];   ?> </h6></div>
                </div>

                <div class="order-details">
                    <div class="order-items-final"></div>
                    <div class="pre-complete-payment"><h5>Total Amount : </h5><h5 class="complete-payment"> </h5></div>
                    <div><input type="submit" class="btn btn-warning" value="Confirm"></div>
                </div>
                <br>
                </form>
            </div>
        </div>

        <br><br><hr><br>

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

