function iniciar(){
	var elemento = document.getElementById('lienzo');
	lienzo = elemento.getContext('2d');
	/* fillRect -> dibuja una figura de un rectangulo relleno (por defecto negro) */
	/* fillRect ->x,y , ancho , largo*/
	lienzo.fillRect(110,110,100,100);
	



}

window.addEventListener("load",iniciar,false);