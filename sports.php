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

      

    

      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

    <div class="container">
      <div class="highlights">
        <h4>TOP MATCHES</h4>
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
            <h5>KARIOBANGI SHARKS vs EVERTON</h5>
            <img src="./images/Sharks-v-Everton.jpg" alt="" height="250px" width="50%"><br>
            <button type="button" class="btn-1">Book</button>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="sports" id="sport">
        <h3>ALL MATCHES</h3>

        <h2>Come as <strong>ONE</strong> <i class="fa fa-user"></i> leave as a <strong>FAMILY</strong> <i class="fa fa-users"></i></h2>
        <p>Upcoming matches</p>
        <hr class="solid">
        <br>

<div class="row">
  <div class="sp-column">
    <div class="card">
      <img src="./images/posta-rangers-gor-mahia.png" alt="post rangers" style="width:90%" height="300vh">
      <div class="wrapper">
        <h2>POSTA RANGERS vs GORMAHIA</h2>
        <p class="title">Time 12:00 </p>
        <p>Book your ticket and never miss a moment</p>
        <p>incase of ticket queries, email us :info@jelanistad.com</p>
        <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
      </div>
    </div>
  </div>

  

  <div class="row">
    <div class="sp-column">
      <div class="card">
        <img src="./images/Sharks-v-Everton.jpg" alt="post rangers" style="width:90%" height="300vh">
        <div class="wrapper">
          <h2>SHARKS vs EVERTON</h2>
          <p class="title">Time 12:00 </p>
          <p>Book your ticket and never miss a moment</p>
          <p>incase of ticket queries, email us :info@jelanistad.com</p>
          <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="sp-column">
        <div class="card">
          <img src="./images/sony-sugar-muhoroni-youth.png" alt="sony" style="width:90%" height="300vh">
          <div class="wrapper">
            <h2>SONY SUGAR vs Muhoroni</h2>
            <p class="title">Time 12:00 </p>
            <p>Book your ticket and never miss a moment</p>
            <p>incase of ticket queries, email us :info@jelanistad.com</p>
            <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="sp-column">
          <div class="card">
            <img src="./images/kenya-rev-authority-bandari-fc.png" alt="post rangers" style="width:90%" height="300vh">
            <div class="wrapper">
              <h2>BANDARI vs KRA</h2>
              <p class="title">Time 12:00 </p>
              <p>Book your ticket and never miss a moment</p>
              <p>incase of ticket queries, email us :info@jelanistad.com</p>
              <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="sp-column">
            <div class="card">
              <img src="./images/nzoia-united-chemelil-sugar.png" alt="post rangers" style="width:90%" height="300vh">
              <div class="wrapper">
                <h2>Nzoia vs CHEMELIL</h2>
                <p class="title">Time 12:00 </p>
                <p>Book your ticket and never miss a moment</p>
                <p>incase of ticket queries, email us :info@jelanistad.com</p>
                <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="sp-column">
              <div class="card">
                <img src="./images/sofapaka-gor-mahia.png" alt="post rangers" style="width:90%" height="300vh">
                <div class="wrapper">
                  <h2>GORMAHIA vs SOFAPAKA</h2>
                  <p class="title">Time 12:00 </p>
                  <p>Book your ticket and never miss a moment</p>
                  <p>incase of ticket queries, email us :info@jelanistad.com</p>
                  <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="sp-column">
                <div class="card">
                  <img src="./images/ulinzi-stars-thika-united.png" alt="post rangers" style="width:90%" height="300vh">
                  <div class="wrapper">
                    <h2>ULINZI vs THIKA UNITED</h2>
                    <p class="title">Time 12:00 </p>
                    <p>Book your ticket and never miss a moment</p>
                    <p>incase of ticket queries, email us :info@jelanistad.com</p>
                    <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="sp-column">
                  <div class="card">
                    <img src="./images/western-stima-fc-nairobi-city-stars-fc.png" alt="post rangers" style="width:90%" height="300vh">
                    <div class="wrapper">
                      <h2>CITY STARS vs WESTERN STIMA</h2>
                      <p class="title">Time 12:00 </p>
                      <p>Book your ticket and never miss a moment</p>
                      <p>incase of ticket queries, email us :info@jelanistad.com</p>
                      <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="sp-column">
                    <div class="card">
                      <img src="./images/kakamega-homeboyz-kcb-game.jpg" alt="post rangers" style="width:90%" height="300vh">
                      <div class="wrapper">
                        <h2>KAKAMEGA vs HOMEBOYZ</h2>
                        <p class="title">Time 12:00 </p>
                        <p>Book your ticket and never miss a moment</p>
                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                        <p><button class="btn-1" type="button" onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book Ticket</a> </button></p>
                      </div>
                    </div>
                  </div>
        </div>
      </div>

      <div class="next">
        <a href=""><i class="fa fa-angle-double-left"></i> previous</a>
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">next <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>

    <div class="container">
      <div class="newsletter">
        <h5>Subscribe to our newsletter</h5>
        <span><input type="email" name="" id="" placeholder="Email"> <button type="submit" class="btn-2">submit</button></span><br>
        <span><input type="checkbox" checked="checked"> Events &nbsp; <input type="checkbox" checked="checked"> matches</span>
        <p>Be the first to know the latest matches and events.we'll send you the latest trends in one mail</p>
        <span><a href=""><i class="fa fa-whatsapp"></i> Whatsapp</a> &nbsp; <a href=""><i class="fa fa-telegram"></i> Telegram</a></span>
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
                  <textarea
                    placeholder="Enter message"
                    id=""
                    cols="25"
                    rows="2"
                    required
                  ></textarea>
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

  // Get the modal
var register = document.getElementById("id01");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == register) {
    register.style.display = "none";
  }
};
</script>






<script src="./js/script.js"></script>
  </body>
</html>
