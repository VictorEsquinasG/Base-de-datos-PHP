<!-- Página del listado -->
<?php
    include("../accesoaDatos/bd.php");
    if (!isset ($_GET['page']) ) {  
        $pagina = 1;  
    } else {  //Si ha sido redireccionado
        $pagina = $_GET['page'];  
    }
    
    $lista = get_All();
    
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    
</body>
</html>