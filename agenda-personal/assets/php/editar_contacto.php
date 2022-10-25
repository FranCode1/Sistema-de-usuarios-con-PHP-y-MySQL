<?php
    if(!isset($_GET['id'])){
        echo "No se puede editar el contacto";
    }else{
        include'./conexion.php';
        $id=$_GET['id'];
        $consulta = $con->prepare("SELECT * FROM contactos WHERE ID_CONTACTO=?;");
        $consulta->execute([$id]);
        $contacto = $consulta->fetch(PDO::FETCH_OBJ);
        //print_r($contactos);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="shortcut icon" href="../img/diente-icono.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e430f2d90b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row contenedor-grande">
            <div class="col lado-izquierdo">
                <div class="text-end">
                    <img src="" alt="">
                </div>
                <!-- poner esta clase para mayusculas (text-uppercase) -->
                <h2 class="fw-bold text-center py-0">Edición de Contacto</h2>
                <form action="editar_contacto_proceso.php" method="POST" autocomplete="false">
                    <div class="mb-2">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="ej: Joaquín" class="form-control" value="<?php echo $contacto->NOMBRE ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" name="apellido" id="apellido" placeholder="ej: Desiderioscioli" class="form-control" value="<?php echo $contacto->APELLIDO ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="telefono" class="form-label">Número de Telefono</label>
                        <input type="number" name="telefono" id="telefono" placeholder="ej: 11 6422-3445" class="form-control" value="<?php echo $contacto->TELEFONO ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="number" name="dni" id="dni" placeholder="ej: 44392476" class="form-control"value="<?php echo $contacto->DNI ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="obra-social" class="form-label">Número de Obra Social</label>
                        <input type="number" name="obra-social" id="obra-social" placeholder="ej: 44392476" class="form-control" value="<?php echo $contacto->NUMERO_OBRA_SOCIAL ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="ej: juanperez@gmail.com" class="form-control" value="<?php echo $contacto->EMAIL ?>" required>
                    </div>
                    
                    <div class="container">
                        <div class="row">
                            <input type="hidden" name="id2" value="<?php echo $contacto->ID_CONTACTO ?>">
                            <input type="submit" name="Editar" value="Editar Contacto" class="btn btn-primary rounded text-center m-1 col">
                            <a href="../../index.php" class="btn btn-primary rounded text-center m-1 col">Regresar</a>
                        </div>
                    </div>
                        
                    <!--parte extra quizas la quito-->
                    <div class="mb-2">

                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>