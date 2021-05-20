
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

function validatePassword() {
    //var emailValue = $('#email').val();
    var pwdValue = document.getElementById("new-password").value;
    var pwdValue2 = document.getElementById("new-password2").value;
    if (pwdValue != pwdValue2) {
        passwordWrong();
        return false;
    }
}
function passwordWrong(){
  var input = document.getElementsByClassName('sign_error');
  input[1].innerHTML = "<h5 style='color:red'>Le password non corrispondono</h5>";
  input[2].innerHTML = "<h5 style='color:red'>Le password non corrispondono</h5>";
  document.getElementById("new-password").style.borderColor="red";
  document.getElementById("new-password2").style.borderColor="red";
  
  setTimeout(() => {
      input[1].innerHTML = "";
      input[2].innerHTML = "";
      document.getElementById("new-password").style.borderColor="#ccc";
      document.getElementById("new-password2").style.borderColor="#ccc"; 
    },5000);
  console.log("fatto");
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
