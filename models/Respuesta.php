<?php
class Respuesta {
    public $id;
    public $profesor_id;
    public $criterio_id;
    public $respuesta;
    public $comentario;

    public function __construct($profesor_id, $criterio_id, $respuesta, $comentario) {
        $this->profesor_id = $profesor_id;
        $this->criterio_id = $criterio_id;
        $this->respuesta = $respuesta;
        $this->comentario = $comentario;
    }

    public static function create($conn, $profesor_id, $criterio_id, $respuesta, $comentario) {
        $stmt = $conn->prepare("INSERT INTO respuestas (profesor_id, criterio_id, respuesta, comentario) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiis", $profesor_id, $criterio_id, $respuesta, $comentario);
        $stmt->execute();
    }

    public static function all($conn) {
        $result = $conn->query("
            SELECT profesores.nombre AS profesor, criterios.descripcion AS criterio, respuestas.respuesta, respuestas.comentario
            FROM respuestas
            JOIN profesores ON respuestas.profesor_id = profesores.id
            JOIN criterios ON respuestas.criterio_id = criterios.id
        ");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
