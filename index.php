<?php
include 'conexao.php';

$stmt = $pdo->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container mt-4">
    <h2 class="text-center">Controle de estoque</h2>
    <a href="adicionar.php" class="btn btn-sucess mb-3">Adicionar produtos</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Acoes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produtos): ?>
        </tbody>
    </table>
    
</body>
</html>