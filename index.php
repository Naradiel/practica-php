<!DOCTYPE html>

<head>
    <title>Ejercicio de PHP de Isana</title>
    <!-- Aquí llamamos a la fuente de Google para poder usarla en nuestra web -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <!-- Aquí llamamos a la librería Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Aquí llamamos a nuestra hoja de estilo en CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="formulario">
            <h2>Formulario</h2>
            <form action="" method="post">
                <div class="campos-form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="campos-form">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>

                <div class="campos-form">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </div>

        <?php
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];

            //Conexión con la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cursobbdd";

            // Comprobamos la conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            // Insertamos los datos en la tabla de la base de datos
            $sql = "INSERT INTO usuario (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Los datos se han guardado en la base de datos.";
            } else {
                echo "Error al guardar los datos en la base de datos: " . $conn->error;
            }

            // Cerramos la conexión a la base de datos
            $conn->close();
        }
        ?>

        </form>
    </div>
    </div>
</body>

</html>