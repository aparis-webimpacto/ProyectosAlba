<?php
//incluimos los otros archivos
    include 'classes/Product.php';
    include 'classes/Order.php';
//Instanciamos la clase producto 

    $producto=new Product();
//Setamos los valores
    $producto->setName("Gorro");
    $producto->setStock(5);

//Creamos un objeto pedido al que le pasamos un producto
    $pedido=new Order($producto);
//Cogemos el stock del producto y lo guardamos en una variable
    $stock= $producto->getStock();
//Imprimimos la variable stock
    echo 'El stock es '. $stock;

?>