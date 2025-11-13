<?php
require_once __DIR__ . '/../../config/database.php';

class Produto
{
    private $conn;
    private $table = "produtos";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }
    public function listar()
    {
        $stmt = $this->conn->prepare("SELECT id, nome, preco, categoria FROM {$this->table} ORDER BY nome ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function criar($nome, $preco, $categoria)
    {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (nome, preco, categoria) VALUES (:nome, :preco, :categoria)");
        
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco); 
        $stmt->bindParam(":categoria", $categoria);
        
        return $stmt->execute();
    }
    public function lerPorId($id)
    {
        $stmt = $this->conn->prepare("SELECT id, nome, preco, categoria FROM {$this->table} WHERE id = :id LIMIT 0,1");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function atualizar($id, $nome, $preco, $categoria)
    {
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET nome = :nome, preco = :preco, categoria = :categoria WHERE id = :id");
        
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":categoria", $categoria);

        return $stmt->execute();
    }
    public function excluir($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}