<?php
$servidor = "localhost";
$usuario = "root"; // geralmente 'root' no XAMPP/WAMP
$senha = ""; // a senha padrão é vazia
$banco_de_dados = "cadastro_alunos";

// Cria a conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

// Verifica a conexão
if ($conn->connect_error) {
  die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>
