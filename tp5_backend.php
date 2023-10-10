<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<H1>TP 5</H1>    
    <br>

<?php

print "<p>Ejercicio 1</p>\n";
print "<pre>\n";
    $numerospares = ["2","4","6","8","10","12","14","16","18","20"];
            print "<pre>\n";
        foreach ($numerospares as $valor) {
            print "<p>$valor</p>\n";
        }

       
print "<pre>\n";
print "<p>Ejercicio 2</p>\n";
print "<pre>\n";

    $ejercicio2 = ["Pedro", "Ana", "34","1"];
            print "<pre>\n";
            print_r($ejercicio2);
            print "<pre>\n";


print "<pre>\n";
print "<p>Ejercicio 3 - No pedía que se muestre en pantalla.</p>\n";
print "<pre>\n";

    $Ejercicio3=[
        'Nombre'=> "Pedro",
        'Apellido'=> "Torres",
        'Dirección'=>"Av. Mayor 3703",
        'Telefono'=>"1122334455",
];

print "<pre>\n";
print "<p>Ejercicio 4</p>\n";
print "<pre>\n";

    $Ejercicio4=[
        "Madrid",
        "Barcelona",
        "Londres",
        "New York",
        "Los Ángeles",
        "Chicago"
    ];
    foreach ($Ejercicio4 as $i => $valor){
        print "<p>La ciudad con el índice $i tiene el nombre $valor</p>\n";
    };



print "<pre>\n";
print "<p>Ejercicio 5</p>\n";
print "<pre>\n";
        $Ejercicio5=[
            'MD'=>"Madrid",
            'BCL'=>"Barcelona",
            'LD'=>"Londres",
            'NY'=>"New York",
            'LA'=>"Los Ángeles",
            'CCG'=>"Chicago"
];
    foreach ($Ejercicio5 as $indice => $valor) {
        print "<p>El índice $valor es $indice</p>\n";
    }



?>


</body>
</html>
