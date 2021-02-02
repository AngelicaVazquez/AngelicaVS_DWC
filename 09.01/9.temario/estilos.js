inicio();
function inicio(){
	// numerar las actividades
	// obtener todos los b que tengan Actividades
	var z=document.querySelectorAll('b');
	k=1;
	for (x of z){
		//console.log(x.innerText);
		if (x.innerText=='Actividades'||x.innerText=='Actividad'){
			x.innerText='Actividad '+k;
			x.style.backgroundColor=ponColor();
			k++;
		}
	}
}
function ponColor(){
	var r=aleatorio(200,255).toString(16); // pasar a hexadecimal como cadena
	var g=aleatorio(100,255).toString(16);  
	var b=aleatorio(100,255).toString(16);
	return '#'+r+g+b; // color en css tres hexadecimales
	//console.log(ele);
}
function aleatorio(a,b) {
	return Math.round(Math.random()*(b-a)+parseInt(a));
}