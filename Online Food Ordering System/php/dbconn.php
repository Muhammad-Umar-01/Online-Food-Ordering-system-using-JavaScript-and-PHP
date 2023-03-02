<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="thefoodie";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

        if (!$conn) {
            die("Error");
        }
?>