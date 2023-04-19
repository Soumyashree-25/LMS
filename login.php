<?php
    include "header.php";
?>
<head>
    <link rel="stylesheet" href="css/washironorder.css">
    <style>
        .order-form{
            margin-top:10%;
            margin-bottom:10%;
        }
        .btn{
            width: 50%;
            /* margin-left: 24.3%; */
            padding-left:0;
            padding-right:0;
        }
        .btn button{
            padding-left:0;
            padding-right:0;
            width: 100%;
        }
        .bttn{
            display: flex;
            align-items: center;
            justify-content: center;
            /* width: 100%; */
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
            font-weight: 400;
            transition:ease-in 0.3s;
        }
        .bttn span a:hover{
            color:#116fb3;
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <form action="login_submit.php" class="order-form" method="post">
        <h2>-Login-</h2>
        <div class="input">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email " required>
        </div>
        <div class="input">
                <label for="pwd">Password</label><br>
                <input type="password" id="pwd" name="password" placeholder="Enter your password " required>
        </div>
        <div class="btn">
        <button>Login</button>
        </div>

        <div class="bttn">
            <h5>New User ?<span><a href="signup.php">click here</a></span> to Register</h5>
        </div>
    </form>
</body>