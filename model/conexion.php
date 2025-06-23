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
    
    public function getConnection() {
    return $this->con;
    }

    public function getUser($usuario, $password) {
        $sql = "SELECT u.id_usu, u.login, u.password, u.foto, c.nombre, c.tipo
            FROM usuarios u
            JOIN clientes c ON u.id_usu = c.id_usu
            WHERE u.login = ? AND u.password = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    public function getAllUsers() {
        $sql = "SELECT id_usu, login, password, foto, nombre, tipo FROM usuarios";
        $result = $this->con->query($sql);
        $usuarios = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $usuarios[] = $row;
            }
        }
        return $usuarios;
    }
}