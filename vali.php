<?php


date_default_timezone_set("America/Sao_Paulo");

$mensagem="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if (strlen($usuario) < 4 || strlen($usuario) > 15) {
        $mensagem .= "Nossa, tivemos um erro, o nome de usuário deve ter entre 4 e 15 caracteres.<br>";
    }
    if (strlen($senha) < 4 || strlen($senha) > 15) {
        $mensagem .= "Eita, houve um erro, a senha deve ter entre 4 e 15 caracteres.<br>";
    }
if($mensagem==""){
$usuarioValido= ($usuario== "PROFESSOR"||$usuario== "COORDENADOR");
$senhaValida=($senha=="DEVISATE");
 if($usuarioValido && $senhaValida){
    $hora = date ("H:i");
    $data=date("d/m/Y");
    $mensagem="Bem-vindo, $usuario! Você realizou acesso às $hora no dia $data.";
    

 }

}elseif(!$usuarioValido && !$senhaValida){
$mensage="Foi mal ai mano, usuário e senha inválidos, tente novamente"
}elseif(!$usuarioValido){
    $mensage="Ops.....Usuário inválido, tente novamente"
}
elseif(!$senhaValida){
    $mensage="Opa........ Senha incorreta,tente novamente"
}
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