<?php $val = 0; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="style.css" media="screen">
</head>

<body>
    <div id="panel-chat">
        <h1>Sistema de Asistencia Restaurante</h1>
        <div class="titulo">ChatBot</div>
        <div id="panel-text">

            <div id="contenido">


                <div class="form">
                    <div class="panel-inbox">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg-chat">
                            <p>Hola, ¿cómo puedo ayudarte?</p>
                        </div>
                    </div>
                </div>



                <div class="panel-entrada">
                    <?php
                    include 'dataset/conexion.php';
                    $con = conectar();

                    $query = "SELECT pregunta FROM solicitud WHERE tipo = 0";
                    $result = mysqli_query($con, $query);

                    if (!$result) {
                        die("Error al consultar la base de datos: " . mysqli_error($con));
                    }

                    if ($val == 1): ?>
                        <div class="msg-user">
                            <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                            <button id="btn btn-enviar">Enviar</button>
                        </div>
                    <?php else: ?>
                        <div class="panel-opciones">
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <button class="opcion" onclick="seleccionarOpcion('<?php echo $row['pregunta']; ?>')">
                                    <?php echo $row['pregunta']; ?>
                                </button>
                            <?php endwhile; ?>
                            <!-- <button class="opcion" onclick="seleccionarOpcion('Regresar')">❌</button> -->
                        </div>
                    <?php endif;
                    mysqli_close($con);
                    ?>


                </div>
            </div>
        </div>
    </div>
    <script src="events.js"></script>
</body>

</html>