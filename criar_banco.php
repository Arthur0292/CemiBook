<?php
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP/WAMP
$password = "";     // senha padrão geralmente é vazia no XAMPP
$dbname = "meu_sistema";

// Criar conexão
$conn = new mysqli($servername, $username, $password);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Criar banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso!<br>";
} else {
    echo "Erro ao criar banco: " . $conn->error;
}

$conn->close();
?>
