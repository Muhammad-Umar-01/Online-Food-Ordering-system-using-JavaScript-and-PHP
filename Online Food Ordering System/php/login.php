<?php    
    include 'dbconn.php';
        if (isset($_POST['btn1']))
            {
                session_start();
                $email = mysqli_real_escape_string($conn, $_POST['txt3']);
                $password = mysqli_real_escape_string($conn, $_POST['txt4']);

                $checkemail = "SELECT * FROM `registration` WHERE Email = '$email'";
                
                $query = mysqli_query($conn,$checkemail);
                $countemail = mysqli_num_rows($query);
                    
                    if ($countemail) 
                        {
                            $fetchdata = mysqli_fetch_assoc($query);

                            $fetchedpassword = $fetchdata['Password'];
                            echo "<br>";

                            $fetchedf_name = $fetchdata['First Name'];
                            $fetchedl_name = $fetchdata['Last Name'];
                            $fetched_email = $fetchdata['Email'];
                            $fetched_address = $fetchdata['Address'];
                            $fetched_phone = $fetchdata['Phone Number'];
                            

                            $space = " ";
                                if($password == $fetchedpassword)
                                    {
                                        echo "Login Success <br> ";
                                        $_SESSION['First Name']=$fetchedf_name;
                                        $_SESSION['Last Name']=$fetchedl_name;
                                        $_SESSION['Email']=$fetched_email;
                                        $_SESSION['Address']=$fetched_address;
                                        $_SESSION['Phone']=$fetched_phone;
                                        
                                        header('Refresh: 2; URL =index.php');
                                    }
                                else
                                    {
                                        echo "<br>Incorrect Password";
                                        header('Refresh: 2; URL =login.html');
                                    }
                        }
                    else
                        {
                            echo "<br>Invalid Email";
                            header('Refresh: 2; URL =login.html');
                        }
            }
?>