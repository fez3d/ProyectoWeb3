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
        // put your code here
        session_start();
        $_SESSION['inicio'] = false;
        $_SESSION['tipo_usuario'] = "nadie";
        include("class_lib.php"); 
        header('Location: Inicio.php');
        ?>
    </body>
</html>
