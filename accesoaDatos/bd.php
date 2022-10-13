<?php
abreConexion();
$resultado = abreConexion()->query("SELECT * FROM producto");
while ($registro = $resultado->fetch()) {
    //echo "id ".$registro['ID'].": ".$registro['nombre']."<br />";
    $producto[$registro['ID']] = [$registro['nombre'],$registro['imagen']];  
}
var_dump($producto);


function abreConexion(){
    $dwes = new PDO("mysql:host=localhost;dbname=productos", "root");
    return $dwes;
}

function get_by_ID( $id ){

    abreConexion();
    $resultado = abreConexion()->query("SELECT * FROM producto where id=$id");
    while ($registro = $resultado->fetch()) {
        //echo "id ".$registro['ID'].": ".$registro['nombre']."<br />";
        $producto[$registro['ID']] = [$registro['nombre'],$registro['imagen']];
    }
    return $producto;
}

function get_All(){
    abreConexion();
    $resultado = abreConexion()->query("SELECT * FROM producto");
    while ($registro = $resultado->fetch()) {
        $productos[$registro['ID']] = [$registro['nombre'],$registro['imagen']];
    }
    return $productos;
}

function insert_New(){
    
}

function delete_by_ID(){
    
}

function update_by_ID(){
    
}

