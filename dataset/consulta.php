<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $opcion = $_POST['opcion'];

    $con = conectar();

    $query = "SELECT respuesta FROM solicitud WHERE pregunta = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('s', $opcion);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['respuesta' => $row['respuesta']]);
    } else {
        echo json_encode(['respuesta' => 'Lo siento, no tengo una respuesta para esa solicitud.']);
    }

    $stmt->close();
    $con->close();
} else {
    echo json_encode(['respuesta' => 'Método no permitido.']);
}
?>
