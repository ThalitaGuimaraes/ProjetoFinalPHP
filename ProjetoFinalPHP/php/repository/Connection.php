<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-54-164-40-66.compute-1.amazonaws.com";
        const USERNAME = "eknsukhcnnrxdu";
        const PASSWORD = "d3772b77647f5a22aceec4a291e23e47bfb3b237bba6b657fc96b6c7abe5f1ac";
        const SCHEMA = "dv3i0gmbt691b";
        const PORT = 5432;

        private $conn;

        # magic method
        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    } 