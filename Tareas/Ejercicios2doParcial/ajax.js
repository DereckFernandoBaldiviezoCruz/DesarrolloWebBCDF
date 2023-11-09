function cargarContenido(url) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
  
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("contenido").innerHTML = xhr.responseText;
      }
    };
  
    xhr.send();
  }
  var turno = 'X';
  function realizarMovimiento(btn) {
    if (btn.innerHTML === ' ' && turno === 'X') {
      btn.innerHTML = 'X';
      turno = 'O';
    } else if (btn.innerHTML === ' ' && turno === 'O') {
      btn.innerHTML = 'O';
      turno = 'X';
    }
    document.getElementById('mensaje').textContent = 'Turno: ' + turno;
  }
  
  // Definir funciones específicas para cada ejercicio
  function ejercicio1() {
    // Lógica del ejercicio 1
  }
  
  function ejercicio2() {
    // Lógica del ejercicio 2
  }
  
  // ... y así sucesivamente para los demás ejercicios.
  