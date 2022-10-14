<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form enctype="multipart/form-data" name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label>ID</label>
        <input type="text" name="id" value="<?php if (isset ($_POST['id'])) echo $_POST['id'];?>"/>
       
        <label>PRODUCTO</label>
        <input type="text" name="producto" value="<?php if (isset ($_POST['producto'])) echo $_POST['producto'];?>"/>

        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        Imagen: <input name="fichero_usuario" type="file" />
        
        <input type="submit" value="guardar" name="guardar" >
        <?php
        /*HAY QUE CAMBIAR LA RUTA POR LA NUEVA RUTA
        HAY QUE HACER EL ENCODE DE LAS IMAGENES Y PASARLAS A UN ARRAY ASOCIATIVO */
        $dir_subida = ($_SERVER["DOCUMENT_ROOT"].'/subidadeficheros/files/');
     
        $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
            
        if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) 
        {         
                $file = fopen($fichero_subido,"r");
                $data=array();
                //echo '<img src="../subidadeficheros/files/cofete.jpg">';
                while (!feof($file)) 
                {
                $data[] = fgetcsv($file,null,';');        
                }                
        } 
        else
        {
            echo "¡Posible ataque de subida de ficheros!\n";
        }
          
        ?>
        
    </form> 
    
</body>
</html>