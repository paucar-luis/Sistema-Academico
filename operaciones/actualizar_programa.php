<?php 
   include "../include/conexion.php";


    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $resolucion = $_POST['resolucion'];

    $sql = "UPDATE programa_estudios SET codigo='$codigo', tipo='$tipo', nombre='$nombre', resolucion='$resolucion'  WHERE id='$id'";


    $ejec_consulta = mysqli_query($conexion, $sql);

    if ($ejec_consulta) {
        echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../programa_estudios.php';
				</script>
			";
    }else{
        echo "<script>
                        alert('Error al Actualizar Programa');
                        window.history.back();
                    </script>
                ";
    }
?>