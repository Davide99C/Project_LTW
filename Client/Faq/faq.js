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

  //CARICAMENTO
window.addEventListener(
  "scroll",
  () => {
    document.body.style.setProperty(
      "--scroll",
      window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
    );
  },
  false
);
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