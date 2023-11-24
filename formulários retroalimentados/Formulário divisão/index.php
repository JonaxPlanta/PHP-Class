<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário divisão</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  $dividendo = $_GET["d1"]??0;
  $divisor = $_GET["d2"]??1;
  ?>
  <main>
    <h1>Divisor de Valor</h1>
      <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
        <label for="d1">Dividendo</label>
          <input type="number" name="d1" id="d1" value="<?=$valor1?>">
        <label for="d2">Divisor</label>
          <input type="number" name="d2" id="d2" value="<?=$valor2?>">
            <input type="submit" value="dividir">
      </form>
  </main>
  <section>
    <h2>Estrutura da Divisão</h2>
    <?php 
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    echo "<p>A divisão de dividendo <strong>$dividendo</strong> e divisor <strong>$divisor</strong> resulta em <strong>$quociente</strong> de resto <strong>$resto</strong>.</p>"
    ?>
    <table class="divisao">
      <tr>
        <td><?=$dividendo?></td>
        <td><?=$divisor?></td>
      </tr>
      <tr>
        <td><?=$resto?></td>
        <td><?=$quociente?></td>
      </tr>
    </table>
  </section>
</body>
</html>