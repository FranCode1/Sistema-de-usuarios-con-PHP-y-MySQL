<?php
    

    if (isset($_POST['Agregar'])){
        include'./conexion.php';
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $dni = $_POST['dni'];
        $numero_obra_social = $_POST['obra-social'];
        $email = $_POST['email'];

        $consulta = $con->prepare("INSERT INTO contactos(NOMBRE,APELLIDO,TELEFONO,DNI,NUMERO_OBRA_SOCIAL,EMAIL) VALUES(?,?,?,?,?,?);");
        $resultado = $consulta->execute([$nombre,$apellido,$telefono,$dni,$numero_obra_social,$email]);
        if($resultado==true){
            header("Location: ../../index.php");
        }else{
            echo "No se pudo agregar el contacto";
        }
    };

    
?>





<!-- 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="shortcut icon" href="./assets/img/diente-icono.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="row contenedor-grande">
            <div class="col lado-izquierdo">
                <div class="text-end">
                    <img src="" alt="">
                </div>
                
                <h2 class="fw-bold text-center py-0">Contacto Agregado</h2>
                <pre>
                    
                </pre>
            </div>
            <div class="col lado-derecho">
                
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->