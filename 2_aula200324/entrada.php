<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
    if(isset($_GET["erro"])){
      $erro = $_GET["erro"];
      if($erro == 1){
        echo ("Email/senha inválidos");
      }
      else if($erro == 2){
        echo ("Email Errado");
      }
      else if($erro == 3){
        echo ("Senha Errada");
      }
    }
    ?>
    <form action="saida.php" method="POST">
      <input type="email" name="email" placeholder="Digite seu e-mail" /><br />
      <input type="password" name="senha" placeholder="Digite sua senha" /><br />
      <button>Logar</button>
    </form>
  </body>
</html>