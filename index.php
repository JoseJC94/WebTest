<?php
//Llamada a MySQL aquí
$host="192.168.64.9";
$user = "root";
$password = "";
$db="WebTest";
// Create connection
$conn = mysqli_connect($host, $user, $password, $db);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebTest 1.0</title>

    <!-- <link rel="stylesheet" href="framework/boostrap.min.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
    <link rel="stylesheet" href="assets/css/styling.css" type="text/css">
</head>
<body>

<div> <h2>index.php </h2><br><br>
    <div> <h1>Web Test 1.0</h1></div>
</div>
<div> <h2>section.php container </h2><br><br>
    <div>
    <?php if(file_exists('section.php'))
        include 'section.php';
    ?>
    </div>
</div>
<script src="framework/jquery/dist/jquery.min.js"></script>
<script src="framework/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="framework/axios.min.js"></script>
<script src='assets/js/logic.js'> </script>
</body>
</html>
