<?php
session_start(); // Start the session.
include("include/connection.php"); // Make sure to include the correct path to your connection file.



if (isset($_POST['login'])) {
    
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    if (empty($username)) {
        $error['admin'] = "Enter Username"; // Fix the typo in "Enetr" to "Enter".
    } elseif (empty($password)) {
        $error['admin'] = "Enter Password";
    }

    if (count($error) == 0) { // Fix the condition, change "$error==0" to "$error == 0".

        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        
        $result = mysqli_query($connect, $query);
        
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('You have logged in as an admin')</script>"; // Fix the typo in "alter" to "alert".

            $_SESSION['admin'] = $username;

            header("Location: admin/index.php"); // You need to specify the location to redirect to.
            exit();
        } else {
            echo "<script>alert('Invalid Username or Password')</script>"; // Fix the typo in "alter" to "alert".
        }
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
</head>
<body style="background-image: url(img/back3.jpg); background-repeat: no-repeat; background-size: cover;">
    <?php
         include("include/header.php");
     ?>
    <div style="margin-top: 20px;"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 jumbotron">
                        
                    <div class="col-md-4 mx-auto">
                         <img src="img/admin1.jfif" class="img-fluid" alt="Admin Image">
                     </div>
                         <form method="post"class="my-2">

                         <div>
                            <?php

                            if (isset($error['admin'])) {
                                
                                $sh = $error['admin'];

                                $show="<h5 class='alert alert-danger'>$sh</h5>";
                            }else {
                                $show="";
                            }

                             echo $show;
                            ?>
                         </div>


                            <div class="form-group mb-3">
                                <label for="uname">Username</label>
                                <input type="text" name="uname" id="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                             </div>
                            <div class="form-group mb-3">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" id="pass" class="form-control "placeholder="Enter Password">
                            </div>

                                 <input type="submit" name="login" class="btn btn-success" value="Login" >
                          </form>
                    </div>

                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    
</body>
</html>