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
            <a href="">Signout<i class="fa fa-sign-out"></i></a>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="book-cont">
            <div class="modal-book">
                <div id="id01" >
                  <form action="tickets.php" method="POST">
                    <h4>BOOK</h4>


                    <p>Game

                      <select name="game" id="">
                        <option value="Mathare vs Gormahia">Mathare vs Gormahia</option>
                        <option value="Posta rangers vs Gormahia">Posta rangers vs Gormahia</option>
                        <option value="Sharks vs Everton">Sharks vs Everton</option>
                        <option value="Sony sugar vs muhoroni">Sony sugar vs muhoroni</option>
                        <option value="Bandari vs KRA">Bandari vs KRA</option>
                        <option value="Nzoia vs chemelil">Nzoia vs chemelil</option>
                        <option value="Gormahia vs sofapaka">Gormahia vs sofapaka</option>
                        <option value="Ulinzi vs Thika UTD">Ulinzi vs Thika UTD</option>
                        <option value="City Stars vs Western stima">City Stars vs Western stima</option>
                        <option value="Kakamega vs Homeboyz">Kakamega vs Homeboyz</option>
                      </select>
                    </p> 
              
                    <p>Ticket number <input type="number" name="ticket_number"></p> 
                    <p>class <select name="class" id="">
                      <option value="regular">REGULAR</option>
                      <option value="vip">VIP</option>
                      <option value="vvip">VVIP</option>
                    </select>
                    </p>
                    <p>Number of Tickets <select name="number_of_ticket" id="">
                      <option value="1">1 Ticket</option>
                      <option value="2">2 Tickets</option>
                      <option value="3">3 Tickets</option>
                      <option value="4">4 Tickets</option>
                      <option value="5">5 Tickets</option>
                      <option value="6">6 Tickets</option>
                      <option value="7">7 Tickets</option>
                      <option value="8">8 Tickets</option>
                      <option value="9">9 Tickets</option>
                      <option value="10">10 Tickets</option>
                    </select></p>
                    <p>Time booked <input type="datetime-local" name="time_booked"></p>
              
                    <button
                      type="button"
                      class="cancel-btn"
                      onclick="document.getElementById('id01').style.display='none'"
                    >
                      Cancel
                    </button>
                    <button type="submit" class="submit_btn">submit</button>
                    <button type="reset" class="update-btn">update</button>
                  </form>
                </div>
              </div>
          </div>
            
      </div>




  </body>
</html>
