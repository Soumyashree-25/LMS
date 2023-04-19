<?php
    session_start();
    // require "includes/db_conn.php";

    if(!isset($_SESSION['id'])){
       header("location:PGLife.php");
       die();
    }
    $user_id=$_SESSION["id"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry || Dashboard</title>
   
    <!-- include "header.php"; -->
    <?php
    include "headlinks.php";
    ?>

    <link rel="stylesheet" href="css/dashboard.css">

    <style>
        /* *{
            font-family:"cursive";
        } */
            .breadcrumb{   
                height: 50px;
                background-color: #ddd;
                align-items: center;
                margin-bottom: 0;
                padding-left: 10px;
            }
            .breadcrumb ol{
                padding-top: 10px;
            }
            .nav .logo{
                width:33%;
            }
            .nav .name{
            display: flex;
            width: 33%;
            justify-content: center;
            text-align:center;
            }
            .nav ul{
                width:32%;
            }
            
            .services h2{
                font-family: cursive;
                color: #116fb3;
            }
    </style>
</head>
<body>
<div class="navbar">
            <nav class="nav">
                    <div class="logo"> <i class='fas fa-tshirt'></i><span> Laundry</span></div>

                        <?php
                            // if(!isset($_SESSION['id'])){
                        ?>  
                            <!-- <ul>
                                <li class="list"><a href="#services">Services</a></li>
                                <li class="list"><a href="#features">Features</a></li>
                                <li><a href="login.php">Login<i class="fa-solid fa-user"></i></a></li>
                                <li><a href="signup.php">Signup<i class="fa-solid fa-right-to-bracket"></i></a></li>
                            </ul> -->
                <!-- <?php
                    // }
                // else{
                    ?> -->
                    <div class="name">
                            <span>Hi, </span><?php echo $_SESSION['username']?>..!!
                    </div>
                    <ul style="width:33%">
                            <li class="list" id="my-prof"><a href="myprofile.php">My Profile<i class='far fa-laugh'></i></i></a></li>
                            <li class="list"><a href="logout.php">Logout<i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                    </ul>
                <?php  
                // }
                ?>

                
            </nav>
    </div>
    <!-- breadcrumb -->
    <div aria-label="breadcrumb" class="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="PGLife.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Dashboard </li>
        </ol>
    </div>
    <!-- body  -->
    <div class="services">
        <h2>Choose Your Services</h2>
        <div class="service-box">
            <a href="washiron.php">
                <div class="box">
                    <div class="icon">
                        <img src="img/wash-machine-2.jpg" alt="Wash & Iron">
                        <p>Wash & Iron</p>
                    </div>    
                </div>
            </a>
            
            <a href="">
                <div class="box">
                    <div class="icon">
                        <img src="img/dryclean-2.jpg" alt="Dry Cleaning">
                        <p>Dry Cleaning</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="service-box">
            <a href="">
                <div class="box">
                    <div class="icon">
                        <img src="img/carpet-2.jpg" alt="">
                        <p>Carpet Cleaning</p>
                    </div>  
                </div>
            </a>

            <a href="">
                <div class="box">
                    <div class="icon">
                        <img src="img/iron-2.jpg" alt="">
                        <p>Fold & Iron</p>
                    </div>
                </div>    
            </a>
            
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
</body>