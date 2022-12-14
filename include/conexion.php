<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "root", "root", "SisAcad_dos");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>
