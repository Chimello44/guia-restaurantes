<!DOCTYPE html>
<html>
    
    <body>
        <?php include "operacoes.php"; 
            
            $v1 = 10;
            $v2 = 15;
    
            $resultado = soma($v1, $v2);

            echo "Resultado da soma: ".$resultado;
            
            echo "<br><br>";
            
            $resultado = subtracao($v1, $v2);

            echo "Resultado da subtração: ".$resultado;
            
            echo "<br><br>";
            
            $resultado = multiplicacao($v1, $v2);

            echo "Resultado da multiplicação: ".$resultado;
            
            echo "<br><br>";
            
            $resultado = divisao($v1, $v2);

            echo "Resultado da divisão: ".$resultado;
            
            
            echo "<br><br>";

        
        ?>
    </body>
</html>