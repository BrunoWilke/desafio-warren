<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Warren Tech Academy - Desafio 02</title>
</head>
<body>
<div>
    <form method="get" action="desafio02_02.php">
        <?php 
        $n = $_GET["numeroAlunos"]; 
        $np = $_GET["numeroMinimoPresente"];
        ?>
        Turma:
        <input type="text" value="<?php echo $_GET["turma"]?$_GET["turma"]:""; ?>" placeholder="Nome da Turma" name="turma" /><br><br>
        Professor:
        <input type="text" value="<?php echo $_GET["prof"]?$_GET["prof"]:""; ?>" placeholder="Nome do Professor" name="prof"/><br><br>
        Data de hoje:
        <input type="date" value="<?php echo $_GET["data"]?$_GET["data"]:""; ?>" placeholder="Data de Hoje" name="data"/><br><br>
        Número de Alunos da Turma:
        <input type="number" value="<?php echo $n; ?>" name="numeroAlunos" min = "1" required/><br><br>
        Numero Mínimo de Alunos Presentes:
        <input type="number" value="<?php echo $np; ?>" name="numeroMinimoPresente" min = "1" required/><br><br> 
        <?php 
        $alunosAtrasados = 0;
        for($i=1; $i<=$n;$i++): 
            $chegada = $_GET["chegada$i"]; 
            if($chegada > 0){
                $alunosAtrasados ++;
            }
            ?>
            <fieldset><legend>Aluno <?php echo $i; ?></legend>
            Nome do Aluno: <input type="text" value="<?php echo $_GET["nomeAluno$i"]?$_GET["nomeAluno$i"]:""; ?>" name="nomeAluno<?php echo $i;?>" placeholder="Opcional"/><nbsp>
            Chegada: <input type="number/" value="<?php echo $chegada; ?>" name="chegada<?php echo $i;?>" placeholder="Ex: -5 p/ 5min adiantado" required>
            </fieldset><br>
        <?php endfor; ?>
    </form>
        <?php 
        $alunosPresentes =  $n - $alunosAtrasados;
        if($alunosPresentes  < $np){
            echo "A aula de hoje está cancelada<br/>";
        }else{
            echo "Teremos aula normal hoje<br/>";
        }  
        ?>
    <a href="desafio02.php"><br/><button>Página Inicial</button></a>
    
</div>
</body>
</html>
 