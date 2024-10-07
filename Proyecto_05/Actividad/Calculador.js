function sumar(){
    
    let n1 = document.getElementById("Number01");
    let n2 = document.getElementById("Number02");
    let sol = document.getElementById("respuesta");

    respuesta = parseInt(n1.value) + parseInt(n2.value);

    sol.innerHTML = "El resultado de la suma entre " + parseInt(n1.value) + " y " + parseInt(n2.value) + " es " + respuesta;

}

function restar(){
    
    let n1 = document.getElementById("Number01");
    let n2 = document.getElementById("Number02");
    let sol = document.getElementById("respuesta");

    respuesta = parseInt(n1.value) - parseInt(n2.value);

    sol.innerHTML = "El resultado de la resta entre " + parseInt(n1.value) + " y " + parseInt(n2.value) + " es " + respuesta;

}

function multiplicar(){
    
    let n1 = document.getElementById("Number01");
    let n2 = document.getElementById("Number02");
    let sol = document.getElementById("respuesta");

    respuesta = parseInt(n1.value) * parseInt(n2.value);
    
    sol.innerHTML = "El producto resultante entre " + parseInt(n1.value) + " y " + parseInt(n2.value) + " es " + respuesta;

}

function dividir(){
    
    let n1 = document.getElementById("Number01");
    let n2 = document.getElementById("Number02");
    let sol = document.getElementById("respuesta");

    if (parseInt(n2.value) == 0){

        sol.innerHTML = "Error, division entre 0.";
    
    } else {

        respuesta = parseInt(n1.value) / parseInt(n2.value);

        sol.innerHTML = "El resultado de la division entre " + parseInt(n1.value) + " y " + parseInt(n2.value) + " es " + respuesta;

    }
    
}