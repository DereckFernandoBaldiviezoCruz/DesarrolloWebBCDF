function esPalindromo(cadena) {
    cadena = cadena.toLowerCase().replace(/\s/g, '');
    var longitud = cadena.length;
    var inicio = 0;
    var fin = longitud - 1;

    while (inicio < fin) {
        if (cadena.charAt(inicio) !== cadena.charAt(fin)) {
            return false;
        }
        inicio++;
        fin--;
    }

    return true;
}

texto = prompt("Introduzca una cadena: ");
if (esPalindromo(texto)) {
    document.write("La cadena es un palíndromo.");
} else {
    document.write("La cadena no es un palíndromo.");
}
