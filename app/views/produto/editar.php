<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/aula_mvc/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="masthead">
        <h2>Painel Administrativo | Produtos</h2>
    </div>

    <div class="container">

        <div class="header-actions" style="border-bottom: none; margin-bottom: 20px; padding-bottom: 0;">
             <h1>EDITAR PRODUTO: <span style="font-weight: 400; color: #4B5563; font-size: 0.8em;"><?= htmlspecialchars($dados_produto['nome']) ?></span></h1>
        </div>

        <form method="POST" action="index.php?controller=produto&action=editar&id=<?= $dados_produto['id'] ?>">
            
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($dados_produto['nome']) ?>" required>

            <label for="preco">Preço (R$):</label>
            <input type="number" step="0.01" id="preco" name="preco" value="<?= htmlspecialchars($dados_produto['preco']) ?>" required>

            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="<?= htmlspecialchars($dados_produto['categoria']) ?>" required>

            <button type="submit" class="button">
                <i class="fas fa-sync-alt"></i> ATUALIZAR PRODUTO
            </button>
        </form>

        <div class="back-link">
            <a href="index.php?controller=produto&action=listar">
                <i class="fas fa-arrow-left"></i> Voltar para a Lista
            </a>
        </div>
    </div>
</body>
</html>