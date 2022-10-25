<?php
    include'./assets/php/conexion.php';
    $consulta = $con->query("SELECT * FROM contactos;");
    $contacto = $consulta->fetchAll(PDO::FETCH_OBJ);
    //print_r($contactos);
?>

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
    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

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
                <h2 class="fw-bold text-center py-0">Agenda de Contactos</h2>
                <form action="./assets/php/crear_contacto.php" method="POST" autocomplete="false">
                    <div class="mb-2">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="ej: Joaquín" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" name="apellido" id="apellido" placeholder="ej: Desiderioscioli" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="telefono" class="form-label">Número de Telefono</label>
                        <input type="number" name="telefono" id="telefono" placeholder="ej: 11 6422-3445" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="number" name="dni" id="dni" placeholder="ej: 44392476" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="obra-social" class="form-label">Número de Obra Social</label>
                        <input type="number" name="obra-social" id="obra-social" placeholder="ej: 44392476" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="ej: juanperez@gmail.com" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <!-- <button type="submit" class="btn btn-primary">Crear Contacto</button> -->
                        <input type="submit" name="Agregar" value="Crear Contacto" class="btn btn-primary mb-3 mt-3">
                    </div>
                    <!--parte extra quizas la quito-->
                    <div class="mb-2">

                    </div>
                </form>
            </div>
            <div class="col lado-derecho">
                <div class="content">
                    <table class="table table table-bordered display responsive" id="myDataTable">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Dni</th>
                                <th>Obra Social</th>
                                <th>Email</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($contacto as $dato){
                            ?>
                            <tr>
                                <td><?php echo $dato->NOMBRE ?></td>
                                <td><?php echo $dato->APELLIDO ?></td>
                                <td><?php echo $dato->TELEFONO ?></td>
                                <td><?php echo $dato->DNI ?></td>
                                <td><?php echo $dato->NUMERO_OBRA_SOCIAL ?></td>
                                <td><?php echo $dato->EMAIL ?></td>
                                <td class="text-center"><a href="./assets/php/editar_contacto.php?id=<?php
                                    echo $dato->ID_CONTACTO
                                ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td class="text-center"><a href="./assets/php/eliminar_contacto.php?id=<?php
                                echo $dato->ID_CONTACTO
                                ?>" class="btn btn-danger" name="Eliminar"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myDataTable').DataTable();
        } );
    </script>
</body>
</html>