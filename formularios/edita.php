<?php
if (isset($_POST['guardar']))
{
    $id=trim($_POST['id']);
    $producto=trim($_POST['producto']);
    $imagen="";
    $extension=$_FILES['imagen']['type'];

    $arrayerrores=[];
    $valores=[];

    if(isset($id))
    {
        if(!empty($id))
        {
            $valores[0]=$id;
        }
    }
    else
    {

    }

    if(isset($producto))
    {
        if(!empty($iproducto))
        {
            $valores[1]=$producto;
        }
    }
    else
    {

    }

    $formatosvalidos=array('jpg','png');
    if(isset($_FILES['imagen']))
    {
        if(!empty($_FILES['imagen']))
        {
           
            $imagen=file_get_contents($_FILES['imagen']['tmp_name']);
            $imagen=base64_encode($imagen);
            $valores[2]=$imagen;
            
        }
    }

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" name="input" action="" method="post">

        <label>ID</label>
        <input type="text" name="id"/>
        </br>

        <label>PRODUCTO</label>
        <input type="text" name="producto">
        </br>

        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        IMAGEN: <input name="fichero_imagen" type="file" /></br>
        

        <input type="submit" value="GUARDAR" name="guardar" >
        
    </form> 
    
</body>
</html>