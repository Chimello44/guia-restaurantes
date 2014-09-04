<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php

            //funcoes
            function soma($x, $y){
                $z = $x + $y;
                return $z;
            }
            function subtracao($x, $y){
                $z = $x - $y;
                return $z;
            }
            function multiplicacao($x, $y){
                $z = $x * $y;
                return $z;
            }
            function divisao ($x, $y){
                $z = $x / $y;
                return $z;
            }
            //teste
            $v1 = 30;
            $v2 = 40;
    
            $resultado = soma($v1, $v2);

            echo "Resultado soma: ".$resultado;
            
            
            $resultado = subtracao($v1, $v2);

            echo "Resultado sub: ".$resultado;
            
            
            $resultado = multiplicacao($v1, $v2);

            echo "Resultado mult: ".$resultado;
            
            
            $resultado = divisao($v1, $v2);

            echo "Resultado div: ".$resultado;
            
            

               ?>
    </body>
</html>