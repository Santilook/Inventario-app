
<?php

class conexion {
    private $user;
    private $password;
    private $server;
    private $database;
    private $con;

    public function __construct() {
        $this->user = 'root';
        $this->password = '';
        $this->server = 'localhost';
        $this->database = 'inventariobd';
        $this->con = new mysqli($this->server, $this->user, $this->password, $this->database);

        if ($this->con->connect_error) {
            die("Conexión fallida: " . $this->con->connect_error);
        }
    }

    public function getUser($usuario, $password) {
        $retorno = [];

        $stmt = $this->con->prepare("SELECT * FROM usuarios WHERE login = ? AND password = ?");
        if ($stmt) {
            $stmt->bind_param("ss", $usuario, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($fila = $result->fetch_assoc()) {
                $retorno[] = $fila;
            }

            $stmt->close();
        } else {
            // Manejo de error en la preparación de la consulta
            error_log("Error en la preparación de la consulta: " . $this->con->error);
        }

        return $retorno;
    }
}
