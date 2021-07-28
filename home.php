<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/yourcode.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <title>Ticket system</title>
  </head>
  <body>
    <div class="container">
      <div class="container">
        <div class="header">
          <h1>
            <strong>J</strong>ELAN<strong>I</strong>
            <br />ST<strong>ADI</strong>UM
          </h1>
          
          <img src="" alt="" />
          <div class="head">
            <a href="Home.html"><i class="fa fa-home"></i>Home</a>
            <a href=""><i class="fa fa-child"></i>Events</a>
            <a href="sports.html"><i class="fa fa-futbol-o"></i>Sports</a>
            <a href="book.html"><i class=""></i>Book</a>
            <a href="account.html"><i class="fa fa-user-circle"></i>Account</a>
            <a href="./signout.php">Signout<i class="fa fa-sign-out"></i></a>
          </div>
        </div>
      </div>

      <?php
              include_once './feedback.php';
       ?>

      

    <div class="container">
      <div class="section-1">
        <div class="col-1">
          <i class="fa fa-search"></i>
          <h4>The world's best Booking search engine</h4>
          <p>
            You can search for any game of your choice and book your ticket.All games <span id="dots"> ...</span> <span id="more">are listed in our search engine so that you can never miss a game.</span>
          </p>
          <button class="btn-1" onclick="myFunction()" id="myBtn1">Learn More</button>
        </div>

        <div class="col-2">
          <i class="fa fa-phone"></i>
          <h4>24/7 open suppport Lines</h4>
          <p>
            we are open 24 hours ready to provide support to our esteemed
            customers.
          </p>
          <button class="btn-1">Learn More</button>
        </div>

        <div class="col-3">
          <i class="fa fa-money"></i>
          <h4>Convinient payment Method</h4>
          <p>
            We offer a convinient way of paying for your tickets, or booking
            your reservations.
          </p>
          <button class="btn-1">Learn More</button>
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
    </div>










    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
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
      </script>
  </body>
</html>
