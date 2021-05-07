$(document).ready(function() {

  $('#login').click(function(){
    var userValue = $('#email').val();
    var pwdValue = $('#password1').val();
    var pwdValue2 = $('#password2').val();

    if(pwdValue != pwdValue2){
        passwordWrong(pwdValue, pwdValue2);
    }else{
        $.ajax({
            type: "POST",
            url: 'http://localhost/Progetto_LTW/Project_LTW/Client/php/registrazione.php',
            data: ({ email : userValue, password: pwdValue }),
            dataType: "html",
            success: function(data) {
                checkLogin( data );
                return data;
            },
            error: function() {
                console.log('Error occured');
            }
        });//ajax
    }
  });//click

});//jq

function checkLogin(data){
  if(data == "ok"){
     var login_box = document.getElementsByClassName('login_box');
     login_box[0].innerHTML = "<h1 style='color:white;'> Account Creato </h1>";
      //window.alert("Account creato");
     setInterval(() => {window.location = "login.html";}, 2000);
  }else{
    emailWrong();
  }
};

function emailWrong(){
    var input = document.getElementsByClassName('sign_error');
    input[0].innerText = "Email Already Exist";
    setTimeout(() => {input[0].innerText = "";},5000);
    console.log("fatto");

}

function passwordWrong(){
    var input = document.getElementsByClassName('sign_error');
    input[1].innerText = "Password Doesn't match";
    input[2].innerText = "Password Doesn't match";
    setTimeout(() => {
        input[1].innerText = "";
        input[2].innerText = "";},5000);
    console.log("fatto");
}

 function validateForm() {
    if (document.pass1.value != document.pass2.value) {
        alert("Errore: Nel campo di conferma password la password non corrisponde");
        return false;
    }
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
function nascondi_loading_screen()
{
  document.getElementById("loading_screen").style.display = 'none';
}