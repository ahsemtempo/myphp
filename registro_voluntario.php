<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $habilidades = $_POST["habilidades"];

    $sql = "INSERT INTO voluntarios (nome, email, habilidades) VALUES ('$nome', '$email', '$habilidades')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro de voluntário bem-sucedido!";
    } else {
        echo "Erro ao registrar voluntário: " . $conn->error;
    }
}

$conn->close();
?>