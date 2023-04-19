<?php
    include "header.php";
    // include "css/washiron.css";
?>
<!DOCTYPE html>
<head>
    <?php
    include "headlinks.php";
    ?>
    <link rel="stylesheet" href="css/washiron.css">
       <style>
            ul.breadcrumb {
            margin-top: 80px;
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
            }
            ul.breadcrumb li {
            display: inline;
            font-size: 18px;
            }
            ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
            }
            ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
            }
            ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
            }
            .nav .name{
                width: 33%;
                display: flex;
                justify-content: center;
            }
        </style>

</head>
<body>
     <!-- breadcrumb
     <div aria-label="breadcrumb" class="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="PGLife.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Wash & Iron</li>
        </ol>
    </div> -->

    <!-- breadcrumb -->
    <ul class="breadcrumb">
        <li><a href="Lms.php">Home</a></li>
        <li>Wash & Iron</li>
    </ul>
    <div class="box">
        <div class="icon">
            <img src="img/washing-machine.jpg" alt="Wash & Iron">
            <p>Wash & Iron</p>
        </div>
    </div>

    <div class="detail-container">
        <h2>Wash & Iron Price (Per Unit)</h2>
        <div class="detail">
            <div class="name">Top Wear</div>
            <div class="price">200</div>
        </div>
        <div class="detail">
            <div class="name">Bottom Wear</div>
            <div class="price">250</div>
        </div>
        <div class="detail">
            <div class="name">Woolen Cloth</div>
            <div class="price">400</div>
        </div>
        <div class="detail">
            <div class="name">Shirts</div>
            <div class="price">200</div>
        </div>
        <div class="detail">
            <div class="name">Saree</div>
            <div class="price">350</div>
        </div>

        <div class="order">
            <a href="washironorder.php">Place Order</a>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>
</body>
</html>