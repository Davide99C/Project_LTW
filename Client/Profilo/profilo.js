
function apriGestione() {
    $('#change-password').css('display','none');
    $('#change-email').css('display','none');
    $('#change-username').css('display','none');
    $('#gestione').css('display','block');
}
function apriPassword() {
    $('#gestione').css('display','none');
    $('#change-email').css('display','none');
    $('#change-username').css('display','none');
    $('#change-password').css('display','block');
}
function apriEmail() {
  $('#gestione').css('display','none');
  $('#change-email').css('display','block');
  $('#change-username').css('display','none');
  $('#change-password').css('display','none');
}
function apriUsername() {
  $('#gestione').css('display','none');
  $('#change-email').css('display','none');
  $('#change-username').css('display','block');
  $('#change-password').css('display','none');
}


//CARICAMENTO

(function(){   
  if (window.addEventListener)
  {
    window.addEventListener("load", nascondi_loading_screen, false);
    document.body.style.display="none";   
  }else{
    window.attachEvent("onload", nascondi_loading_screen);
  }
})();
function nascondi_loading_screen()
{
  document.getElementById("loading_screen").style.display = 'none';
}

//BARRA MENU
function openNav() {
  if(window.matchMedia("(max-width: 900px)").matches) {
    document.getElementById("comparsa").style.width = "100%";
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("comparsa").style.zIndex='4';
  }
  else {
    document.getElementById("comparsa").style.width = "230px";
    document.getElementById("main").style.marginLeft = "230px";
  }
  
}

function closeNav() {
  document.getElementById("comparsa").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  
}
