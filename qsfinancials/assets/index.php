<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QSFINANCIALS </title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <header>
            <img src="images/logo.svg" alt="QSFS logo" class="logo">
            <nav>
                <a href="#" class="hide-desktop">
                    <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
                </a>
                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                        <img src="images/exit.svg" alt="exit menu">
                    </li>
                   
                    <li>
                        <a href="services.php">services</a>
                    </li>
                    <li>
                        <a href="About.php">about</a>
                    </li>
                    <li>
                        <a href="contacts.php">contact</a>
                    </li>
                    
                    <li>
                        <a href="logout" class="button">LOG OUT </a >
                    </li>
                
                    <li>
                        <a href="login.php
                        " class="button2">Login or Signup</a>
                    </li>
                

                </ul>
            </nav>
        </header>
        <section>
            <img src="images/server4.jpg" alt="company graphic" class="server">
        
            <h1>Welcome To QSFINANCIALS General Insurance Company Limited</h1>
            
            <h1>Plan for tomorrow today!</h1>
            
            <p class="subhead">A one stop-shop for all your insurance needs.</p>
            <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">
        </section>
    </div>
    <div class="blue-container">
        <div class="container">
            <ul>
                <li>
                    <img src="images/icon-1.svg" alt="finance icon">
                    <p> With QSFINANCIALS General Insurance Company Limited , its like a claim never happened. Our team is continuously striving to beat records and settle claims as quickly as possible.</p>
                </li>
                <li>
                    <img src="images/icon-2.svg" alt="wallet icon">
                    <p>"Our dedicated team works 24/7 to assist customers in an emergency by using the latest technologies to deliver fast rescue in real time."</p>
                </li>
                <li>
                    <img src="images/icon-3.svg" alt="apple icon">
                    <p>"The two most important things to look at when choosing an insurance company is the price and the claim service"</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="gray-container">
        <div class="container">
            <ul>
                <li>
                    <figure>
                    <img src="images/user1.png" alt="Customer testimonial picture">
                    <blockquote>I wanted to thank you for getting everything all ready for my insurance change over ,you made it very nice to deal with and it was nice to chat with you . </blockquote>
                    <figcaption>- Jane Hazel</figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                    <img src="images/user2.png" alt="Customer testimonial picture">
                    <blockquote>I could not be any happier from the service I received from QS insurance .Their staff was knowledgeable & professional in helping me with my insurance needs. </blockquote>
                    <figcaption>- Adams  Richard</figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
s
        <h2>Do We Have a Deal?🤝</h2>
        <a href="pay.php" class="cta">Pay Through Here Using Razorpay</a>

    </div>
    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <img src="images/logo.svg" class="logo" alt="logo">
                    </a>
                    <p class="address">New Delhi,90210<br>INDIA</p>
                    <ul class="footer-links">
                        <li><a href="termsofservice.php">Terms and Conditions</a></li>
                        <li><a href="privacy.php">Privacy policy</a></li>
                    </ul>
            </div>
        </div>
    </footer>
 
<script>
    var menu =document.getElementById("menu");
    var nav =document.getElementById("nav");
    var exit =document.getElementById("exit");
    menu.addEventListener("click",function(e){

        nav.classList.toggle("hide-mobile");
        e.preventDefault();
    });
    exit.addEventListener("click",function(e){

        nav.classList.add("hide-mobile");
        e.preventDefault();
    });

       
</script>
</body>

</html>