<?php

insertado($_POST['Componente'],$_POST['Componentepregunta'],$_POST['contextualizacion'],$_POST['pregunta'],$_POST['opcion1'],$_POST['opcion2'],$_POST['opcion3'],$_POST['opcion4']);


function insertado($Componente,$Componentepregunta,$Contenido,$Pregunta,$opcion1,$opcion2,$opcion3,$opcion4)
{

include("conexionbd.php");
 $con = New Conexion();
$sentencia="insert into cuestionarios values('".$Componente."','".$Componente. $Componentepregunta."','".$Contenido."','".$Pregunta."','".$opcion1."','".$opcion2."','".$opcion3."','".$opcion4."')";
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}



?>


<script type="text/javascript">

alert("datos almacenados");
window.location.href=' paneladministrador.php ';
</script>
