<?php 
    require_once __DIR__ . "/Products.php";

    class Toys extends Product {
        public $material;

        function __construct($animal, string $brand, $type, float $price, $image, string $material)
        {
            parent::__construct($animal, $brand, $type , $price , $image);

            $this->material = $material;
        }
    }
?>