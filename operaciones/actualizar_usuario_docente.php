<?php 

include "../include/conexion.php";

$id = $_POST['id'];
$usuario = $_POST ['usuario'];
$password = $_POST ['password'];

$password_fuerte = password_hash($password, PASSWORD_DEFAULT);// encriptar password

$sql = "UPDATE usuarios_docentes SET usuario='$usuario', password='$password_fuerte' WHERE id='$id'";

$ejec = mysqli_query($conexion, $sql);
if ($ejec) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../usuarios_docentes.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Género');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);

?>