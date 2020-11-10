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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="/js/jquery/3.4.1/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/foundation/6.3.1/foundation.js"></script>
    <script type="text/javascript" src="/slick-1.4.1/slick/slick.js"></script> -->
</head>
<style>
/* .carousel-inner < img {
      width: 730px; 
      height: 50vh;
  } */

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

 #map {
        height: 350px;
        width: 560px;
        margin: auto;
      }

@media screen and (max-width: 640px) {
  #map {
        width: 100%;
      }
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
        
    <section class="section-padding">
      <div class="conatiner-invite">
        <div class="row">
          <div class="col-md-12 text-center">
              <h1>We're Getting Hitched!</h1>
              <p>The date is Septemeber 26th, 2020 and we would like you to be part of it.</p> 
              <h1><b>Countdown</b></h1><h1><b id="countdown"></b></h1>
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
            <i class="fa fa-angle-down arrowdown" style="font-size: 50px"></i><br>
            </div>
          </div>
        </div>
      </section>
      <!-- <button type=button class="test">click</button><br><br><br><br><br><br> -->
        <!-- <h1>How it Started!</h1> -->
        <section id="timeline1">
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
                    <h1>Our Beginning</h1>
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
        <script>
         var coll = document.getElementsByClassName("arrowdown");
          var i;

          var content = document.getElementById("timeline1");
              content.style.display = "none";

          for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
              if (content.style.display == "block") {
                content.style.display = "none";
              } else {
                content.style.display = "block";
              }
            });
          }
        </script>

        <br><br><br>
        <section id="eng-pics" class="section-padding">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center">
                  <h1 style="text-align: center;">Engagment Photos</h1>
              </div>
            </div>
            
            <div class="row">

            <div class="row">
              <div class="col-md-2">
                <a class="picbox" rel="group" href="images/wedding_welcome_sign.JPG">
                  <div class="img-wrap">
                    <div class="overlay">
                      <i class="fa fa-search"></i>
                    </div>
                    <img src="images/wedding_welcome_sign.JPG" alt=""/>
                  </div>
                </a>
              </div>

              <!-- <div class="col-md-2">
                <a class="picbox" rel="group" href="images/coverpic.JPG">
                  <div class="img-wrap">
                    <div class="overlay">
                      <i class="fa fa-search"></i>
                    </div>
                    <img src="images/coverpic.JPG" alt=""/>
                  </div>
                </a>
              </div> -->
          
        
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
                 
                      <!-- <div class="col-md-2">
                        <a class="picbox" rel="group" href="images/engpic4.JPG">
                          <div class="img-wrap">
                            <div class="overlay">
                              <i class="fa fa-search"></i>
                            </div>
                            <img src="images/engpic4.JPG" alt=""/>
                          </div>
                        </a>
                      </div> -->
           
                    
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

                                  <div class="col-md-2">
                                    <a class="picbox" rel="group" href="images/engpic2020_1.JPG">
                                      <div class="img-wrap">
                                        <div class="overlay">
                                          <i class="fa fa-search"></i>
                                        </div>
                                        <img src="images/engpic2020_1.JPG" alt=""/>
                                      </div>
                                    </a>
                                  </div>

                                  <div class="col-md-2">
                                    <a class="picbox" rel="group" href="images/engpic2020_2.JPG">
                                      <div class="img-wrap">
                                        <div class="overlay">
                                          <i class="fa fa-search"></i>
                                        </div>
                                        <img src="images/engpic2020_2.JPG" alt=""/>
                                      </div>
                                    </a>
                                  </div>

                                  <div class="col-md-2">
                                    <a class="picbox" rel="group" href="images/engpic2020_3.JPG">
                                      <div class="img-wrap">
                                        <div class="overlay">
                                          <i class="fa fa-search"></i>
                                        </div>
                                        <img src="images/engpic2020_3.JPG" alt=""/>
                                      </div>
                                    </a>
                                  </div>

                                  <div class="col-md-2">
                                    <a class="picbox" rel="group" href="images/engpic2020_4.JPG">
                                      <div class="img-wrap">
                                        <div class="overlay">
                                          <i class="fa fa-search"></i>
                                        </div>
                                        <img src="images/engpic2020_4.JPG" alt=""/>
                                      </div>
                                    </a>
                                  </div>
          </div>
        </div>
      </section>
      <br>
      
              
        <section id="venue" class="section-padding">
          <h1 style="text-align: center;">Venue</h1><br>
          <!-- <h2 style="text-align: center;"><a href="http://www.loneoaklonghorns.com/">http://www.loneoaklonghorns.com/</a></h2> -->
          <center>
          <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BrQyAeHHegF/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BrQyAeHHegF/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BrQyAeHHegF/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Lone Oak Longhorns (@loneoaklonghorns)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-12-11T21:33:15+00:00">Dec 11, 2018 at 1:33pm PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script></center>
          <div class="image">
              <!-- <a href="http://www.loneoaklonghorns.com/">
                <img style="display:block; margin: 0 auto;" src="images/loneoakslogo.jpg">
              </a><br>
                <img style="display:block; margin: 0 auto;width: 50%" src="images/barn-lone-oak.jpg"><br>
                <img style="display:block; margin: 0 auto;width: 50%" src="images/loneoaklonghorns.jpg">            -->
               <!--Carousel Wrapper-->
               <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active" align="center">
                    <img src="images/loneoakslogo.jpg" alt="Lone Oaks Logo">
                  </div>
                  <div class="carousel-item" align="center">
                    <img src="images/barn-lone-oak.jpg" alt="Barn of Lone Oaks">
                  </div>
                  <div class="carousel-item" align="center">
                    <img src="images/loneoaklonghorns.jpg" alt="House at Lone Oaks">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
                </div>
          
        </section>

        <section id="hotels" class="section-padding">
          <h1 style="text-align: center;">Hotels Near By</h1>
        </section>
        <a href="https://www.hardrockhotels.com/sacramento" rel=""><img src="images/hardrockSAC.PNG" class="hardrock" style="display: block; margin-left: auto; margin-right: auto; margin-bottom: 15px;" id="hardrock"></a>
        	<!-- Google Maps API for the venue -->
        	<div id="map"></div>

          <style>
          .airbnb {
            margin-left: 45px;
          }

          .airbnb-frame {
              width: 450px;
              height: 300px;
              margin: auto;
          }

          @media (max-width: 650px) {
            .airbnb {
               margin-left: auto;
            }
          }

          @media (max-width: 498px) {
            .airbnb {
               padding-left: 25px;
            }

          .airbnb-frame {
              width: 100%;
              height: auto;
            }
          }

   @media (max-width: 750px) {
            .hardrock {
                width: 95%;
              }
          }
        </style>
        <section id="airbnb" class="section-padding">
          <h1 style="text-align: center;">AirBnB's Near By</h1>
          <div class="container-fluid airbnb">
            <div class="row">
                <div class="col-lrg-1">
                  <div class="airbnb-embed-frame airbnb-frame" data-id="20305254" data-view="home"><a href="https://www.airbnb.com/rooms/20305254?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget">View On Airbnb</a><a href="https://www.airbnb.com/rooms/20305254?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget" rel="nofollow">Home in the heart of downtown Marysville, close to Yuba City, Oroville, and Sacramento!</a><script async="" src="https://www.airbnb.com/embeddable/airbnb_jssdk"></script></div>
                </div>
                <div class="col-lrg-1">
                  <div class="airbnb-embed-frame airbnb-frame" data-id="25034481" data-view="home"><a href="https://www.airbnb.com/rooms/25034481?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget">View On Airbnb</a><a href="https://www.airbnb.com/rooms/25034481?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget" rel="nofollow">Serene Country Home</a><script async="" src="https://www.airbnb.com/embeddable/airbnb_jssdk"></script></div>
                </div>
                <div class="col-lrg-1">
                  <div class="airbnb-embed-frame airbnb-frame" data-id="7619516" data-view="home"><a href="https://www.airbnb.com/rooms/7619516?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget">View On Airbnb</a><a href="https://www.airbnb.com/rooms/7619516?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget" rel="nofollow">Super Comfortable Queen Bed - 5 Star Super Host</a><script async="" src="https://www.airbnb.com/embeddable/airbnb_jssdk"></script></div>
                </div>
                <div class="col-lrg-1">
                  <div class="airbnb-embed-frame airbnb-frame" data-id="7619521" data-view="home"><a href="https://www.airbnb.com/rooms/7619521?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget">View On Airbnb</a><a href="https://www.airbnb.com/rooms/7619521?s=66&amp;shared_item_type=1&amp;virality_entry_point=1&amp;sharer_id=185951496&amp;source=embed_widget" rel="nofollow">Ultra Comfy Queen Bed - 5 Star Super Host</a><script async="" src="https://www.airbnb.com/embeddable/airbnb_jssdk"></script></div>
                </div>
              </div>
            </div>
        </section>

        <section id="registry" class="section-padding">
        <div class="container-invite">
          <div class="row">
            <div class="col-md-12 text-center">
                <h1>Registry</h1>
            </div>
          </div>
        </div>
        <form action="submit.php" method="post" >
            <div class="top"></div>
                <div class="registry content"> <!-- style="width: 400px; height: 200px; margin: auto" -->
                    <div class ="info">
                      <p>We do not have a wedding registry. As many of you already know, we currently live together and have too much stuff as it is. However we are trying to save for a down payment on a house. Any contributions would be greatly appericated!</p>
                    </div>
                </div>
          </form>
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