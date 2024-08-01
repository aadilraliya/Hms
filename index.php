<!DOCTYPE html>
<html>

<head>
    <title>HMS HOME PAGE</title>
</head>

<body>
    <?php
        include("include/header.php");
    ?>

<div style="margin-top: 50px;"></div>

<div class="container">
    <div class="row justify-content-center align-items-top">
        <div class="col-md-3 mx-1 shadow text-center">
            <img src="img/info.png" style="max-height: 200px;">
            <h5>Click on the button for more information.</h5>
            <a href="moreinformation.php">
                <button class="btn btn-success my-4">More information</button>
            </a>
        </div>

        <div class="col-md-4 mx-1 shadow text-center">
            <img src="img/patient1.jfif" style="width: 100%; max-height: 200px;">
            <h5>Create Account so that we can take good care of you.</h5>
            <a href="account.php">
                <button class="btn btn-success my-4">Create Account!!!</button>
            </a>
        </div>

        <div class="col-md-4 mx-1 shadow text-center">
            <img src="img/doctor.jfif" style="width: 100%; max-height: 200px;">
            <h5>We are employing for doctors</h5>
            <a href="apply.php">
                <button class="btn btn-success my-5">Apply Now!!!</button>
            </a>
        </div>

        
        </div>
    </div>
</body>

</html>
