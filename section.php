<!-- <?php
//Llamada a MySQL aquí
$host="192.168.64.9";
$user = "root";
$password = "";
$db="WebTest";
// Create connection
$conn = mysqli_connect($host, $user, $password, $db);
?> -->


<!doctype html>
<html lang="en">

<body>
<p id="prueba">Hola</p>
<p id="prueba1"></p>


<!-- 2- HTML Structure (20% : 5,5,10)
Create a text input
Create a button below that input
Create a click event in the previous button that changes its text to the following -->

<!-- <script src='assets/js/logic.js'> </script> -->
<button onclick= "cambio()" > Cambiar texto. </button>


<!-- 3- MySQL/PHP Data retrieval (30% : 5,5,20)
Create an HTML table in section.php and populate it with the second query result. -->

<br>
<br>
<br>
<table id="tabla"> 
  <tr>
    <th>Estudiante</th>
    <th>Universidad</th>
  </tr>
  <tr>
    <td>Maria</td>
    <td>UCR</td>
  </tr>
  <tr>
    <td>Karla</td>
    <td>UCR</td>
  </tr>
</table>


<!-- Create an HTML table in section.php and populate it with the second query result. -->

<table id="tablaEstudiantes" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>Estudiante</th>
    <th>Universidad</th>
  </tr>
  </thead>
    <tbody>
    <?php
    $query = "select Estudiantes.nombre AS Estudiante, Universidades.nombre AS Universidad 
    from Estudiantes 
    inner join Universidades on Estudiantes.universidad = Universidades.id 
    where Universidades.nombre = 'UCR';  ";
    $res=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($res)){
      ?>
        <tr>
            <td> <?php echo $row['Estudiante'] ?> </td>
            <td> <?php echo $row['Universidad'] ?> </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>


<!-- 4- JQuery (30% : 5,10,15)
Create a JQuery id selector and select any of your previously created HTML elements (you can create one if you don't have any). -->

<p id = "prueba2"> Holaaaa </p>


<!-- 6- Local Storage (15 points)
Store the associative array created in item #1 in the browser local storage, 
load it back and show it using console.log(). -->

<!-- ----- prueba section.php ------- -->
<!-- <script>
var array1 = ["red"," blue"," yellow"];
localStorage.setItem('arreglo1', array1);
var stored = localStorage.getItem('arreglo1');
console.log('array1: ', stored);
</script> -->

</body>

</html>
