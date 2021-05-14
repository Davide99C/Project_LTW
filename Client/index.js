  
$(document).ready(function() {
  $(".open-button").click(function() {
    $("#myForm").animate({opacity:1});
  });
  $(".cancel").click(function() {
    $("#myForm").animate({opacity:0});
  });
});


function openNav() {
  if(window.matchMedia("(max-width: 700px)").matches) {
    document.getElementById("comparsa").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
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



//CHAT

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


/*window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("comparsa").style.top = "0";
  } else {
    document.getElementById("comparsa").style.top = "85px";
  }
}*/


//CARICAMENTO
/*
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


//CHAT POP-UP
function chat() {
  document.getElementById("img email").style.visibility="visible";
}


//VERIFICA TEXT-AREA
function verifyInput( objEvent ){
// il 44 e\' il codice della virgola
if( objEvent.keyCode==44 ) {
  //var testo=$("#area-email").val();
  alert("la virgola non è ammessa");
  //$("#area-email").val(testo);
  return false;
  }
}

//CONTROLLO SE L'ACCESSO È STATO EFFETTUATO O MENO  //DIRETAMENTE DAL FILE HTML 
/*function caricaLogin() {
  var x = new URLSearchParams(window.location.search);
  var username = x.get('nome');console.log(username);
  var surname = x.get('cognome');console.log(surname);
  if (username && surname) {
      document.getElementById("accesso").innerHTML = "<img class='img-accedi' src='img/44948.png' style='height:20px; width:20px;'>"+' '+username+' '+surname;
  }
  else document.getElementById("accesso").innerHTML = "<img class='img-accedi' src='img/44948.png' style='height:20px; width:20px;'>&nbspACCEDI";
}*/