var teclas = {
	LEFT:37,
	UP:38,
	RIGHT:39,
	DOWN:40
};
console.log(teclas);
document.addEventListener("keyup", dibujarTeclado);
var cuadro = document.getElementById("area");
var papel = cuadro.getContext("2d");
var x = 150;
var y = 150;
dibujarLinea("red", 149, 149, 151, 151, papel);
	function dibujarLinea(color, xinicial, yinicial, xfinal, yfinal, lienzo)
{
  lienzo.beginPath();
  lienzo.strokeStyle = color;
  lienzo.lineWidth = 3;
  lienzo.moveTo(xinicial, yinicial);
  lienzo.lineTo(xfinal, yfinal);
  lienzo.stroke();
  lienzo.closePath();
}

function dibujarTeclado( evento){
	var colorM = "fd4c5d";
	var movimientoP = 10;
	switch(evento.keyCode){
		case teclas.UP: 
		dibujarLinea(colorM, x, y, x, y - movimientoP, papel);
			y = y - movimientoP;
		break;
		case teclas.DOWN: 
		dibujarLinea(colorM, x, y, x, y + movimientoP, papel);
			y = y + movimientoP;
		break;
		case teclas.LEFT: 
		dibujarLinea(colorM, x, y, x  - movimientoP, y , papel);
			x = x - movimientoP;
		break;
		case teclas.RIGHT:
		dibujarLinea(colorM, x , y, x + movimientoP, y , papel);
			x = x + movimientoP; 
		break;
	}
}

