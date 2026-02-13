<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 AULA 3 - AnaLy</title>
</head>
<body>
<H1>LP3 AULA 3 - AnaLy (❁´◡`❁)</H1>

<h3>Números de 0 a 10 - For</h3>
<?php 
    for($i = 0; $i < 10; $i++){
        echo "$i <br>";
     }
?>

<h3>Números ímpares - For</h3>
<?php 
    for($i = 1; $i < 10; $i+=2){
        echo "$i <br>";
     }
?>

<h3>Números pares - For</h3>
<?php 
    for($i = 0; $i < 10; $i+=2){
        echo "$i <br>";
     }
?>

<h3>Números de 0 a 10 - While</h3>
<?php 
    $i = 0;
    while($i < 10){
    echo "$i <br>";
    $i++;
     }
?>

<h3>Números ímpares - While</h3>
<?php 
    $i = 1;
    while($i < 10){
    echo "$i <br>";
    $i+=2;
     }
?>

<h3>Números pares - While</h3>
<?php 
    $i = 0;
    while($i < 10){
    echo "$i <br>";
    $i+=2;
     }
?>

<H3>Múltiplos de 3 entre 0 e 100</H3>
<ul>
<?php for($y = 3; $y < 100; $y+=3) { ?>
    <li>Números: <?php echo $y ?></li>
<?php } ?>
</ul>

<h2>Atividades</h2>

<h3>Números de 100 a 0, com múltiplos de 5</h3>
<?php 
    $i = 100;
    while($i > -1){
    echo "$i <br>";
    $i-=5;
     }
?>

<h3>Média aritmética dos números entre 13 e 73</h3>
<?php 
    $i = 14;
    while($i < 73){
    if($i)
    echo "$i <br>";
    $i++;
     }
?>

<h3>Contagem de 30 a 1, marcando com [] em números divisíveis por 4</h3>
<ul>
<?php
    for($i = 30; $i > 0; $i--){ ?>
<?php 
    if($i % 4 == 0){
        echo "[ $i ]";
    } else { ?>
        <li> >? = $i; ?> </li>
        <?php } } ?>
 </ul>
    
</body>
</html>