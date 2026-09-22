<?php
   session_start();
   $msg="";
   if (isset($_POST["sair"])) {
        session_unset();
   }

   if (isset($_POST["conectar"])) {
      require_once("senha.php");
      if (isset($_POST["fusuario"]) && isset($_POST["fsenha"])) {
         if (htmlspecialchars($_POST["fusuario"], ENT_QUOTES, 'UTF-8') == usuario 
            && htmlspecialchars($_POST["fsenha"], ENT_QUOTES, 'UTF-8') == senha) {
                $_SESSION["usuario_logado"] = htmlspecialchars($_POST["fusuario"], ENT_QUOTES, 'UTF-8');
                $msg = "Login efetuado";
            } else {
             $msg = "<span style='color: red'> ERRO ao conectar! Confira usuário e senha</span>";
            }
      } 
   }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (!isset($_SESSION["usuario_logado"])) {?>
        <h1>Login</h1>
        <form action="#" method="post">
            <label for="fusuario">Usuário: </label>
            <input type="text" name="fusuario" required><br>
            <label for="fsenha">Senha: </label>
            <input type="password" name="fsenha" required><br>
            <br>
            <button type="submit" name="conectar" value="conectar">Conectar</button>
        </form>
    <?php } else {?>
        <h1>Bem-vindo!</h1>
        <p>Olá <?= $_SESSION["usuario_logado"]; ?> bem-vindo a área restrita.</p>
        <br>
        <form action="#" method="post">
            <button type="submit" name="sair" value="sair">Sair</button>
        </form>
    <?php } 
       echo "<p style='color: darkgray'>$msg</p>";
    ?>
    
</body>
</html>