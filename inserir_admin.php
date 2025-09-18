<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_sistema";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Email e senha do admin
$email = "admin@cemi.com";
$senha = password_hash("12345678", PASSWORD_DEFAULT); // senha criptografada

// Inserir usuário admin
$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário admin criado com sucesso!";
} else {
    echo "Erro ao inserir usuário: " . $conn->error;
}

$conn->close();
?>
