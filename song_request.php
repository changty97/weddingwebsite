<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=1.0, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Our Happliy Ever After!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.picbox.css">
    <link rel="stylesheet" href="css/googlemaps.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>

.carousel-inner > .carousel-item {
  height: 50vh;
}

.carousel-inner > .carousel-item > img {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  max-height: 800px;
  width: auto;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}
</style>
<body>
  <section class="hero">
    <section id="nav" class="navigation">
      <header id="head" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding: 20px 0px;">
        <div class="header-content">
          <a href="index.php"><img src="images/weddinglogo2.png" class="logo" alt="Changber Wedding logo"></a>
          <div id="header" onclick="menuButton()" class="header-nav">
              <nav>
                  <ul class="primary-nav">
                      <!-- <li><a href="index.php" onclick="showForm2()" style="text-decoration: none;">Home</a></li> -->
                      <li><a href="#timeline" onclick="showForm2()" style="text-decoration: none;">Timeline</a></li>
                      <li><a href="#eng-pics" onclick="showForm2()" style="text-decoration: none;">Engagment</a></li>
                      <li><a href="#venue" onclick="showForm2()" style="text-decoration: none;">Venue</a></li>
                      <li><a href="#hotels" onclick="showForm2()" style="text-decoration: none;">Hotels & Airbnb's</a></li>
                      <li><a href="#registry" onclick="showForm2()" style="text-decoration: none;">Registry</a></li>
                  </ul>
                  <!-- RSVP Button -->
                  <ul id="rsvp" onclick="showForm()" class="member-actions" style="top: 35px;">
                    <li><a href="#rsvp" class="btn-white btn-small" style="text-decoration: none;">RSVP</a></li>
                  </ul>
              </nav>
          </div>
        <!-- RSVP Form Popup -->
          <form id="rsvpForm" action="submit.php" method="post" style="display: none">
            <div id="rsvpPop" class="top"></div>
                <div class="form" id="form">
                    <div class ="info">
                        <i class="fa fa-close exit" style="font-size: 25px;" onclick="showForm()"></i>
                        <h1 class="head1">RSVP</h1>
                        <h2 class="head2">for the wedding of</h2>
                        <h1 class="head1">Caley & Tyler</h1><p class= "line">________________________________________</p>
                        <h2 class="head2">The Details</h2><p class="details">Saturday, September 26, 2020</p><p class="details">5:00 PM</p><br><h2 class="head2">Ceremony & Reception</h2>
                        <p class="details">8031 Highway 70 Marysville, California 95901</p>
                        <a href="#song" onclick="showForm2()" style="text-decoration: none; margin-left: 130px;">Song Request</a>
                        <p class= "line" id="line2">________________________________________</p>
                        <div id="buttons1"></div>
                        <input type="number" name="guests" class="nameInput guestInput" placeholder="# of Guests" min="1" max="5" required id="guests" onkeyup="addGuest()">
                        <input type="text" name="name[]" class="nameInput" placeholder="First and Last Name" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required>
                        <div id="guestNames"></div>
                    </div>
                    <div id="buttons2">
                      <button type="submit" value="submit" id="accept" name="accept" class="accept">Accept</button>
                      <!-- <button type="submit" value="submit" id="decline" name="decline" class="decline">Decline</button> -->
                    </div>
                </div>
          </form>          

          <div class="navicon" id="navicon" style="top: 35px;">
              <a id="menu" onclick="menu()" class="nav-toggle"><span id="menuResponsive"></span></a>
          </div>
        </div>
      </header>
    </section>
  </section>
        

         <section id="song" class="section-padding">
        <div class="container-invite">
          <div class="row">
            <div class="col-md-12 text-center">
                <h1>Request a Song</h1>
            </div>
          </div>
        </div>
      <form action="submit.php" method="post" >
            <div class="top"></div>
                <div class="song content"> <!-- style="width: 400px; height: 200px; margin: auto" -->
                    <div class ="info">
                        <input type="text" name="song" class="songInput" style="margin-top: 15px;" placeholder="Song Title" required>
                        <input type="text" name="artist" class="songInput" placeholder="Artist" required>
                    </div>
                    <div style="text-align: center;width: 100px; margin:0 auto;">
                      <button type="submit" value="submit" name="submit" class="btn-white btn-small" style="width: auto; background-color: #d7d7d7; margin-top: -15px;">Submit</button>
                    </div>
                </div>
          </form>
      </section>

        <footer class="footer">
            <div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span class="to-top-wrapper"><a href="#top" class="to-top"><i class="fa fa-angle-up" style="font-size: 25px"></i></a></span>
                        <p>Developed by Tyler Chang</p>
                        <a href="https://changberwedding.com/list.php" style="text-decoration: none;">Who is Going?</a><br>
                        <small>&copy; Copyright 2019,  All Rights Reserved</small>
                    </div>
                </div>
            </div>
        </footer>
<script src="js/scripts.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>

</body> 
</html>