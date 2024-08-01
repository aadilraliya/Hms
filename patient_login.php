<?php
session_start();

include("include/connection.php");

if (isset($_POST['login'])) {
    
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if (empty($uname)) {
        echo "<script>alert('Enter Passwod')</script>";
    }elseif (empty($pass)) {
        echo "<script>alert('Enter Passwod')</script>";
    }else {
        
        $query = "SELECT * FROM patient WHERE username='$uname' AND `password`='$pass'";
        $res = mysqli_query($connect,$query);

        if (mysqli_num_rows($res)==1) {
            
            header("Location:patient/index.php");

            $_SESSION['patient'] = $uname;
        }else {
            echo "<script>alert('Invalid Acoount')</script>";
        }
    }
}



?>


<!DOCTYPE html>
<html>
<head>
    <title>Patient Login page</title>
</head>
<body style="background-image: url(img/back3.jpg); background-repeat: no-repeat; background-size: cover;">

        <?php
        include("include/header.php");
        ?>

<div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 jumbotron my-5">
                        <h5 class="text-center my-3">Patient Login</h5>
                               
                        <form method="post">
                            
                             <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                             </div>

                             <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" class="form-control"  autocomplete="off" placeholder="Enter Password">
                            </div>

                                <input type="submit" name="login" class="btn btn-info my-3" value="Login">

                                <p>I dont have an account <a href="account.php">Click here.</a></p>

                        </form>


                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>
        </div>
</body>
</html>