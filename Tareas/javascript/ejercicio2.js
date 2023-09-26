function calcular_factorial(numero){

    if(numero == 0 || numero == 1){
        return 1;
    }else return numero * calcular_factorial(numero-1);

}

numero = parseInt(prompt("Introduce el numero a calcular el factorial: "));

if(!isNaN(numero)){
    factorial = calcular_factorial(numero);
    document.write("El factorial de "+ numero + " es: "+factorial);
}
else document.write("El numero introducido no es valido.");
