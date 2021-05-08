/*CARICAMENTO
window.addEventListener(
  "scroll",
  () => {
    document.body.style.setProperty(
      "--scroll",
      window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
    );
  },
  false
);*/
//OPPURE 
(function(){   
  if (window.addEventListener)
  {
    window.addEventListener("load", nascondi_loading_screen, false);
    document.body.style.display="none";   
  }else{
    window.attachEvent("onload", nascondi_loading_screen);
  }
})();
function nascondi_loading_screen() {
  document.getElementById("loading_screen").style.display = 'none';
}

///////////////////////////////////////////////////////////////////////////////

 function validateForm() {
    //var emailValue = $('#email').val();
    var pwdValue = document.getElementById("password1").value;
    var pwdValue2 = document.getElementById("password2").value;
    if (pwdValue != pwdValue2) {
        passwordWrong();
        return false;
    }
  }
  function passwordWrong(){
    var input = document.getElementsByClassName('sign_error');
    input[1].innerHTML = "<h5 style='color:red'>Le password non corrispondono</h5>";
    input[2].innerHTML = "<h5 style='color:red'>Le password non corrispondono</h5>";
    setTimeout(() => {
        input[1].innerHTML = "";
        input[2].innerHTML = "";},5000);
    console.log("fatto");
}


//////////////////////////////////////////////////////////////////////////////////

function openNav() {
    document.getElementById("comparsa").style.width = "230px";
    document.getElementById("main").style.marginLeft = "230px";
    
  }
  
  function closeNav() {
    document.getElementById("comparsa").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    
  }
