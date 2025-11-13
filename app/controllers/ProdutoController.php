<?php
require_once __DIR__ . '/../models/Produto.php';

class ProdutoController
{
    public function listar()
    {
        $produto = new Produto();
        $dados = $produto->listar(); 
        require __DIR__ . '/../views/produto/listar.php';
    }
    public function criar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? '';
            $preco = $_POST['preco'] ?? 0;
            $categoria = $_POST['categoria'] ?? '';

            $produto = new Produto();
            $produto->criar($nome, $preco, $categoria);
            header("Location: index.php?controller=produto&action=listar"); 
            exit;
        }
        require __DIR__ . '/../views/produto/criar.php';
    }
    public function editar()
    {
        $produto = new Produto();
        $id = $_GET['id'] ?? null;

        if (!$id) {
            header("Location: index.php?controller=produto&action=listar");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? '';
            $preco = $_POST['preco'] ?? 0;
            $categoria = $_POST['categoria'] ?? '';
            
            $produto->atualizar($id, $nome, $preco, $categoria);
            header("Location: index.php?controller=produto&action=listar");
            exit;
        }
        $dados_produto = $produto->lerPorId($id); 
        
        if (!$dados_produto) {
            header("Location: index.php?controller=produto&action=listar");
            exit;
        }
        require __DIR__ . '/../views/produto/editar.php';
    }
    public function excluir()
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $produto = new Produto();
            $produto->excluir($id);
        }
        header("Location: index.php?controller=produto&action=listar");
        exit;
    }
}