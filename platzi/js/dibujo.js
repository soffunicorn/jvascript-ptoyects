var dibujo = document.getElementById("dibujo");
var lienzo = dibujo.getContext("2d");

function dibujarLinea (color, xini, yini, xfinal, yfinal){
lienzo.beginPath();//Agarra el lapiz
lienzo.strokeStyle = color; //escojes el color del lapiz
lienzo.moveTo(xini, yini); //te coloca la mano en el punto 100X y 100Y
lienzo.lineTo(xfinal, yfinal);//encuentra el segundo punto para trazar la 
lienzo.stroke(); //Traza la linea
lienzo.closePath(); //Para que suba el lapiz
}
function enviar(){
	var lineas = document.getElementById("nLineas").value;
	nl= parseInt(lineas);
var l = 0;
var yini = 10;
var x = 1;
 while (l < nl){
 		var y_ini = yini*l;
 		var xfin =yini*x; 
dibujarLinea("red", 0, y_ini, xfin, 250);
	l=l+1;
	x=x+1;
}	
}

var lineas = 25;

