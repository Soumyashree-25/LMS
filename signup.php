<?php
 include "header.php";
?>
<head>
    <link rel="stylesheet" href="css/washironorder.css">
    <style>
        /* .btn{
            margin-bottom:15px;
        } */
        .btn {
        width: 50%;
        /* margin-left: 24.3%; */
        padding-left: 0;
        padding-right: 0;
         }
        .btn button {
        padding-left: 0;
        padding-right: 0;
        width: 100%;
        }
        .bttn{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .bttn h5 {
            margin: 0;
            font-size: 18px;
            font-weight: 400;
        }
        .bttn span a{
            text-decoration: none;
            color: white;
            padding-left: 10px;
            cursor: pointer;
            font-size: 20px;
            font-weight: 500;
        }
        .bttn span a:hover{
            color:#116fb3;
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <form action="signup_submit.php" class="order-form" method="post">
        <h2>-Signup-</h2>
        <div class="input">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Enter your first name " ><br>
        </div>
        <div class="input">
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Enter your last name " required>
        </div>
        <div class="input">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email " required>
        </div>
        <div class="input">
                <label for="pwd">Password</label><br>
                <input type="password" id="pwd" name="password" placeholder="Enter your password " required>
        </div>
        <div class="input">
                <label for="number">Number</label><br>
                <input type="tel" id="number" name="phone_number" placeholder="Enter your phone number" required>
        </div>
        <div class="btn">
            <button>Signup</button>
        </div>

        <div class="bttn">
            <h5>Already have an Account ?</h5><span><a href="login.php">Login</a></span>
        </div>
    </form>
</body>