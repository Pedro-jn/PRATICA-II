<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_cliente = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    $urgencia = $_POST['urgencia'];
    $funcionario = isset($_POST['funcionario']) && !empty($_POST['funcionario']) ? $_POST['funcionario'] : null;

 
    $sql = "INSERT INTO solicitacoes 
            (id_cliente, nome_cliente, email, telefone, descricao, urgencia, status, id_funcionario, data_abertura) 
            VALUES (?, ?, ?, ?, ?, ?, 'Pendente', ?, NOW())";
    
   
    $stmt->execute([$id_cliente, $nome, $email, $telefone, $descricao, $urgencia, $funcionario]);

    echo "Solicitação registrada com sucesso!";
}
?>
