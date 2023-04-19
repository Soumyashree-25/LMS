<?php
    include "header.php";
?>
<head>
    <link rel="stylesheet" href="css/washironorder.css">
</head>
<body>
    <form action="washironorder_submit.php" class="order-form">
        <h2>-Laundry Request-</h2>
        <div class="input">
            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="firstname" placeholder="Enter your first name here" required><br>
        </div>
        <div class="input">
            <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Enter your last name here" required>
        </div>
        <div class="input">
            <label for="shirts">Shirts (T-shirt,Top,Shirt)</label><br>
            <input type="number" id="shirts" name="shirts" placeholder="0">
        </div>
        <div class="input">
            <label for="bottomwear">Bottom Wear (Jeans, Trousers)</label><br>
            <input type="number" id="bottomwear" name="bottomwear" placeholder="0">
        </div>
        <div class="input">
            <label for="woolencloth">Woolen Cloth (Sweater, Jacekts)</label><br>
            <input type="number" id="woolencloth" name="woolencloth" placeholder="0">
        </div>
        <div class="input">
            <label for="blankets">Blankets</label><br>
            <input type="number" id="blankets" name="blankets" placeholder="0">
        </div>
        <div class="input">
            <label for="number">Mobile Number</label><br>
            <input type="tel" id="number" name="number" placeholder="+91-9999999999">
        </div>
        <div class="input">
            <label for="address">Address</label><br>
            <input type="text" id="address" name="address" placeholder="Enter Your Address">
        </div>
        <div class="input">
            <label for="landmark">Landmark</label><br>
            <input type="text" id="landmark" name="landmark" placeholder="Enter Your Landmark (Any nearby location)">
        </div>
        <div class="input radio">
            <!-- <p>Choose Service</p> -->
            <div class="radio-item">
                <label for="drop-service">Drop service</label>
                <input type="radio" id="drop-service" name="service" value="Drop Service"><br>
            </div>
            
            <label for="pickup-service">Pick-up service</label>
            <input type="radio" id="pickup-service" name="service" value="Pickup Service"><br>
            
        </div>
        <div class="btn">
            <button>Proceed For Payment</button>
        </div>
    </form>
</body>