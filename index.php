<?php


$conexion = mysqli_connect('localhost', 'root', '', 'proyecto' );

$solicitud = " ";



$resultado = mysqli_query($conexion, $resultado);




while ($uno = mysqli_fetch_array($resultado)){

    echo $uno['nombre'] . $uno['apellido'];
}

?>