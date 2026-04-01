<?php
    require_once __DIR__ . '/../../config/config.php';

    // Classe de conexão com o banco de dados usando MySQLi

    class Conexao {
        private ?mysqli $conn = null;

        // função para conectar ao banco de dados
        public function conectar(): mysqli {
            if ($this->conn === null) {
                $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                if ($this->conn->connect_error) {
                    die("Falha na conexão: " . $this->conn->connect_error);
                }

                $this->conn->set_charset("utf8");
            }

            return $this->conn;
        }

        // função para fechar a conexão
        public function fechar(): void {
            if ($this->conn !== null) {
                $this->conn->close();
                $this->conn = null;
            }
        }
    }
?>