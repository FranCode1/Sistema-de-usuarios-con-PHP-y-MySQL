<?php
    if(!isset($_POST['Editar'])){
        header('Location: ../../index.php');
    }else{
        include('./conexion.php');
        $nom=$_POST['nombre'];
        $apell=$_POST['apellido'];
        $tel=$_POST['telefono'];
        $dni=$_POST['dni'];
        $obra=$_POST['obra-social'];
        $email=$_POST['email'];
        $id=$_POST['id2'];

        $consulta = $con -> prepare("UPDATE contactos SET NOMBRE=?, APELLIDO=?,TELEFONO=?,DNI=?,NUMERO_OBRA_SOCIAL=?,EMAIL=? WHERE ID_CONTACTO=?");
        $resultado= $consulta->execute([$nom,$apell,$tel,$dni,$obra,$email,$id]);

        if($resultado==true){
            header('Location: ../../index.php');
        }else{
            echo "Error de actualización";
        }
    }
?>