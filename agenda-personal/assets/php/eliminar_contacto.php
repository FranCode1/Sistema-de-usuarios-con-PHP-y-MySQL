<?php
    if(!isset($_GET['id'])){
        header('Location: ../../index.php');
    }else{
        include('./conexion.php');
        $id=$_GET['id'];

        $consulta = $con -> prepare("DELETE FROM contactos WHERE ID_CONTACTO=?;");
        $resultado= $consulta->execute([$id]);

        if($resultado==true){
            header('Location: ../../index.php');
        }else{
            echo "Error de eliminación";
        }
    }
?>