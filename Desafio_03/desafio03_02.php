<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Warren Tech Academy - Desafio 02</title>
</head>
<body>
<div>
    <?php
        $numero = $_GET["numero"];     //recebe o valor a ser obtido na soma
        for($i = 1; $i <= 3; $i++){    //recebe os 3 valores que irão compor o vetor
            $valor[$i] = $_GET["valor$i"];
        }
        rsort($valor);                 //organiza o vetor em ordem decrescente 
        $resultado2 = array(0,0);
        $resultadoAnterior= array_fill(0,15,3);
        $resultado = 0;
        for($i = 0; $i<3; $i++){
            unset($resultado);
            if($valor[$i] > $numero || $valor[$i] <= 0){//verifica se os valores do vetor são aceitáveis
                continue;
            }else{
                $soma = $valor[$i]; //utiliza as variáveis $soma e $somax para garantir que a soma dos valores do vetor resultem no numero passado
                $resultado[] = $valor[$i]; //utiliza uos vetores $resultado para guardar os elementos que irão compor a soma
                do{
                    for($e=2;$e>=0;$e--){
                        $somax = $soma;
                        $g = 0;
                        do{//tenta adicionar tantos elementos quanto possível sem ultrapassar o valor limite passado
                            if($somax + $valor[$e] <= $numero){
                                $somax += $valor[$e];
                                $resultado[] = $valor[$e];
                                $g++;
                                true;
                            }elseif($somax + $valor[2] <= $numero){
                                $somax += $valor[2];
                                $resultado[] = $valor[2];
                                $g++;
                                true;
                            }else{
                                break;
                            }
                        }while(true);
                        if($somax == $numero){ //tendo a soma igual a 10, começa a verificar a quantidade de elementos do vetor
                            if(count($resultado) < count($resultadoAnterior)){          
                                $resultadoAnterior = $resultado; //$resultadoAnterior deve recever o vetor com menor numero de elementos
                                rsort($resultadoAnterior);  //este será o resultado impresso no final
                                $resultado2 = array(0,0);
                            }elseif(count($resultado) == count($resultadoAnterior)){
                                $resultadoAtual = $resultado;
                                rsort($resultadoAtual);
                                for($f=0;$f<count($resultado);$f++){
                                    if($resultadoAtual[$f] != $resultadoAnterior[$f]){
                                        $resultado2 = $resultadoAtual;  //cria resultado 2 caso exista um segundo vetor com mesmo numero
                                        break;                          //de elementos mas com valores diferentes do primeiro vetor
                                    }
                                }
                            }    
                        }
                        for($h=0;$h<$g;$h++){
                            array_pop($resultado);
                        } 
                    }
                    if($soma + $valor[$i] <= $numero){
                        $soma += $valor[$i];
                        $resultado[] = $valor[$i];
                        true;
                    }else{
                        break;
                    }
                }while(true);
            }
        }
        if($resultado2[1] != 0){
            echo($resultadoAnterior[1]);
            
            echo("Temos duas combinações possíveis com mesmo tamanho:<br/>");
            print_r($resultadoAnterior);
            echo("<br/>");
            print_r($resultado2);
        }else{
            echo("A soma resultante no valor $numero, contendo o menor número de elementos é:<br/>");
            print_r($resultadoAnterior);
        }
    ?>
    <a href="desafio03_01.php"><br/><button>Página Inicial</button></a> 
</div>
</body>
</html>
 