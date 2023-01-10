<?php 
    class Product {
        public $animal;
        public $brand;
        public $type;
        public $price;
        public $image;
        
        function __construct(array $animal ,string $brand, string $type , float $price , $image)
        {
            $this->animal = $animal;
            $this->brand = $brand;
            $this->type = $type;
            $this->price = $price;
            $this->image = $image;
        }
    }
?>