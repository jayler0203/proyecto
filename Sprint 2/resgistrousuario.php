<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="http://localhost/Ciclogrupo48/login.css">
    <title>Document</title>
</head>
<body>
    
</body>

<?php

include'conexion.php';

$user=$_POST['user'];
$passw=$_POST['passw'];
$email=$_POST['email'];

$query="INSERT INTO informacion_registro (User,Passw,email)
VALUES('$user', '$passw', '$email')"; 
$executeorder66=mysqli_query($connection,$query);
if($executeorder66){
    echo '
    <script>
    alert ("Datos guardados exitosamente");
    window.location="../index.php";
    </script>
    ';

}
else{
    echo'
    <script>
    alert ("⚠ ERROR no se han guardado los datos ⚠\n intente nuevamente en un rato");
    window.location="../index.php";
    </script>
    ';

}
mysqli_close($connection);
?>
</html>