<?php
    class Order{
        // Constructor al que le pasamos un producto
        public function __construct($product){
            
            $this->product = $product;
            //COGEMOS EL STOCK DEL PRODUCTO EN CONCRETO
            $stock=$product->getStock();
            //LE RESTAMOS 1
            $stock--;
            //Y SETEAMOS EL STOCK YA RESTADO
            $product->setStock($stock);
        }
        
    }
?>