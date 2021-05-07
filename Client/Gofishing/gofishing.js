
$(document).ready(function() {
  $("#mappa").click(function() {
    $("#titolo").animate({marginLeft:"0%"});
    $(".area_regione").animate({opacity:1});
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
  );
  //OPPURE */
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


// SPOSTA MAPPA
/*
function assegnaEventHandlers(){
  var id=document.getElementById("box-btn1");
  id.addEventListener("click", mostra, mostra);
}

function mostra(e) {
     e.target.style.paddingTop="0";
     e.target.style.height="auto";
     e.target.style.display="none";
     document.getElementById("titolo").style.display="block";
}
function mostra1() {
  document.getElementById("box-btn1").style.paddingTop="0";
  document.getElementById("box-btn1").style.height="auto";
  document.getElementById("box-btn1").style.display="none";
  document.getElementById("titolo").style.display="block";
  document.getElementById("mappaItalia").style.backgroundColor="rgb(48, 48, 48)";
}*/

//MOSTRA INFO REGIONE
  function MM_findObj(n, d) {
    //v4.01
    var p,
        i,
        x;
    if (!d)
        d = document;
    if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
        d = parent.frames[n.substring(p + 1)].document;
        n = n.substring(0, p);
    }
    if (!(x = d[n]) && d.all)
        x = d.all[n];
    for (i = 0; !x && i < d.forms.length; i++)
        x = d.forms[i][n];
    for (i = 0; !x && d.layers && i < d.layers.length; i++)
        x = MM_findObj(n, d.layers[i].document);
    if (!x && d.getElementById)
        x = d.getElementById(n);
    return x;
}

function MM_showHideLayers() {
    //v3.0
    var i,
        p,
        v,
        obj,
        args = MM_showHideLayers.arguments;
    for (i = 0; i < (args.length - 2); i += 3)
        if ((obj = MM_findObj(args[i])) != null) {
            v = args[i + 2];
            if (obj.style) {
                obj = obj.style;
                v = (v == 'show') ? 'visible' : (v = 'hide') ? 'hidden' : v;
            }
            obj.visibility = v;
        }
}

function chiudiRegioni() {
  MM_showHideLayers('valdaosta', '', 'hide', 'piemonte', '', 'hide', 'liguria', '', 'hide', 'lombardia', '', 'hide', 'trentino', '', 'hide', 'veneto', '', 'hide', 'friuli', '', 'hide', 'emilia', '', 'hide', 'toscana', '', 'hide', 'marche', '', 'hide', 'umbria', '', 'hide', 'lazio', '', 'hide', 'abbruzzo', '', 'hide', 'molise', '', 'hide', 'campania', '', 'hide', 'basilicata', '', 'hide', 'puglia', '', 'hide', 'calabria', '', 'hide', 'sicilia', '', 'hide', 'sardegna', '', 'hide');
}
