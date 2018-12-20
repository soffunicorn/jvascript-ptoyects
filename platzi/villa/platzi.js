function aleatorio(min, max){
	var resultado = Math.floor(Math.random()*(max - min +1)) + min;
	return resultado;
}

for (var i=1;i<11;i++){
	document.write(aleatorio(10, 25) + "<br>");
}