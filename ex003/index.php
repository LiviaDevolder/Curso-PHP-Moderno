<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
    // 0x = hexadecimal
    // 0b = binário
    // 0 = octal

    $num = 0x1A;
    echo "O valor da variável é $num";

    echo "</br>";

    $v = 45.2;
    var_dump($v);

    echo "</br>";

    $num = 3e2;
    echo "O valor é $num";
    var_dump($num);

    echo "</br>";

    $num2 = (float) "950"; // Coerção
    var_dump($num);

    echo "</br>";

    $casado = false;
    var_dump($casado);
    print "O valor para casado é $casado";

    echo "</br>";

    var_dump($casado);
    $casado = true;
    print "O valor para casado é $casado";
  ?>
</body>
</html>