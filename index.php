<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Our Happliy Ever After!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="glossorydev.json"></script>
    <link rel="stylesheet" type="text/css" href="./src/assets/mystyle.css">
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

<body>
  <section class="hero">
    <section id="nav" class="navigation">
      <header id="head" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding: 20px 0px;">
        <div class="header-content">
          <a href="index.php"><img src="./images/weddinglogo2.png" style="width: 220px; height: 70px;"></a>
          <div id="header" onclick="menuButton()" class="header-nav">
              <nav>
                  <ul class="primary-nav">
                      <li><a href="index.php" style="text-decoration: none;">Home</a></li>
                      <li><a href="#timeline" style="text-decoration: none;">Timeline</a></li>
                      <li><a href="#eng-pics" style="text-decoration: none;">Engagment</a></li>
                      <li><a href="#venue" style="text-decoration: none;">Venue</a></li>
                      <li><a href="#hotels" style="text-decoration: none;">Hotels</a></li>
                      <li><a href="#attendance" style="text-decoration: none;">Attendance</a></li>
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
                <div class="form">
                    <div class ="info">
                        <i class="fa fa-close exit" style="font-size: 25px;" onclick="showForm()"></i>
                        <h1 class="head1">RSVP</h1>
                        <h2 class="head2">for the wedding of</h2>
                        <h1 class="head1">Caley & Tyler</h1><p class= "line">________________________________________</p>
                        <h2 class="head2">The Details</h2><p class="details">Saturday, September 26, 2020</p><p class="details">5:00 PM</p><br><h2 class="head2">Ceremony & Reception</h2>
                        <p class="details">8031 Highway 70 Marysville, California 95901</p>
                        <p class= "line">________________________________________</p>
                        <input type="number" name="guests" placeholder="# of Guests" min="1" max="2" required>
                        <input type="text" name="name" placeholder="First and Last Name" required>
                    </div>
                    <button type="submit" value="submit" name="accept" class="accept">Accept</button>
                    <button type="submit" value="submit" name="decline" class="decline">Decline</button>
                </div>
          </form>

          <div class="navicon" id="navicon" style="top: 35px;">
              <a id="menu" onclick="menu()" class="nav-toggle"><span id="menuResponsive"></span></a>
              <script>
                function menu() {
                  var menu = document.getElementById('menu');
                  var header = document.getElementById('header');
                  if(menu.className == 'nav-toggle') 
                  {
                    menu.className = "nav-toggle active";
                    header.className = "header-nav open";
                  }
                  else 
                  {
                    menu.className = "nav-toggle";
                    header.className = "header-nav";
                  }
                }

                function menuButton() {
                  var menu = document.getElementById('menu');
                  var header = document.getElementById('header');
                  if(header.className == 'header-nav open')
                  {
                    header.className = "header-nav";
                    menu.className = "nav-toggle";
                  }
                }

                  var rsvpForm = document.getElementById('rsvpForm');
                  function showForm() {
                    if(rsvpForm.style.display == "block")
                    {
                        rsvpForm.style.display = "none";
                    }
                    else
                    {
                        rsvpForm.style.display = "block";
                    }
                  }
                    
                window.onclick = function(event) {
                    if (event.target == rsvpForm) {
                        rsvpForm.style.display = "none";
                    }
                }
              
              </script>
          </div>
        </div>
      </header>
    </section>
  </section>
        
        <script>
                var nav = document.getElementById('nav');
                var head = document.getElementById('head');
                var rsvp = document.getElementById('rsvp');
                var navicon = document.getElementById('navicon');
                var menuResponsive = document.getElementById('menuResponsive');
                window.onscroll = function() {
                    if(window.pageYOffset > 650) {
                        nav.className = "navigation fixed";
                        nav.style.backgroundColor = "rgba(189, 189, 189, 0.61)"; //rgba(239, 213, 186, 0.88)
                        head.style.borderBottom = "none";
                        head.style.padding = "18px 0px";
                        rsvp.style.top = "25px";
                        navicon.style.top = "45px";
                        menuResponsive.style.bottom = "35px";
                    }
                    else {
                        nav.style.background = "transparent";
                        nav.style.className = "navigation";
                        head.style.borderBottom = "1px solid rgba(255, 255, 255, 0.2)";
                        head.style.padding = "20px 0px";
                        rsvp.style.top = "30px";
                        navicon.style.top = "35px";
                        menuResponsive.style.bottom = "25px";
                    }
                }
            </script>
    <section class="section-padding">
      <div class="conatiner-invite">
        <div class="row">
          <div class="col-md-12 text-center">
              <h1>We're Getting Hitched!</h1>
              <p>The date is Septemeber 26th, 2020 and we would like you to be part of it.</p> 
              <h1><b>Countdown</b></h1>
              <script>
                var today = new Date();
                var BigDay = new Date("September 26, 2020");
                var msPerDay = 24 * 60 * 60 * 1000;
                var timeLeft = (BigDay.getTime() - today.getTime());
                var e_daysLeft = timeLeft / msPerDay;
                var daysLeft = Math.floor(e_daysLeft);
                var yearsLeft = 0;
                if (daysLeft > 365) {
                  yearsLeft = Math.floor(daysLeft / 365);
                  daysLeft = daysLeft % 365;
                }
                var e_hrsLeft = (e_daysLeft - daysLeft) * 24;
                var hrsLeft = Math.floor(e_hrsLeft%24);
                var minsLeft = Math.floor(((e_hrsLeft - hrsLeft) * 60)%60);
                document.write("<h1><b>" + yearsLeft + " year " + daysLeft + " days " + hrsLeft + " hours " + minsLeft + " minutes</b></h1>");
              </script>
              <br><hr>
          </div>
        </div>
      </div>
    </section>

    <section id="timeline" class="section-padding">
        <div class="container-invite">
          <div class="row">
            <div class="col-md-12 text-center">
                <h1>Our Journey</h1>
            </div>
          </div>
        </div>
      </section>

        <!-- <h1>How it Started!</h1> -->
        <section>
              <div class="timeline">
                <div class="container left conatiner-outside">
                  <div class="content">
                    <h1>How we Met</h1>
                    <div class="down-arrow floating-arrow"><a onclick="arrow1()" href="#invitation"><i id="arrow1-btn" class="fa fa-angle-down arrow-align"></i></a></div>
                    <p id="arrow1"></p>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h1>When I asked her</h1>
                    <div class="down-arrow floating-arrow"><a onclick="arrow2()" href="#invitation"><i id="arrow2-btn" class="fa fa-angle-down arrow-align"></i></a></div>
                    <p id="arrow2"></p>
                  </div>
                </div>
                <div class="container left">
                    <div class="content">
                      <h1>Popping the Question</h1>
                      <div class="down-arrow floating-arrow"><a onclick="arrow3()" href="#invitation"><i id="arrow3-btn" class="fa fa-angle-down arrow-align"></i></a></div>
                      <p id="arrow3"></p>
                    </div>
                  </div>
                <div class="container right">
                  <div class="content">
                    <h1>Enjoying Life!</h1>
                    <div class="down-arrow floating-arrow"><a onclick="arrow4()" href="#invitation"><i id="arrow4-btn" class="fa fa-angle-down arrow-align"></i></a></div>
                    <p id="arrow4"></p>
                  </div>
                </div>
                <div class="container left">
                  <div class="content">
                    <h1>When We Tie the Knot</h1>
                    <div class="down-arrow floating-arrow"><a onclick="arrow5()" href="#invitation"><i id="arrow5-btn" class="fa fa-angle-down arrow-align"></i></a></div>
                    <p id="arrow5"></p>
                  </div>
                </div>
                <div class="container right">
                  <div class="content">
                    <h1>The Future...</h1>
                    <div class="down-arrow floating-arrow"><a onclick="arrow6()" href="#invitation"><i id="arrow6-btn" class="fa fa-angle-down arrow-align"></i></a></div>
                    <p id="arrow6"></p>
                  </div>
                </div>
              </div>
        </section>
        <br><br><br>

        <section id="eng-pics" class="section-padding">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center">
                  <h1 style="text-align: center;">Engagment Photos</h1>
              </div>
            </div>
            

            <div class="row">
              <div class="col-md-2">
                <a class="picbox" rel="group" href="images/coverpic.JPG">
                  <div class="img-wrap">
                    <div class="overlay">
                      <i class="fa fa-search"></i>
                    </div>
                    <img src="images/coverpic.JPG" alt=""/>
                  </div>
                </a>
              </div>
          

        
                <div class="col-md-2">
                  <a class="picbox" rel="group" href="images/engpic1.JPG">
                    <div class="img-wrap">
                      <div class="overlay">
                        <i class="fa fa-search"></i>
                      </div>
                      <img src="images/engpic1.JPG" alt=""/>
                    </div>
                  </a>
                </div>
            

                  <div class="col-md-2">
                    <a class="picbox" rel="group" href="images/engpic2.JPG">
                      <div class="img-wrap">
                        <div class="overlay">
                          <i class="fa fa-search"></i>
                        </div>
                        <img src="images/engpic2.JPG" alt=""/>
                      </div>
                    </a>
                  </div>
  

                    <div class="col-md-2">
                      <a class="picbox" rel="group" href="images/engpic3.JPG">
                        <div class="img-wrap">
                          <div class="overlay">
                            <i class="fa fa-search"></i>
                          </div>
                          <img src="images/engpic3.JPG" alt=""/>
                        </div>
                      </a>
                    </div>
                 

                      <div class="col-md-2">
                        <a class="picbox" rel="group" href="images/engpic4.JPG">
                          <div class="img-wrap">
                            <div class="overlay">
                              <i class="fa fa-search"></i>
                            </div>
                            <img src="images/engpic4.JPG" alt=""/>
                          </div>
                        </a>
                      </div>
           

                    
                        <div class="col-md-2">
                          <a class="picbox" rel="group" href="images/engpic5.JPG">
                            <div class="img-wrap">
                              <div class="overlay">
                                <i class="fa fa-search"></i>
                              </div>
                              <img src="images/engpic5.JPG" alt=""/>
                            </div>
                          </a>
                        </div>
                  

                      
                          <div class="col-md-2">
                            <a class="picbox" rel="group" href="images/engpic6.JPG">
                              <div class="img-wrap">
                                <div class="overlay">
                                  <i class="fa fa-search"></i>
                                </div>
                                <img src="images/engpic6.JPG" alt=""/>
                              </div>
                            </a>
                          </div>
                        

                        
                            <div class="col-md-2">
                              <a class="picbox" rel="group" href="images/engpic7.JPG">
                                <div class="img-wrap">
                                  <div class="overlay">
                                    <i class="fa fa-search"></i>
                                  </div>
                                  <img src="images/engpic7.JPG" alt=""/>
                                </div>
                              </a>
                            </div>
                          

                          
                              <div class="col-md-2">
                                <a class="picbox" rel="group" href="images/engpic8.JPG">
                                  <div class="img-wrap">
                                    <div class="overlay">
                                      <i class="fa fa-search"></i>
                                    </div>
                                    <img src="images/engpic8.JPG" alt=""/>
                                  </div>
                                </a>
                              </div>

                              <div class="col-md-2">
                                  <a class="picbox" rel="group" href="images/engpic9.JPG">
                                    <div class="img-wrap">
                                      <div class="overlay">
                                        <i class="fa fa-search"></i>
                                      </div>
                                      <img src="images/engpic9.JPG" alt=""/>
                                    </div>
                                  </a>
                                </div>

                                <div class="col-md-2">
                                    <a class="picbox" rel="group" href="images/engpic10.JPG">
                                      <div class="img-wrap">
                                        <div class="overlay">
                                          <i class="fa fa-search"></i>
                                        </div>
                                        <img src="images/engpic10.JPG" alt=""/>
                                      </div>
                                    </a>
                                  </div>
          </div>
        </div>
      </section>
      <br>
      
              
        <section id="venue" class="section-padding">
          <h1 style="text-align: center;">Venue</h1>
          <h2 style="text-align: center;"><a href="http://www.loneoaklonghorns.com/">http://www.loneoaklonghorns.com/</a></h2>
          <div class="image">
              <img style="display:block; margin: 0 auto;" src="images/loneoakslogo.jpg"><br>
              <img style="display:block; margin: 0 auto;width: 50%" src="images/barn-lone-oak.jpg"><br>
              <img style="display:block; margin: 0 auto;width: 50%" src="images/loneoaklonghorns.jpg">
          </div>
        </section>
            
        <section id="hotels" class="section-padding">
          <h1 style="text-align: center;">Hotels Near By</h1>
          <h3 style="text-align: center;">Note: Hotels are most expensive during the Fall season.</h3>
          <!-- Google Maps API for the venue -->
          <div align="center" style="display:block; margin-left: auto; margin-right:auto">
              <iframe class="map" src="https://www.google.com/maps/d/embed?mid=1pWwffljxtl4m0_x0_JIF_kTf1Q4&hl=en"></iframe>
          </div>
        </section>

        <section id="attendance" class="section-padding">
          <h1 style="text-align: center;">Who's Attending</h1>
          <!-- PHP pull from MySQL for List of People Attending -->
          <table align="center">
              <tr>
                  <th>Name</th>
                  <th>Guests</th>
              </tr>
              <?php include 'list.php'; ?>
          </table>
        </section>
    
        <footer>
            <div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span class="to-top-wrapper"><a href="#top" class="to-top"><i class="fa fa-angle-up" style="font-size: 25px"></i></a></span>
                        <p>Developed by Tyler Chang</p>
                        <small>&copy; Copyright 2019, Changber Corporation</small>
                    </div>
                </div>
            </div>
        </footer>

