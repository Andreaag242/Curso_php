<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $edad=12;
    echo '<br>';
    //operador ternario
    echo $edad <=18 ? 'eres menor de edad': 'eres mayor de edad';
    // ? es la bifurcación true, : es la bifurcación false
    echo '<br>';
    var_dump($edad<=18);
    ?>
</body>
</html>l