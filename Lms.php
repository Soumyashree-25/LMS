<?php
    include "header.php";
?>
<style>
#btn{
    top: 85%;
    position: sticky;
    left: 75%;
    padding: 10px 20px;
    color: white;
    background: #160f41;
    border: none;
    font-size: 20px;
    border-radius:10px;
    transition:ease-in 0.4s;
}
#btn a{
    color: white;
    text-decoration: none;
}
#btn:hover{
    background-color:#116fb3;
}
.nav .name{
            display: flex;
            width: 30%;
            justify-content: center;
            text-align:center;
            color:#116fb3;
        }
/* .nav ul{
        width:38%;
    } */
</style>
<body>
<?php
    if(!isset($_SESSION['id'])){
    ?>
        <button id="btn"><a href="signup.php">Schedule Your First Pickup</a></button>
    <?php
    }
    ?>

    <div class="body">
        <div class="img">
            <div class="img-text">
                <h2>Laundry & Dry Cleaning</h2>
                <h1>Best for Laundry Services</h1>
                <h4>..Clean and fresh in seconds..</h4>
            </div>
        </div>
    </div>

    <section id="work">
        <h5>Our Process</h5>
        <h1>How we works</h1>

        <div class="work-container">
            <div class="box">
                <div class="icon">
                    <img src="img/work1.png" alt="">
                    <h6>We Collect Your Clothes</h6>
                </div>
            </div>

            <div class="box">
                <div class="icon">
                    <img src="img/work2.png" alt="">
                    <h6>Wash Your Clothes</h6>
                </div>
            </div>

            <div class="box">
                <div class="icon">
                    <img src="img/work.webp" alt="">
                    <h6>Get Delivery</h6>
                </div>
            </div>
        </div>

    </section>

    <section id="services">
        <h1>Our Laundry Services</h1>

        <div class="service-box">
            <a href="washiron.php">
                <div class="box">
                    <div class="icon">
                        <img src="img/washing-machine.jpg" alt="Wash & Iron">
                        <p>Wash & Iron</p>
                    </div>    
                </div>
            </a>
            
            <a href="">
                <div class="box">
                    <div class="icon">
                        <img src="img/dry-clean.jpg" alt="Dry Cleaning">
                        <p>Dry Cleaning</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <div class="icon">
                        <img src="img/carpet.jpg" alt="">
                        <p>Carpet Cleaning</p>
                    </div>  
                </div>
            </a>

            <a href="">
                <div class="box">
                    <div class="icon">
                        <img src="img/iron.jpg" alt="">
                        <p>Fold & Iron</p>
                    </div>
                </div>    
            </a>
            
        </div>
    </section>

    <section id="features">
        <h1>Our Features</h1>
        <div class="service-box">
            <div class="box">
                <div class="icon">
                    <img src="img/delivery.jpg" alt="Wash & Iron">
                    <p>Free Delivery</p>
                </div>
            </div>

            <div class="features-text">
                    <h2>Free Delivery</h2>
                    <p> Experince the Hassle-free delivery with us.Faster than you can think. Safe transport at affordable prices.More than just free pickup and delivery.All Rinse Repeat plans include free pickup and delivery.</p>
            </div>

        </div>
        <div class="service-box">
            <div class="features-text">
                <h2>Pick Up Services</h2>
                 <p>Everything at your doorstep. Simply Shine. We are always there for your convenience.High-quality cleaning, on your schedule.
                    Your clothes are picked up from your door, expertly cleaned, and returned 3-4 days later crisp, clean, and ready-to-wear.</p>
            </div>
            <div class="box">
                        <div class="icon">
                            <img src="img/pickup.jpg" alt="Dry Cleaning">
                            <p>Pickup</p>
                        </div>
            </div>
            
        </div>
        <div class="service-box">
            <div class="box">
                <div class="icon">
                    <img src="img/time.jpg" alt="">
                    <p>On Time</p>
                </div>
            </div>
            <div class="features-text">
                <h2>On Time Delivery</h2>
                <p>Always on time. Fast, on time delivery.Start saving 9+ hours a month with Rinse. Saving time can gain you more.</p>
            </div>
        </div>
        <div class="service-box">
            <div class="features-text">
                <h2>Customer Support (24 * 7)</h2>
                <p>Your clothes are picked up from your door, expertly cleaned, and returned 3-4 days later crisp, clean, and ready-to-wear.Give us a chance to help you. Call us for a smooth transition.  We are always here for your service.</p>
            </div>
            <div class="box">
                <div class="icon">
                    <img src="img/customer-services.jpg" alt="">
                    <p>24*7 Care</p>
                </div>
            </div>    
            
        </div>

    </section>


    <?php
    include "footer.php";
    ?>
    
</body>
</html>