<?php
require_once 'db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $urgencia = $_POST['urgencia'];

 
    $sql = "INSERT INTO solicitacoes (nome_cliente, descricao, urgencia) VALUES (?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $descricao, $urgencia]);

    echo "Solicitação registrada com sucesso!";
}
?>