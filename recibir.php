<?php
    $con=mysqli_connect('localhost','root','','formulario') or die('error en la conexion servidor');
    $sql="INSERT INTO registro
    VALUES(null,'".$_POST["nombre"]."','".$_POST["Tdoc"]."','".$_POST["NDoc"]."','".$_POST["email"]."','".$_POST["Direccion"]."','".$_POST["Celular"]."','".$_POST["Fijo"]."','".$_POST["Observacion"]."')";
    $resultado=mysqli_query($con,$sql) or die('error en el query database');
    mysqli_close($con);

    
    echo ' El ingresado es:  '.$_POST["nombre"] ; 
    echo ' <br> <br> el tipo de documento es:  '.$_POST["Tdoc"] ;
    echo ' <br> <br> el numero de documento es:  '.$_POST["NDoc"];    
    echo ' <br> <br> el email es:  '.$_POST["email"];
    echo ' <br> <br> La direccions es:  '.$_POST["Direccion"];
    echo ' <br> <br> el celular es:  '.$_POST["Celular"];
    echo ' <br> <br> el telefono fijo es:  '.$_POST["Fijo"];
    echo ' <br> <br> la observación es:  '.$_POST["Observacion"];
    
?>