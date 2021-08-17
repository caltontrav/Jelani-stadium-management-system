<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="./favicon/favicon.ico">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <title>Ticket system</title>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="header">
                <h1>
                    <div class="container">
                        <div class="logo">
                            <img src="./images/jlogo2.png" alt="jlogo">
                        </div>
                    </div>
                    <strong>J</strong>ELAN<strong>I</strong>
                    <br />ST<strong>ADI</strong>UM
                </h1>


                <img src="" alt="" />
                <div class="head">

                    <a href="home.php"><i class="fa fa-home"></i>Home</a>
                    <a href=""><i class="fa fa-child"></i>Events</a>
                    <a href="sports.php"><i class="fa fa-futbol-o"></i>Sports</a>
                    <a href="book.php"><i class="fa fa-calendar-times-o"></i>Book</a>
                    <a href="account.php"><i class="fa fa-user-circle"></i>Account</a>
                    <a href="./signout.php">Signout<i class="fa fa-sign-out"></i></a>

                </div>
            </div>
        </div>





        <div class="container">
            <div class="section-1">
                <div class="col-1">
                    <?php
            include_once './feedback.php';
            ?>
                    <i class="fa fa-search"></i>
                    <h4>The world's best Booking search engine</h4>
                    <p>
                        You can search for any game of your choice and book your ticket.All games <span id="dots">
                            ...</span> <span id="more">are listed in our search engine so that you can never miss a
                            game.</span>
                    </p>
                    <button class="btn-1" onclick="myFunction()" id="myBtn1">Learn More</button>
                </div>

                <div class="col-2">
                    <i class="fa fa-phone"></i>
                    <h4>24/7 open suppport Lines</h4>
                    <p>
                        we are open 24 hours ready to provide support to our esteemed
                        customers. You <span id="cont"> ...</span> <span id="open">can reach us through calls at any
                            time incase you need any assistance.</span>
                    </p>
                    <button class="btn-1" onclick="myFunction()" id="myBtn2">Learn More</button>
                </div>

                <div class="col-3">
                    <i class="fa fa-money"></i>
                    <h4>Convinient payment Method</h4>
                    <p>
                        We offer a convinient way of paying for your tickets, or booking
                        your reservations.Customers <span id="dots"> ...</span> <span id="more">can be able to deposit
                            money in their account through ways like Mpesa or cards.</span>
                    </p>
                    <button class="btn-1" onclick="myFunction()" id="myBtn3">Learn More</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="search">
                <h5>Don't be left out</h5>
                <p>Come watch Sports with us Live .Book your Tickets too to events.</p>

                <input type="text" name="" id="" placeholder="search by team , artist or event">
                <button type="submit" class="btn-3"><i class="fa fa-search-plus"></i></button>
            </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
        </div>

        <div class="container">
            <div class="highlights">
                <h4>HIGHLIGHTS</h4>
                <hr class="solid">

                <div class="highlight">
                    <div class="high-1">
                        <h4>Book your ticket now .</h4>
                        <i class="fa fa-futbol-o"></i>
                        <h5>MATHARE vs GORMAHIA</h5>
                        <img src="./images/mathare-united-gor-mahia.png" alt="" height="250px" width="50%"><br>
                        <button type="button" class="btn-1">Book </button>
                    </div>

                    <div class="high-1">
                        <h4>Book your ticket now.</h4>
                        <i class="fa fa-futbol-o"></i>
                        <h5>POSTA RANGERS vs KAKAMEGA HOMEBOYZ</h5>
                        <img src="./images/posta-rangers-kakamega-homeboyz.png" alt="" height="250px" width="50%"><br>
                        <button type="button" class="btn-1">Book</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="sports" id="sport">
                <h3>UPCOMING EVENTS</h3>
            </div>

            <div class="highlight-1">
                <div class="high-1">
                    <h4>Book your ticket now .</h4>
                    <i class="fa fa-meetup" aria-hidden="true"></i>
                    <h5>SAUTISOL LIVE</h5>
                    <img src="./images/sol.jpg" alt="" height="300px" width="60%"><br>
                    <button type="button" class="btn-1">Book </button>
                </div>

                <div class="high-1">
                    <h4>Book your ticket now.</h4>
                    <i class="fa fa-meetup" aria-hidden="true"></i>
                    <h5>OTILE BROWN LIVE</h5>
                    <img src="./images/otile.jpg" alt="" height="300px" width="60%"><br>
                    <button type="button" class="btn-1">Book</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="newsletter">
                <h5>Subscribe to our newsletter</h5>
                <span><input type="email" name="" id="" placeholder="Email"> <button type="submit"
                        class="btn-2">submit</button></span><br>
                <span><input type="checkbox" checked="checked"> Events &nbsp; <input type="checkbox" checked="checked">
                    matches</span>
                <p>Be the first to know the latest matches and events.we'll send you the latest trends in one mail</p>
                <span><a href=""><i class="fa fa-whatsapp"></i> Whatsapp</a> &nbsp; <a href=""><i
                            class="fa fa-telegram"></i> Telegram</a></span>
            </div>
        </div>


        <div class="container">
            <div class="contact-page">
                <div class="contact-us">
                    <div class="wrap-contact">
                        <div class="contact1">
                            <span class="contact100-form-title-1">
                                Contact Us
                            </span>
                            <br>

                            <span class="contact100-form-title-2">
                                Feel free to drop us a line below!
                            </span>
                        </div>
                        <br>

                        <form class="contact100-form">
                            <div class="wrap-input100 ">
                                <p class="label-input100">Full Name: <input class="input100" type="text" name="name"
                                        placeholder="Enter full name"></p>

                            </div>

                            <div class="wrap-input100 validate-input"
                                data-validate="Valid email is required: ex@abc.xyz">
                                <p class="label-input100">Email: <input class="input100" type="email" name="email"
                                        placeholder="Enter email addess"></p>


                            </div>

                            <div class="wrap-input100 validate-input" ">
                                <p class=" label-input100">Phone: <input type="text" name="phone"
                                    placeholder="Enter phone number" required></p>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Message is required">
                                <p class="label-input100">Message:</p>
                                <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>

                            </div>

                            <div class="container-contact100-form-btn">
                                <button class="btn-1">
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <!---------------Footer-------------->

        <div class="container">
            <div class="footer">
                <div class="main-content">
                    <div class="left-box">
                        <h2>About us</h2>
                        <div class="content">
                            <p>
                                Jelani website is a website design to aid sports lovers to book
                                tickets electronically.
                            </p>
                            <p>
                                The website has easen up the ticket booking process hence reduce
                                long queues on the stadium entrance.
                            </p>
                            <div class="socials-1">
                                <a href="#"><span class="fa fa-instagram"></span></a>
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-youtube"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="center-box">
                        <h2>Address</h2>
                        <div class="content">
                            <div class="place">
                                <span class="fa fa-map-marker"></span>
                                <span class="text">Nairobi,Kenya</span>
                            </div>

                            <div class="phone">
                                <span class="fa fa-phone"></span>
                                <span class="text">+254 111325487</span>
                            </div>

                            <div class="email">
                                <span class="fa fa-envelope"></span>
                                <span class="text">jelanistad@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="right-box">
                        <h2>Contact us</h2>
                        <div class="content">
                            <form action="#">
                                <div class="email">
                                    <div class="text">Email*</div>
                                    <input type="email" placeholder="email" required />
                                </div>

                                <div class="msg">
                                    <div class="text">Message*</div>
                                    <textarea placeholder="Enter message" id="" cols="25" rows="2" required></textarea>
                                </div>
                                <div class="btn">
                                    <button class="btn-1" type="submit">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <hr class="hr-1" />
                <div class="copyright">
                    <p>
                        Created by <strong>TheFourCreeds</strong> | &copy; 2021 All Rights
                        Reserved.
                    </p>
                </div>
            </div>
        </div>










        <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }



        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var mybtn1Text = document.getElementById("myBtn1");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                mybtn1Text.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                mybtn1Text.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        function myFunction() {
            var cont = document.getElementById("cont");
            var moreText = document.getElementById("open");
            var mybtn2Text = document.getElementById("myBtn2");

            if (cont.style.display === "none") {
                cont.style.display = "inline";
                mybtn2Text.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                cont.style.display = "none";
                mybtn2Text.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
        </script>
</body>

</html>