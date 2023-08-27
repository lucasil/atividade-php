<?php

if ($_POST) {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    
    $imc = $peso / ($altura*$altura);
    
    echo "Seu IMC: " . $imc . "<br>";

    if ($imc < 17 ){
        echo "Muito abaixo do peso"; 
    } else if($imc >= 17 && $imc < 18.5) {
        echo "Abaixo do peso";
    } else if ($imc >= 18.5 && $imc < 25) {
        echo "Peso normal";
    } else if ($imc >= 25 && $imc < 30) {
        echo "Acima do peso";
    } else if($imc >= 30 && $imc < 35) {
        echo "Obesidade I";
    } else if($imc >= 35 && $imc < 40) {
        echo "Obesidade II (severa)";
    } else {
        echo "Obesidade III (mórbida";
    }	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <form method="post">
        <label for="peso">Peso</label>
        <input type="text" name="peso" id="peso" required>
        <br>
        <label for="altura">Altura</label>
        <input type="text" name="altura" id="altura" required>
        <br>

        <button type="submit">Calcular IMC</button>
    </form>

</body>
</html>