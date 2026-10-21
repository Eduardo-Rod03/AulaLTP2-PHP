<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

echo "<h1>Contato enviado com sucesso!</h1>";

echo "Olá, " . htmlspecialchars($nome);
echo "Seus dados foram recebidos:<br>";
echo "Nome: " . htmlspecialchars($nome);
echo "E-mail: " . htmlspecialchars($email) ;
echo "Telefone: " . htmlspecialchars($telefone) ;
?>