<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 AULA 2 - AnaLy</title>
</head>
<body>
    <h1>LP3 AULA 2 - AnaLy</h1>
    <?php
    $simb = "✿◡‿◡";
    $xuxu = "5";
    echo "Oii! $simb <br>";
    echo "Variável Xuxu: $xuxu <br>"
    ?>
    <h3>Listinha</h3>
    <ul>
        <?php
        if($xuxu % 2 == 0){
        $resp = "par";
        } else {
        $resp = "ímpar";
        }
        ?>
        <li>A variável Xuxu é <?php echo $resp; ?>.</li>

    <?php if($xuxu % 2 == 0 ) { ?>
        <li>A variável Xuxu é par.</li>
        <li>:D</li>
    <?php } else { ?>
        <li>A variável Xuxu é ímpar.</li>
        <li>:P</li>
    <?php } ?>

    </ul>
</body>
</html>
