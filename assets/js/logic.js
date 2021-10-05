// 1- Javascript (20% : 10,10) 
// Create a simple array named array1 with these 3 colors
function printArray1(){
    const array1 = ["red"," blue"," yellow"];
    console.log(array1);
}

// Create an associative array named array2 and store these 3 students
function printArray2(){
    // <p id = "prueba3"> </p>
    const array2 = [
        {Nombre:"Pedro",Edad:22,Universidad:"UNA"},
        {Nombre:"Maria",Edad:29,Universidad:"UCR"},
        {Nombre:"Julio",Edad:35,Universidad:"TEC"},
        {Nombre:"Karla",Edad:19,Universidad:"UCR"}
    ]; 
    console.log(array2);
}

// 2- HTML Structure (20% : 5,5,10)
// Create a text input
// Create a button below that input
// Create a click event in the previous button that changes its text to the following

// <p> Hola </p> 
function cambio(){
    document.getElementById('prueba').innerHTML = "Excelente!"; 
}


$(document).ready(function (){
    console.log(printArray1());

    //muestra Holaaa
    var elem = $("p");
    // $("#prueba2").text(elem.innerHTML);
    console.log($("#prueba2"));

    //cambia Holaaa por alter value
    var elem2 = $("#prueba2");
    elem2.text("Alter value");

    // var elem2 = $("#prueba2");
    // elem2.text("Alter value");

    console.log(printArray2());

});

