<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $x = 1;
            $y = 2;
            function addWithoutDeclaringGlobal(){
                echo "Add without declaring global: " . ($x + $y);
            }
            function addwithDeclaringGlobal(){
                global $x;
                global $y;
                echo "Add with delcaring global: " . ($x + $y);
            }
            addWithoutDeclaringGlobal();
            echo "<br/>";
            addwithDeclaringGlobal();
        ?>
    </body>
</html>
