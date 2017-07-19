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
           echo "Break test<br/>";
           for($i=0; $i< 10; $i++){
               if($i==5){
                   break;
               }
               echo "$i\t";
           }
           echo "<br/>Continue test<br/>";
           for ($index = 0; $index < 10; $index++) {
               if($index==5){
                   continue;
               }
               echo "$index\t";
           }
        ?>
    </body>
</html>
