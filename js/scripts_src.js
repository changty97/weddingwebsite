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