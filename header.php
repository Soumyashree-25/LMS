<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || LMS</title>

    <?php
        include "headlinks.php";
    ?>
    

</head>
<body>
    <div class="navbar">
            <nav class="nav">
                    <div class="logo"> <i class='fas fa-tshirt'></i><span> Laundry</span></div>

                        <?php
                            if(!isset($_SESSION['id'])){
                        ?>  
                            <ul>
                                <li class="list"><a href="#services">Services</a></li>
                                <li class="list"><a href="#features">Features</a></li>
                                <li><a href="login.php">Login<i class="fa-solid fa-user"></i></a></li>
                                <li><a href="signup.php">Signup<i class="fa-solid fa-right-to-bracket"></i></a></li>
                            </ul>
                <?php
                    }
                else{
                    ?>
                    <div class="name">
                            <span>Hi, </span><?php echo $_SESSION['username']?>..!!
                    </div>
                    <ul style="width:33%">
                            <li class="list" id="my-prof"><a href="dashboard.php">Dashboard<i class="fa-solid fa-user"></i></a></li>
                            <li class="list"><a href="logout.php">Logout<i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                            <!-- <li><a href="login.php">Login<i class="fa-solid fa-user"></i></a></li>
                            <li><a href="signup.php">Signup<i class="fa-solid fa-right-to-bracket"></i></a></li> -->
                    </ul>
                <?php  
                }
                ?>

                
            </nav>
    </div>
</body>