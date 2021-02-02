/*
abrimos las pestañas contenidas en la actividad
*/

function inicio(){
	var lista=document.getElementsByTagName('b');
	for (x of lista){
		x.onclick=click;
	}
}
function click(){

	var ref=document.querySelectorAll('a[href]');
	var kk=[]; 
	for (x of ref){
		var j=x.innerHTML;	
		kk.push(j);
	}
	console.log(kk);

	var texto=this.nextSibling.data;
	var indices=texto.match(/\[\d\d\]/g);
	indices.reverse();
	var mi=window;
	for (x of indices){
		var k=x.substr(1,2);
		 var i=kk.indexOf(k);
		if( i!=-1 ){
			//ref[i].click();
			//console.log(ref[i]);
			window.open(ref[i].href);
		}		
	}
	// buscar en los hijos de actividad todos los []
	// leer los numeros
	// para cada numero abrir en otra pestaña una referencia
	// volver al mi pagina
}
window.onload=inicio;