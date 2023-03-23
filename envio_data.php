<?php

include("conexion.php");

//Recoleccion de datos
$tabla= $_POST['table'];
$id= $_POST['id_value'];
$mes= $_POST['month'];
$disponible= $_POST['disp'];



//Crear registro:
// $sql="INSERT INTO $tabla (id,mes,disponibilidad) VALUES ('$id','$mes','$disponible')";
// mysqli_query($conexion,$sql);




//Actualizar registro:
$sql="UPDATE $tabla SET disponibilidad='$disponible' WHERE id='$id'";
mysqli_query($conexion,$sql);




//Función en desarrollo para autodeterminar si crea o actualiza contenido de la bd:
// mysqli_query($conexion,"SELECT 'id' FROM $tabla WHERE 'id'='$id'");
// $consulta=mysqli_query($conexion,"SELECT * FROM $tabla WHERE id='$id'");
// echo $consulta['disponibilidad'];
// if($consulta['disponibilidad']!=$disponible){
//     echo('patata');
//     $sql="UPDATE $tabla SET disponibilidad='$disponible' WHERE id='$id'";
//     mysqli_query($conexion,$sql);
// }else{
//     $sql="INSERT INTO $tabla (id,mes,disponibilidad) VALUES ('$id','$mes','$disponible')";
//     mysqli_query($conexion,$sql);
// }




?>