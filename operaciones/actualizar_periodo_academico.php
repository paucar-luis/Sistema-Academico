<?php
include "../include/conexion.php";
include "../include/busquedas.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $director = $_POST['director'];
    $fecha_actas = $_POST['fecha_actas'];

    echo " NOMBRE: ".$nombre." FECHA INICIO: ".$fecha_inicio." FECHA FIN: ".$fecha_fin." DIRECTOR: ".$director." FECHA ACTAS: ".$fecha_actas;
    $sql = "UPDATE periodo_academico SET nombre='$nombre', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin', id_director='$director', fecha_actas='$fecha_actas' WHERE id='$id' ";

    $ejec_consulta = mysqli_query($conexion, $sql);

    if ($ejec_consulta) {
        echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../periodo_academico.php';
				</script>
			";
    } else {
        echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
    }
    mysqli_close($conexion);
    ?>
