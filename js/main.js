//Nav Bar Functionallity
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

var nav = document.getElementById('nav');
var head = document.getElementById('head');
var rsvp = document.getElementById('rsvp');
var navicon = document.getElementById('navicon');
var menuResponsive = document.getElementById('menuResponsive');

window.onscroll = function() {
if(window.pageYOffset > 650) {
  nav.className = "navigation fixed";
  nav.style.backgroundColor = "rgba(129, 129, 129, 0.65)"; //rgba(239, 213, 186, 0.88)
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

 //Timeline Arrow Functions
 function arrow1() {
  var arrow1 = document.getElementById('arrow1'), arrow1_btn = document.getElementById('arrow1-btn');
    if(arrow1_btn.className == "fa fa-angle-down arrow-align")
    {
      arrow1.innerHTML = "We first met at Panda Express in December of 2015.<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/met.jpg'><div class='img-time img-wrap'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/met.jpg' alt=''/></div></a></div></div></div>";
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
      arrow2.innerHTML = "On September 26, 2016 I mustered up the courage to ask Caley to be my girlfriend. Little did we know, it was the beginning to a new chapter of our lives.<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/date.JPG'><div class='img-time img-wrap'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/date.JPG' alt=''/></div></a></div></div></div>";
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
      arrow3.innerHTML = "On the foggy morning of August 26, 2018 the big question was popped off the cliffs of Muir Beach Overlook.<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/eng1.JPG'><div class='img-time2 img-wrap'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/eng1.JPG' alt=''/></div></a></div></div></div>";
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
      arrow4.innerHTML = "We went to Thailand during the summer of 2018. We traveled to Ireland, France, and England in 2019.<section id='eng-pics' class='section-padding'><div class='container-fluid'><div class='row'><div class='col-md-2'><a class='picbox' rel='group' href='images/thailand3.JPG'><div class='img-time3 img-wrap'><div class='overlay'><i class='fa fa-search'></i></div><img src='images/thailand3.JPG' alt=''/></div></a></div></div></div>";
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
      arrow6.innerHTML = "In the next coming years we plan to purchase a home and we would like to travel as much as possible.";
      arrow6_btn.className = "fa fa-angle-up arrow-align";
    }
    else
    {
      arrow6.innerHTML = "";
      arrow6_btn.className = "fa fa-angle-down arrow-align";
    }
}

//RSVP Function
function addGuest() {
  var guestCount = document.getElementById('guests'); 
  var add = document.getElementById('guestNames');
  var form = document.getElementById('form');
  var buttons = document.getElementById('buttons');
  
  if(guestCount.value == 2)
  {
    add.innerHTML = `<input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: -10px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required>`;
    if(document.body.clientHeight >= 650)
      {
        form.style.height = '600px';
        buttons.style.marginTop = '10px';
      }
    $(window).resize(function() {
      if(document.body.clientHeight < 650) {
        form.style.height = '450px';
        // buttons.style.marginTop = '80px';
      }
      else {
        form.style.height = '600px';
      }
    });
   
  }
  else if(guestCount.value == 3)
  {
    add.innerHTML = `<input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: -10px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required><input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: 20px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required>`;
    if(document.body.clientHeight >= 650)
      {
        form.style.height = '700px';
        buttons.style.marginTop = '25px';
      }

    $(window).resize(function() {
      if(document.body.clientHeight < 650)
      {
        form.style.height = '450px';
        // buttons.style.marginTop = '25px';
      }
      else {
        form.style.height = '700px';
      }
    });
  }
  else if(guestCount.value == 4)
  {
    add.innerHTML = `<input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: -10px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required><input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: 20px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required><input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: 20px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required>`;
    $(window).resize(function() {
      if(document.body.clientHeight >= 650)
      {
        form.style.height = '700px';
        buttons.style.marginTop = '10px';
      }
    });
  }
  else if(guestCount.value == 5)
  {
    add.innerHTML = `<input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: -10px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required><input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: 20px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required><input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: 20px; margin-bottom: -10px" required><input type="text" name="name[]" placeholder="First and Last Name" style="margin-top: 20px; margin-bottom: -10px" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" required>`;
    $(window).resize(function() {
      if(document.body.clientHeight >= 650)
      {
        form.style.height = '750px';
        buttons.style.marginTop = '10px';
      }
    });
  }
  else
  {
    add.innerHTML = '';
    form.style.height = '';
    buttons.style.marginTop = '';
  }
}

//Google Maps API
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: {lat: 39.145725, lng: -121.591355 }
      });
      var icons = {
        hotels: {
          icon: 'hotel-icon.png'
        }
      };
      var bounds = {
        north: 39.16771,
        south: 39.11532,
        east: -121.54723,
        west: -121.65143
      };
      //Display the area between the location southWest and northEast.
      map.fitBounds(bounds);

      var features = [
        {
          position: new google.maps.LatLng(39.139922, -121.629513),
          type: 'hotels',
        }, {
          position: new google.maps.LatLng(39.138659, -121.635635),
          type: 'hotels'
        }, {
          position: new google.maps.LatLng(39.143979, -121.590533),
          type: 'hotels'
        }, {
          position: new google.maps.LatLng(39.136147, -121.637213),
          type: 'hotels'
        }, {
          position: new google.maps.LatLng(39.145979, -121.595348),
          type: 'hotels'
        }, {
          position: new google.maps.LatLng(39.125059, -121.577292),
          type: 'hotels'
        }
      ];
      // Add 5 markers to map at random locations.
      // For each of these markers, give them a title with their index, and when
      // they are clicked they should open an infowindow with text inforamtion on hotels
      
      var hotel_name = [
        'Travelodge by Wyndham Yuba City',
        'Best Western Yuba City Inn',
        'Motel 6 Marysville CA',
        'Hampton Inn & Suites Yuba City',
        'Americas Best Value Inn Marysville',
        'Peach City Inn'
      ];
      var hotel_address = [
        '965 Gray Ave, Yuba City, CA 95991',
        '894 W Onstott Frontage Rd, Yuba City, CA 95991',
        '803 E St, Marysville, CA 95901',
        '1375 Sunsweet Blvd, Yuba City, CA 95991',
        '721 10th St, Marysville, CA 95901',
        '1078 N Beale Rd, Marysville, CA 95901'
      ];
      var hotel_phoneNumber = [
        '(530) 777-5184',
        '(530) 674-1650',
        '(530) 743-5465',
        '(530) 751-1714',
        '(530) 742-8586',
        '(530) 777-9030'
      ];
      var hotel_rating = [
        '3.8',
        '4.1',
        '2.9',
        '4.3',
        '3.6',
        '4.1'
      ];
      var hotel_website = [
        'https://www.google.com/maps/place/Travelodge+by+Wyndham+Yuba+City/@39.139926,-121.6317018,17z/data=!4m16!1m7!3m6!1s0x8084acad40970911:0xa0cd5dae4cf4fa00!2s965+Gray+Ave,+Yuba+City,+CA+95991!3b1!8m2!3d39.1399219!4d-121.6295131!3m7!1s0x8084acad38b06d6b:0x2e4b6e79e7d37bb9!5m2!4m1!1i2!8m2!3d39.139935!4d-121.6294557',
        'https://www.google.com/maps/place/Best+Western+Yuba+City+Inn/@39.1386163,-121.6356819,21z/data=!4m16!1m7!3m6!1s0x8084acae5a946c4f:0x3917a44419c7f69f!2s894+W+Onstott+Frontage+Rd,+Yuba+City,+CA+95991!3b1!8m2!3d39.1386453!4d-121.6358122!3m7!1s0x8084acae5a946c4f:0xbaf68c9f36ad8806!5m2!4m1!1i2!8m2!3d39.138659!4d-121.6356348',
        'https://www.google.com/maps/place/Motel+6+Marysville+CA/@39.1439595,-121.5908651,20.29z/data=!4m16!1m7!3m6!1s0x809b5373a5bac51b:0x461608e7e2b0512b!2s419+8th+St,+Marysville,+CA+95901!3b1!8m2!3d39.143929!4d-121.590385!3m7!1s0x809b5373ade76281:0x24a6fa3c39a49487!5m2!4m1!1i2!8m2!3d39.143827!4d-121.590874',
        'https://www.google.com/maps/place/Hampton+Inn+%26+Suites+Yuba+City/@39.1361367,-121.6375123,19.25z/data=!4m16!1m7!3m6!1s0x8084acb02c3f942b:0x330270864e20f3b3!2s1375+Sunsweet+Blvd,+Yuba+City,+CA+95993!3b1!8m2!3d39.1361465!4d-121.6372134!3m7!1s0x8084acb0320b97e1:0xe9e24714864e9998!5m2!4m1!1i2!8m2!3d39.136127!4d-121.637141',
        'https://www.google.com/maps/place/Americas+Best+Value+Inn+Marysville/@39.145983,-121.5975366,17z/data=!4m16!1m7!3m6!1s0x809b536e38a57e2b:0x2c5622c37b8d3f9d!2s721+10th+St,+Marysville,+CA+95901!3b1!8m2!3d39.1459789!4d-121.5953479!3m7!1s0x809b536e38af6ba3:0x3c6e494b421b6ae3!5m2!4m1!1i2!8m2!3d39.1459789!4d-121.5953479',
        'https://www.google.com/maps/place/Peach+City+Inn/@39.1250346,-121.5793806,17z/data=!4m16!1m7!3m6!1s0x809b52549f492815:0x712526015d892cc4!2s1078+N+Beale+Rd,+Marysville,+CA+95901!3b1!8m2!3d39.1250588!4d-121.5772916!3m7!1s0x809b52549f3b700f:0x51eae48da6825ea6!5m2!4m1!1i2!8m2!3d39.1251128!4d-121.5772538'
      ];
    for (var i = 0; i < features.length; i++) {
      var contentString = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">'+ hotel_name[i] +'</h1>'+
          '<div id="bodyContent">'+
          '<b>Address:</b> ' + hotel_address[i] + '<br>' +
          '<b>Telephone:</b> ' + hotel_phoneNumber[i] + '<br>' +
          '<b>Rating:</b> ' + hotel_rating[i] + '<br>' +
          '<b>Website:</b><a href="' + hotel_website[i] + '">' + hotel_website[i] + '</a><br>' +
          '</div>'+
          '</div>';
          console.log(contentString);
          var marker = new google.maps.Marker({
          position: features[i].position,
          type: features[i].type,
          map: map
        });
        attachSecretMessage(marker, contentString);
      }
    }
    
    function attachSecretMessage(marker, contentString) {
      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });
      marker.addListener('click', function() {
        infowindow.open(marker.get('map'), marker);
      });
    }
