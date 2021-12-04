console.log('Hola rutina');
let ejercicio = document.getElementById('ejercicio-1');
let ejercicio2 = document.getElementById('ejercicio-2');

function siguiente(){
	console.log('Evento');
	ejercicio.style.display="none";
	ejercicio2.style.display="block";
}