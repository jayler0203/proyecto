<?php
$connection=mysqli_connect("localhost", "root", "", "registro");

if($connection){
    echo "Sucesfully connected to the database :)";
}else{
    echo "something went wrong, cannot connect to the data base ⚠";
}
?>