<?php

if ($_POST) {
    $nota_1 = $_POST['nota_1'];
    $nota_2 = $_POST['nota_2'];
    
    $media = ($nota_1 + $nota_2)/2;
    
    echo "Média das notas: " . $media . "<br>";
    if($media >= 6) {
        echo "Aprovado";
    } else if($media < 6 && $media >= 4) {
        echo "Exame final";
    } else {
        echo "Reprovado";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média das notas</title>
</head>
<body>
    
   
    <form action="form_notas.php" method="post">
        <label for="nota_1">Nota 1</label>
        <input type="text" name="nota_1" id="nota_1" required>
        <br>
        <label for="nota_2">Nota 2</label>
        <input type="text" name="nota_2" id="nota_2" required>
        <br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>