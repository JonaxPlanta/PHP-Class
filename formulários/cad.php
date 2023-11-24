<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Processamento do formulário</title>
</head>
<body>
  <header>
    <h1>Resultado do Processamento</h1>
  </header>
  <main>
    <?php 
    $n = $_GET ["nome"];
    $s = $_GET ["sobrenome"];
    echo "<p> É um prazer te conhecer, <strong>$n $s</strong>! Esse é o meu site. </p>"
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
  </main>
</body>
</html>