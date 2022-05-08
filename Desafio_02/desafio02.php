<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Warren Tech Academy - Desafio 02</title>
</head>
<body>
<div>
    <form method="get" action="desafio02_01.php">
        Turma:
        <input type="text" placeholder="Nome da Turma" name="turma"/><br><br>
        Professor:
        <input type="text" placeholder="Nome do Professor" name="prof"/><br><br>
        Data de hoje:
        <input type="date" placeholder="Data de Hoje" name="data"/><br><br>
        Número de Alunos da Turma:
        <input type="number" name="numeroAlunos" min = "1" required/><br><br>
        Numero Mínimo de Alunos Presentes:
        <input type="number" name="numeroMinimoPresente" min = "1" required/><br><br> 
        <input type="submit" value="Próximo"/>
    </form>
</div>
</body>
</html>
 