
<?php
    session_start();
    include 'dbconn.php';
    if (isset($_POST['btn2'])) 
        {
            session_destroy();
            header('Refresh: 2; URL = index.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
    <!-- CSS and Bootstrap Files -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="conatiner-reg">
        <div class="cnt-all">
            <?php
            if ( $_SESSION == true ) {
                echo '
                <form method="post" >
                <input type="submit" class="btn btn-danger" name="btn2" id="btn2" value="Log out">
                </form> <a href="userdashboard.php" target="_blank" class="nav-link" > ' ;
                echo "<span>&nbsp;</span>";
                echo $_SESSION['First Name'];
                echo "<span>&nbsp;</span>";
                echo $_SESSION['Last Name'];
                echo '</a>';
            }
            else {
            echo '
                <span class="me-2">
                    <a href="signup.html" >
                        <button class="btn-style-reg"> 
                            <span>SIGN</span><span>&nbsp;</span><span>UP</span>
                        </button>
                    </a>
                </span>
                <span>
                    <a href="login.html">
                        <button class="btn-style-reg"> 
                        <span>LOG</span><span>&nbsp;</span><span>IN</span>
                        </button>
                    </a>
                </span>
            ';
            }
            ?>
        </div>
    </div>

</body>
</html>