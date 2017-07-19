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
            $name = "Mr.  A";
            $age = 20;
            $courses = array("C", "Java", "PHP");
            echo "Name: $name, Age: $age, 3rd Course: $courses[2]";
            echo "<br/>";
            echo 'Name: ' . $name . ', Age: ' . $age . ', 3rd Course: ' . $courses[2];
        ?>
    </body>
</html>
