<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
</head>
<body>

    <h1>Formulário de Contato</h1>

    <form action="confirmacao.php" method="POST">
        
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" required>
        <br><br>

        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>