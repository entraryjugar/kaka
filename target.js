function mostrar(){
	document.getElementById('dick').style.display = 'block';

}
function ocultar(){
	
document.getElementById('dick').style.display = 'none';


}

const boton = document.getElementById('boton')
const quitar = document.getElementById('dick');

dataLayer = [];

boton.addEventListener('click', () => {
	quitar.classList.remove('activo');
	
	localStorage.setItem('cookies-aceptadas', true);
	dataLayer.push({'event': 'cookies-aceptadas'});
});
