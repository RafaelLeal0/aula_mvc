<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/aula_mvc/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="masthead">
        <h2>Painel Administrativo | Produtos</h2>
    </div>

    <div class="container">
        
        <div class="header-actions">
             <h1>LISTA DE PRODUTOS</h1>
             <a href="index.php?controller=produto&action=criar" class="button">
                <i class="fas fa-plus"></i> NOVO PRODUTO
             </a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>PREÇO</th>
                    <th>CATEGORIA</th>
                    <th style="width: 140px; text-align: center;">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $produto): ?>
                    <tr>
                        <td><?= htmlspecialchars($produto['nome']) ?></td>
                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars($produto['categoria']) ?></td>
                        <td style="text-align: center;">
                            <a href="index.php?controller=produto&action=editar&id=<?= $produto['id'] ?>" class="action-link edit" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="index.php?controller=produto&action=excluir&id=<?= $produto['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este produto?');" class="action-link delete" title="Excluir">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="footer">
            Sistema MVC em PHP Puro | Desenvolvido no SENAI &copy; <?= date('Y') ?>
        </div>
    </div>
</body>
</html>