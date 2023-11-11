document.getElementById('login').addEventListener('click', function() {
    fetch('login.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('resultado').innerHTML = data;
            iniciarAutenticacion();
        });
});

function iniciarAutenticacion() {
    document.getElementById('ingresar').addEventListener('click', function(e) {
        e.preventDefault();
        
        const usuario = document.getElementById('usuario').value;
        const contrasena = document.getElementById('contrasena').value;

        const datos = new FormData();
        datos.append('usuario', usuario);
        datos.append('contrasena', contrasena);

        fetch('autenticar.php', {
            method: 'POST',
            body: datos,
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('resultado').innerHTML = data;
        });
    });
}
