<?php
require "models/planta.php";
require "models/arbol.php";
require "models/flor.php";
require "models/arbusto.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>poo</title>
</head>
<body>
    <?php
    $arbusto = new arbusto("juan","25 cm","calido","arbusto","hay que podarme");
    $arbol = new arbol("juan","100 cm","lluvioso","cedro");
    $flor = new flor("juan","10 cm","templado","orquidea");

   $mostrarf=$flor->mostrar();
   $mostrarar=$arbol->mostrar();
   $mostrararbusto=$arbusto->mostrar();
  
   ?>
 
 <?php echo "{$mostrarf}"; ?> <br>
 <?php echo "{$mostrarar}";?> <br>
 <?php echo "{$mostrararbusto}";?><br>
    
</body>
</html>