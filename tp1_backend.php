<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo </h1>
    <?php
    //2//
    $saludo = "Hola Mundo ";
    echo $saludo;;
    //3//
    $entero1 = 8;
    $entero2 = 2;
    echo $entero1;
    echo $entero2;
    echo $entero1+$entero2;
    echo $entero1-$entero2;
    echo $entero1*$entero2;
    echo $entero1/$entero2;
    echo $entero1%$entero2;
    //4//
    $celsius = 20;
    $formula = $celsius*9/5+32;
    echo $formula;
    //5A//
    $base = 18;
    $altura = 12;
    $perimetro1 = $base*2+$altura*2;
    echo $perimetro1;
    $area1 = $base*$altura;
    echo $area1;
    //5B//
    $radio = 30;
    $perimetro2 = 2*3.14*$radio;
    echo $perimetro2;
    $area2 = 3.14*$radio**2;
    echo $area2;
    ?>

</body>
</html>