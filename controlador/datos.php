<?php
include_once ('conexion.php');
$nombreEstudiante = $_POST['nombre'];
$materia=$_POST['materia'];

$con=new Conexion();
$con=$con->Conectar();
if($con){
    $sql = "INSERT INTO `tblmateria`(`nombreEstudiante`, `materia`) VALUES ('$nombreEstudiante','$materia')";
    $consulta=$con->prepare($sql);
    $consulta->execute();
}


echo $nombreEstudiante;
?>