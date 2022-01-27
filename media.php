<?php

//declaração de variaveis
$nota1= (double)0;
$nota2= (double)0;
$nota3= (double)0;
$nota4= (double)0;
$media= (double)0;

    //tratamento do botão post
    if (isset($_POST['btncalc'])) {
        
        //atribuição de dados
        $nota1= $_POST['txtn1'];
        $nota2= $_POST['txtn2'];
        $nota3= $_POST['txtn3'];
        $nota4= $_POST['txtn4'];

                //validação para tratamento de caixa vazia
        if ($_POST['txtn1']=="" || $_POST['txtn2']=="" || $_POST['txtn3']=="" || $_POST['txtn4']=="" ){
            echo('<p class="msgErro"> É obrigatório preencher os campos </p>');
        }else{           
                //validação para tratamento de caixa com valor String
            if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
                echo('<p class="msgErro"> Para realizar o calculo todos os dados devem ser números</p>');
            }else{
                //calular media (execução antes de mostrar a msg)
                $media=($nota1+$nota2+$nota3+$nota4)/4;
            }
        }
    }
    
           

    /* 
        ### Revisando ##
        Operadores lógicos:
        E --> (and, &&)
        OU --> (or, ||)
        NAO --> (!)
        
        ## Funções para validação de tipos de dados ##
        is_numeric() --> para numeros 
        is_integer() --> para numeros inteiros 
        is_float() --> para numeros reais
        is_double() --> para numeros reais
        is_array() --> para matrizes
        is_object() --> para objetos
        is_bool() --> para booleanos
        is_string() --> para booleanos

        ## Atenção ##
        ''--> aspas simples reservei para p PHP
        ""--> aspas duplas reservei para outras codificações
        $isset --> informa se a variavel foi iniciada
        
    */

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtn1" value="<?php echo($nota1)?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtn2" value="<?php echo($nota2)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtn3" value="<?php echo($nota3)?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtn4" value="<?php echo($nota4)?>" >
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                Média: <?php echo($media);?>
            </footer>
        </div>
        
		
	</body>

</html>



 