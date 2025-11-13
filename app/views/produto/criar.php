<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
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
             <h1>ADICIONAR NOVO PRODUTO</h1>
        </div>

        <form method="POST" action="index.php?controller=produto&action=criar">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Monitor Gamer 27''" required>

            <label for="preco">Preço (R$):</label>
            <input type="number" step="0.01" id="preco" name="preco" placeholder="1299.90" required>

            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" placeholder="Ex: Hardware" required>

            <button type="submit" class="button">
                <i class="fas fa-save"></i> SALVAR PRODUTO
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