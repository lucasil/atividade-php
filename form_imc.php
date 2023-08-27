<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <div id="main">
        <h1>Atividade Cálculo IMC e Cálculo de Média</h1>
        <h2>Cálculo do IMC</h2>
        <form method="post">
            <label for="peso">Peso (utilize "." ao inserir as medidas)</label><br>
            <input type="text" name="peso" id="peso" required>
            
            <br>
            
            <label for="altura">Altura (utilize "." ao inserir as medidas)</label><br>
            <input type="text" name="altura" id="altura" required>
            
            <br>

            <button type="submit">Calcular IMC</button>
        </form>

        <?php
        if ($_POST) {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            
            $imc = $peso / ($altura*$altura);
            
            echo "<p>Seu IMC: " . $imc . "</p><br>";

            if ($imc < 17 ){
                echo "<p>Muito abaixo do peso</p>"; 
            } else if($imc >= 17 && $imc < 18.5) {
                echo "<p>Abaixo do peso</p>";
            } else if ($imc >= 18.5 && $imc < 25) {
                echo "<p>Peso normal</p>";
            } else if ($imc >= 25 && $imc < 30) {
                echo "<p>Acima do peso</p>";
            } else if($imc >= 30 && $imc < 35) {
                echo "<p>Obesidade I</p>";
            } else if($imc >= 35 && $imc < 40) {
                echo "<p>Obesidade II (severa)</p>";
            } else {
                echo "<p>Obesidade III (mórbida)</p>";
            }	
        }
        ?>
    </div>
</body>
</html>