<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $id=$_GET['ID'];
    $fechaini=$_POST['fechaini'];
    $fechafin=$_POST['fechafin'];
    $descripcion=$_POST['descripcion'];
    //$imagen=$_POST[''];

    $query="UPDATE PROMOCION SET FECHAINI='".$fechaini."',FECHAFIN='".$fechafin."',DESCRIPCION='".$descripcion."' WHERE ID_PROMOCION=".$id.";";
    echo $query;
    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../admin/establishments/promotions.php';
</script>