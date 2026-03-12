<?php


date_default_timezone_set("America/Sao_Paulo");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if (strlen($usuario) < 4 || strlen($usuario) > 15) {
        $mensagem .= "Erro: o nome de usuário deve ter entre 4 e 15 caracteres.<br>";
    }
    if (strlen($senha) < 4 || strlen($senha) > 15) {
        $mensagem .= "Erro: a senha deve ter entre 4 e 15 caracteres.<br>";
    }


?>
<html>
<body>

<form  method="post">
Usuário: <input type="text" name="usuario"><br>
Senha: <input type="password" name="senha"><br>
<input type="submit">
</form>

</body>
</html>