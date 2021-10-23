<?php

include 'global/conexion.php';
include 'global/metods.php';
include 'global/conectors.php'

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>


    <div class=" row mt-4" style="margin-left: 5%;">

        <div class="col-3">

            <form action="" method="post">

                <h2>INGRESE DATOS</h2>


                <input type="text" class="form-control mt-2" placeholder="Codigo estudiante" name="code">
                <input type="text" class="form-control mt-2" placeholder="Nombres" name="name">
                <input type="text" class="form-control mt-2" placeholder="Apellidos" name="lastname">

                <button type="submit" name="button" value="create" class="btn btn-primary mt-2">Enviar</button>

            </form>
        </div>

        <div class="col-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $con = new metods;
                    $sql = "SELECT * from users";

                    $data = $con->show($sql);

                    foreach ($data as $show) {

                    ?>
                    <tr>
                        <th><?php echo $show['id'] ?></th>
                        <th><?php echo $show['code'] ?></th>
                        <th><?php echo $show['name'] ?></th>
                        <th><?php echo $show['lastname'] ?></th>
                        <th>

                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?php echo $show['id']?>">
                                <a href="update.php" name="button" value="edit" class="btn btn-success">Editar</a>
                                <button type="submit" name="button" value="delete"
                                    class="btn btn-warning">Borrar</button>
                            </form>

                        </th>


                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    

</body>

</html>