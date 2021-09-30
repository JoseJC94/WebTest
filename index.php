<?php
//Llamada a MySQL aquí
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebTest 1.0</title>

    <link rel="stylesheet" href="framework/boostrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>

<div> index.php <br><br>
    <div> <h1>Web Test 1.0</h1></div>
</div>
<div> section.php container <br><br>
    <div>
    <?php if(file_exists('section.php'))
        include 'section.php';
    ?>
    </div>
</div>
<script src="framework/jquery/dist/jquery.min.js"></script>
<script src="framework/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="framework/axios.min.js"></script>
</body>
</html>
