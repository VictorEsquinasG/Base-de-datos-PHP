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
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Acción</th>
        </tr>
        <?php
            $i = 0;
            foreach ($lista as $produc) {
                $foto = "<img src=\"data:image/png;base64, $produc[$i]['foto']\"";
                print('<tr><td>'.$produc[$i]['id'].'</td><td>'.$produc[$i]['nombre'].'</td><td>'.$foto.'</td>'.
                '<td> <span>✏</span><span>🗑</span> </td></tr>');
                $i++;
            }
        ?>
    </table>
</body>
</html>