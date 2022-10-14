<?php
/*
    abreConexion();
    $resultado = abreConexion()->query("SELECT * FROM producto");
    while ($registro = $resultado->fetch()) {
        for ($i=0;$registro = $resultado->fetch();$i++){
             $producto[$i] = [$registro['ID'],$registro['nombre'],$registro['imagen']];
        }
       
    }
var_dump($producto);
*/

function abreConexion(){
    $dwes = new PDO("mysql:host=localhost;dbname=productos", "root");
    return $dwes;
}

function get_by_ID( $id ){

    abreConexion();
    $resultado = abreConexion()->query("SELECT * FROM producto where id=$id");
    while ($registro = $resultado->fetch()) {
        for ($i=0;$registro = $resultado->fetch();$i++){
             $producto[$i] = [$registro['ID'],$registro['nombre'],$registro['imagen']];
        }
       
    }
    return $producto;
}

function get_All(){
    abreConexion();
    $resultado = abreConexion()->query("SELECT * FROM producto");
    
    while ($registro = $resultado->fetch()) {
        $productos[$registro['ID']] = [$registro['nombre'],$registro['imagen']];
    }
    
/*
    while ($registro = $resultado->fetch()) {
        for ($i=0;$registro = $resultado->fetch();$i++){
            $productos[$i] = [$registro['ID'],$registro['nombre'],$registro['imagen']];
       }
    }
    */
    return $productos;
}

function insert_New( $nombre, $imagen){ 

    abreConexion();
    $resultado = abreConexion()->query("INSERT INTO producto (nombre, imagem) VALUES ($nombre,$imagen)");

}

function delete_by_ID($id){

    abreConexion();
    $resultado = abreConexion()->query("DELETE from productos.producto where ID $id");

}

function update_by_ID(){
    
}

