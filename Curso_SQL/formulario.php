<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Registro SCII</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="group">
            <form method="POST" action="">
                <h2>Formulario de Registro</h2>

                <div class="labels">
                <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
                <input type="text" name="nombre" class="form-input" required>
                </div>

                <div class="labels">
                <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
                <input type="text" name="apellido" class="form-input" required>
                </div>

                <div class="labels">
                <label for="email">Email <span><em>(requerido)</em></span></label>
                <input type="text" name="email" class="form-input" required>
                </div>

                <br>
                <input class="form-btn" name="submit" type="submit" value="Suscribirse">


    <?php

    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $con=mysqli_connect('localhost','root','','curso_SQL');

    //Check connection
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }


    $sql = "INSERT INTO USUARIO (nombre, apellido, email)
    VALUES ('$nombre','$apellido','$email')";

    if($con->query($sql) === TRUE){
        echo "Registro completado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
    }

    ?>

            </form>
        </div>
    </body>
</html>