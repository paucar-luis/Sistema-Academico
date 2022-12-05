<?php 

    include "../include/conexion.php";

    $id = $_POST['id'];
    $periodo = $_POST['id_periodo_acad'];

    $sql = "UPDATE presente_periodo_acad SET id_periodo_acad= '$periodo' where id='$id'";

    $ejec = mysqli_query($conexion, $sql);

    if ($ejec) {
        echo "<script>
        alert('Datos actualizados de manera Correcta');
        window.location= '../presente_periodo_academico.php';
    </script>
";
}else{
echo "<script>
        alert('Error al Actualizar Cargo');
        window.history.back();
    </script>
";
}
mysqli_close($conexion);
?>