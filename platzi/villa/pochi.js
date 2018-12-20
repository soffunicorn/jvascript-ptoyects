var imagenes = [];
imagenes["vaquita"] = "img/vaca.png";
imagenes["pollito"] = "img/cerdito.png";
imagenes["cerdito"] = "img/bancontit.png"; //esto se le dice diccionario
class pochi{
	constructor(n, v, a){
		this.imagen = new Image();
		this.nombre = n;
		this.ataque = a;
		this.vida = v;
		this.imagen.src = imagenes[this.nombre];
	}
	hablar(){
		alert(nombre);
	}
	mostrar(){
		document.body.appendChild(this.imagen);
	}

}
var vaquita = new pochi("vaquita", 150, 50);
var pollito = new pochi("pollito", 60, 60);
var cerdito = new pochi("cerdito", 60, 60);
vaquita.mostrar();
 /*var imagenes = [];
imagenes["Cauchin"] = "vaca.png";
imagenes["Pokacho"] = "pollo.png";
imagenes["Tocinauro"] = "cerdo.png";

var coleccion = [];
coleccion.push( new Pakiman("Cauchin", 100, 30) );
coleccion.push(new Pakiman("Pokacho", 80, 50));
coleccion.push(new Pakiman("Tocinauro", 120, 40));

for(var freddito of coleccion)
{
  freddito.mostrar();
}

for(var x in coleccion[0])
{
  console.log(x);
}ESTO ES DE PLATZI */