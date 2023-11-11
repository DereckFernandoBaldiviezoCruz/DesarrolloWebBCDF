function cargarContenidoFetch(abrir){
    var contenedor;
    contenedor = document.getElementById('principal');
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function cargarBotonesFetch(abrir){
    var contenedor;
    contenedor = document.getElementById('menu');
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function mostrarImagen(imagen){
        var contenedor;
        var mensaje;
        contenedor =document.getElementById('principal');
        mensaje = document.getElementById('mensaje')
        contenedor.innerHTML='<img src="images/'+imagen+'" class="imagen">';
    mensaje.innerHTML = `<button class="menu" onclick='cargarBotones("botones.html"),colocarDatos()'>Menu</button>`+imagen;
}