<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Warren Tech Academy - Desafio 02</title>
</head>
<body>
<div>
    <form method="get" action="desafio03_02.php">
        Indique um numero a ser obtido pela soma de valores do vetor:
        <input type="number" placeholder="0-100" min="0" max="100" name="numero" required/><br><br>
        <?php for($i = 1; $i <= 3; $i++):?>      
            Digite o valor do vetor na posição <?php echo $i; ?>:
            <input type="number" placeholder="1-10" min="1" max="10" name="valor<?php echo $i;?>" required/><br><br>    
        <?php endfor; ?>
        <input type="submit" value="Próximo"/>
    </form>
</div>
</body>
</html>
 