<script src="js/scripts.min.js"></script>
</body>

<script>
  function arrow1() {
    var arrow1 = document.getElementById('arrow1'), arrow1_btn = document.getElementById('arrow1-btn');

      if(arrow1_btn.className == "fa fa-angle-down arrow-align")
      {
        arrow1.innerHTML = "We first met at Panda Express in 2016.<br><img src='/weddingsite/images/panda-express.png' height='45px' width='55px'>";
        arrow1_btn.className = "fa fa-angle-up arrow-align";
      }
      else
      {
        arrow1.innerHTML = "";
        arrow1_btn.className = "fa fa-angle-down arrow-align";
      }
    }


  function arrow2() {
   var arrow2 = document.getElementById('arrow2'), arrow2_btn = document.getElementById('arrow2-btn');

    if(arrow2_btn.className == "fa fa-angle-down arrow-align")
      {
        arrow2.innerHTML = "The day was September 26, 2016 and that's when the journey started. Many struggles between working together and balancing school put our relationship to the ultimate test.";
        arrow2_btn.className = "fa fa-angle-up arrow-align";
      }
      else
      {
        arrow2.innerHTML = "";
        arrow2_btn.className = "fa fa-angle-down arrow-align";
      }
  }
  function arrow3() {
    var arrow3 = document.getElementById('arrow3'), arrow3_btn = document.getElementById('arrow3-btn');

    if(arrow3_btn.className == "fa fa-angle-down arrow-align")
      {
        arrow3.innerHTML = "On the foggy morning of August 26, 2018 the big question was popped off the cliffs of Muir Beach Overlook.<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/eng1.JPG'><div class='img-wrap' style='width: 200px; hieght: 150px; margin-left: 100px;'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/eng1.JPG' alt=''/></div></a></div></div></div>";
        //<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/coverpic.JPG'><div class='img-wrap' style='width: 155px; hieght: 150px'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/overlook.JPG' alt=''/></div></a></div></div></div>
        arrow3_btn.className = "fa fa-angle-up arrow-align";
      }
      else
      {
        arrow3.innerHTML = "";
        arrow3_btn.className = "fa fa-angle-down arrow-align";
      }
  }
  function arrow4() {
    var arrow4 = document.getElementById('arrow4'), arrow4_btn = document.getElementById('arrow4-btn');

    if(arrow4_btn.className == "fa fa-angle-down arrow-align")
      {
        arrow4.innerHTML = "We both love to travel! We have gone to Thailand during the summer of 2018. Soon after to Ireland, France, and England of 2019 on a mission to see the world.<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/thailand1.JPG'><div class='img-wrap' style='width: 200px; hieght: 150px; margin-left: 100px;'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/thailand1.JPG' alt=''/></div></a></div></div></div>";
        arrow4_btn.className = "fa fa-angle-up arrow-align";
      }
      else
      {
        arrow4.innerHTML = "";
        arrow4_btn.className = "fa fa-angle-down arrow-align";
      }
  }
  function arrow5() {
    var arrow5 = document.getElementById('arrow5'), arrow5_btn = document.getElementById('arrow5-btn');

    if(arrow5_btn.className == "fa fa-angle-down arrow-align")
      {
        arrow5.innerHTML = "The big day is on September 26, 2020 at our beautiful venue" + '<a href="#venue"><br>' + "Lone Oaks LongHorns Ranch in Marysville, CA.</a>";
        arrow5_btn.className = "fa fa-angle-up arrow-align";
      }
      else
      {
        arrow5.innerHTML = "";
        arrow5_btn.className = "fa fa-angle-down arrow-align";
      }
  }
  function arrow6() {
    var arrow6 = document.getElementById('arrow6');
    var arrow6_btn = document.getElementById('arrow6-btn');

    if(arrow6_btn.className == "fa fa-angle-down arrow-align")
      {
        arrow6.innerHTML = "Our goals are to settle down and live a happy life!";
        arrow6_btn.className = "fa fa-angle-up arrow-align";
      }
      else
      {
        arrow6.innerHTML = "";
        arrow6_btn.className = "fa fa-angle-down arrow-align";
      }
  }
  
</script>
</html>