// 1- Javascript (20% : 10,10) 
// Create a simple array named array1 with these 3 colors
function printArray1(){
    const array1 = ["red"," blue"," yellow"];
    console.log(array1);
}


// Create an associative array named array2 and store these students
function printArray2(){
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
function cambio() {
    document.getElementById("prueba").innerHTML = "Excelente!"; 
}


// 6- Local Storage (15 points)
// Store the associative array created in item #1 in the browser local storage, 
// load it back and show it using console.log().
function localstorage(){
    localStorage.setItem('arreglo1', printArray1());
    var stored = localStorage.getItem('arreglo1');
    console.log(stored);
}

function rows(){
    var row = document.getElementById("tabla").rows[1].innerHTML;
    console.log(row);
}


$(document).ready(function() {
    console.log(printArray1());
    console.log(printArray2());

    //muestra Holaaa
    var elem = $("p");
    $("#prueba2").text(elem.innerHTML);
    console.log($("#prueba2"));

    //cambia Holaaa por alter value
    var elem2 = $("#prueba2");
    elem2.text("Alter value");

    console.log(localstorage());

    $.ajax({
        type: "GET",
        url:'https://jsonplaceholder.typicode.com/todos/1',
        success: function( response) {
            console.log(response)
        }
    });

    // console.log(rows());

    $('#tabla tbody tr').each( (tr_id,tr) => {
        console.log(tr);
        $(tr).children('td').each( (td_id, td) => {
            console.log($(td).text());
        });     
        $(tr).children('th').each( (th_id, th) => {
            console.log($(th).text());
        });              
    });
});

