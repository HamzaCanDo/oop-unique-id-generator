<?php

class UniqueIdGenerator {
    private $pdo;

    public function __construct() {
        $config = include 'db_config.php';

        $dsn = "mysql:host={$config['host']};dbname={$config['db']};charset=utf8mb4";
        $this->pdo = new PDO($dsn, $config['user'], $config['pass']);
    }

    public function generateId($length = 8) {
        do {
            $id = $this->generateRandomId($length);
        } while ($this->idExists($id));

        $this->storeId($id);
        return $id;
    }

    private function generateRandomId($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $id = '';
        for ($i = 0; $i < $length; $i++) {
            $id .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return $id;
    }

    private function idExists($id) {
        $stmt = $this->pdo->prepare("SELECT 1 FROM generated_ids WHERE unique_id = :id LIMIT 1"); 
        $stmt->execute(['id' => $id]);
        return $stmt->fetch() !== false; 
    }

    private function storeId($id) {
        $stmt = $this->pdo->prepare("INSERT INTO generated_ids (unique_id) VALUES (:id)");
        $stmt->execute(['id' => $id]);
    }

    public function getAllGeneratedIds() {
        $stmt = $this->pdo->query("SELECT unique_id FROM generated_ids");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}


// $idGenerator = new UniqueIdGenerator();
// echo $idGenerator->generateId();
?>
