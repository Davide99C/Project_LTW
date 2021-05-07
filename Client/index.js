$(document).ready(function() {
  $(".open-button").click(function() {
    $("#myForm").animate({opacity:1});
  });
  $(".cancel").click(function() {
    $("#myForm").animate({opacity:0});
  });
});

function openNav() {
  document.getElementById("comparsa").style.width = "230px";
  document.getElementById("main").style.marginLeft = "230px";
  
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