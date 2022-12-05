<?php
function buscarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}
function buscarCargoById($conexion, $id){
    $sql ="SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}

function buscarGeneroById($conexion, $id){
    $sql = "SELECT *FROM genero WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarUnidadDidactica($conexion){
    $sql = "SELECT*FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}

function buscarUnidadDidacticaById ($conexion, $id){
    $sql = "SELECT* FROM unidad_didactica WHERE id ='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaById($conexion, $id){
    $sql = "SELECT * FROM programa_estudios WHERE id='$id'";
    return mysqli_query($conexion, $sql);

}
function buscarSemestreById($conexion, $id){
    $sql = "SELECT *FROM semestre WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocenteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes  WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}
function buscarModulo($conexion){
    $sql = "SELECT*FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}
function buscarModuloById ($conexion, $id){
    $sql = "SELECT * FROM modulo_profesional WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
?>