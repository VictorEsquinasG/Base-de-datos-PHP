<!-- Página del listado -->
<?php
    include("../accesoaDatos/bd.php");
    // if (!isset ($_GET['page']) ) {  
    //     $pagina = 1;  
    // } else {  //Si ha sido redireccionado
    //     $pagina = $_GET['page'];  
    // }
    if (isset($_POST['editar']))
    {
        //Creamos el objeto 
        $prod = [];
        //Actualizamos en la Base de Datos
        update_by_ID($prod);
    }else if (isset($_POST['borrar']))
    {

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
    <h3>Listado</h3>
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
                $img = $produc[$i]['foto'];
                $foto = "<img src=\"data:image/png;base64, $img \"";
                print('<tr><td>'.$produc[$i]['id'].'</td><td>'.$produc[$i]['nombre'].'</td><td>'.$foto.'</td>'.
                '<td> <input type="submit" name="editar" value="✏">'.
                '<input type="submit" name="borrar" value="🗑"> </td></tr>');
                $i++;
            }
            print('<tfoot></tfoot>')
        ?>
    </table>
</body>
</html>