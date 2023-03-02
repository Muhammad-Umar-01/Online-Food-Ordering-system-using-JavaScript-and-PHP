
<?php

    include 'dbconn.php';

    $a = $_POST["txt1"];
    $b = $_POST["txt2"];
    $c = $_POST["txt3"];
    $d = $_POST["txt4"];
    $e = $_POST["txt5"];
    $f = $_POST["txt6"];

    $sql = "INSERT INTO `registration` (`First Name`, `Last Name`, `Email`, `Password`, `Address`, `Phone Number`) VALUES ( '$a', '$b', '$c', '$d', '$e', '$f');";
    
    if (!mysqli_query($conn,$sql)) 
        {
            die("Error");
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Sign Up </title>
 <link rel="stylesheet" href="style.css">
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
 <div class="conatiner-x">
     <div class="heaading-x cnt-all">
        <h2>
            <?php
                echo "<br> Your Account created sucessfully";
                echo "<br> Please Login <br>";
            ?>
        </h2>
     </div>
    <div class="cnt-all" >
        <form action="login.html" method="post" >
            <label for="login" class="form-label mt-4" > <br> Press this button to Log In </label>
            <br>
            <input type="submit" class="btn btn-warning" name="btn2" id="btn2" value="Log In">
        </form>
    </div>
 </div>
</body>
</html>