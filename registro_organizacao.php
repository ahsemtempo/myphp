<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $contato = $_POST["contato"];

    $sql = "INSERT INTO organizacoes (nome, descricao, contato) VALUES ('$nome', '$descricao', '$contato')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro de organização bem-sucedido!";
    } else {
        echo "Erro ao registrar organização: " . $conn->error;
    }
}

$conn->close();
?>