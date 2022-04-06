<?php
    class Product{
        
        // Atributos
        public $name;
        public $stock;
        //getters y setters
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        
        public function getStock(){
            return $this->stock;
        }
        public function setStock($stock){
            $this->stock = $stock;
        }

    }
?>