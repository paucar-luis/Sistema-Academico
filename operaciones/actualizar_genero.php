<?php 

include "../include/conexion.php";

$id = $_POST['id'];
$genero = $_POST ['genero'];

$sql = "UPDATE genero SET genero='$genero' WHERE id='$id'";

$ejec = mysqli_query($conexion, $sql);
if ($ejec) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../genero.php';
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