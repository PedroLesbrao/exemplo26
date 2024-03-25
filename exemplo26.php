<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "ESTRUTURA CONDICIONAL COM OPERADORES<br>";
        /*TABELA VERDADE
         AND - && - E               OR - || - OU
         V e V=V                      V e V=v
         V e F=F                      V e F=v
         F e V=F                      F e V=v
         F e F=F                      F e F=f

         A empresa vai contratar uma pessoa que fala Inglês "E" Alemão.
         A empresa vai contratar uma pessoa que fala Inglês "OU" Alemão.
        */

        $x=10;
        $y=20;
        $z=30;

        if((($z > $x) && ($y < $z)) || ($x != $y)){
            //( v       e     v )   ou     v
            //          v           ou     v
            //                    v 
            echo "O comando if retornou TRUE<br>";
        }
        else{
            echo "O comando if retornou FALSE<br>";
        }

        if((($z < $x) && ($y < $z)) || ($x == $y)){
            //( f       e     v )   ou     f
            //          f           ou     f
            //                    f
            echo "O comando if retornou TRUE<br>";
        }
        else{
            echo "O comando if retornou FAlSE<br>";
        }
    ?>
    </div>
</body>
</html>