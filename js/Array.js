var iconImg; 
var pikturat = ["FPD", "FPDI", "FPA", "FPH"];
var pershkrimi = [ "Fotografi i pare digjital", "Fotografi i pare diellor", 
   "Fotografi i pare ajror", "Fotografi i pare ne hapsire"];

// kap nje imazh te rastesishem dhe ndryshon atributin alt korrespondues

function kapImazhin()
{
   var index = Math.floor( Math.random() * 4);
   iconImg.setAttribute( "src","foto/" + pikturat[ index ] + ".webp" );
   iconImg.setAttribute( "alt", pershkrimi[ index ] );
} 


function start()
{
   iconImg = document.getElementById( "img5" );
   iconImg.addEventListener( "click", kapImazhin, false );
} // end function start

window.addEventListener( "load", start, false );
